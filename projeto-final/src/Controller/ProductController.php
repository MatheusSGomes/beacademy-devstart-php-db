<?php

declare(strict_types=1);

namespace App\Controller;

use App\Connection\Connection;

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
}