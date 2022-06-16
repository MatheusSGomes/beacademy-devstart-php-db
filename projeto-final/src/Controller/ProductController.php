<?php

declare(strict_types=1);

namespace App\Controller;

use App\Connection\Connection;
use Dompdf\Dompdf;


class ProductController extends AbstractController
{
  public function listAction(): void 
  {
    $con = Connection::getConnection();

    $result = $con->prepare("SELECT * FROM tb_product;");
    $result->execute();

    parent::render('product/list', $result);
  }

  public function addAction(): void
  {
    $con = Connection::getConnection();

    if ($_POST) {
      $name = $_POST['name'];
      $description = $_POST['description'];
      $price = $_POST['price'];
      $photo = $_POST['photo'];
      $quantity = $_POST['quantity'];
      $categoryId = $_POST['category'];
      $createdAt = date('Y-m-d H:i:s');

      $query = "
        INSERT INTO tb_product 
          (name, description, price, photo, quantity, category_id, created_at)
        VALUES 
          ('{$name}', '{$description}', '{$price}', '{$photo}', '{$quantity}', '{$categoryId}', '{$createdAt}');
      ";

      $result = $con->prepare($query);
      $result->execute();

      echo "<div class='alert alert-success'>Produto Adicionado</div>";
    }

    $result = $con->prepare("SELECT * FROM tb_category;");
    $result->execute();

    parent::render('product/add', $result);
  }

  public function removeAction(): void
  {
    $id = $_GET['id'];

    $con = Connection::getConnection();

    $query = "DELETE FROM tb_product WHERE id='{$id}';";

    $result = $con->prepare($query);
    $result->execute();

    parent::renderMessage("Produto Excluido");
  }

  public function editAction(): void
  {
    $id = $_GET['id'];

    $con = Connection::getConnection();
    $categories = $con->prepare("SELECT * FROM tb_category;");
    $categories->execute();

    if ($_POST) {
      $name = $_POST['name'];
      $description = $_POST['description'];
      $price = $_POST['price'];
      $photo = $_POST['photo'];
      $quantity = $_POST['quantity'];
      $category = $_POST['category'];

      $query = "
        UPDATE tb_product
        SET 
          name='{$name}',
          description='{$description}',
          photo='{$photo}',
          price='{$price}',
          quantity='{$quantity}',
          category_id='{$category}'
        WHERE id='{$id}';
      ";

      $resultUpdate = $con->prepare($query);
      $resultUpdate->execute();

      echo "<div class='alert alert-success'>Produto atualizado</div>";
    }

    $product = $con->prepare("SELECT * FROM tb_product WHERE id='{$id}';");
    $product->execute();

    parent::render('product/edit', [
      'product' => $product->fetch(\PDO::FETCH_ASSOC),
      'categories' => $categories
    ]);
  }

  public function reportAction(): void
  {
    $con = Connection::getConnection();
    $result = $con->prepare("SELECT prod.id, prod.name, prod.quantity, cat.name as category FROM tb_product prod INNER JOIN tb_category cat ON prod.category_id = cat.id;");
    $result->execute();

    $content = '';

    while ($product = $result->fetch(\PDO::FETCH_ASSOC)) {
      // var_dump($product);
      // die();

      extract($product);
      
      $content .= "
        <tr>
          <td>{$id}</td>
          <td>{$name}</td>
          <td>{$quantity}</td>
          <td>{$category}</td>
        </tr>
      ";
    }

    $html = "
      <style>
        h1 {
          text-align: left;
          font-family: arial, sans-serif;
        }

        hr {
          border: 1px solid #ccc;
        }
        
        table {
          width: 100%;
          font-family: arial, sans-serif;
        }
        
        thead {
          background: black;
          color: white;
        }
        
        table, th, td {
          border: 1px solid black;
          border-collapse: collapse;
          padding: 5px;
          text-align: center;
          
        }
      </style>

      <h1>Relatório de Produtos no Estoque</h1>
      <hr>

      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Categoria</th>
          </tr>
        </thead>
        <tbody>
          {$content}
        </tbody>
      </table>
    ";

    // instantiate and use the dompdf class
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'portrait');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream();
  }
}