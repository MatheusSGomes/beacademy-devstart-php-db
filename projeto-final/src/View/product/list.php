<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4">
  <nav class="d-inline-flex mt-md-0 ms-md-auto">
    <a href="/produtos/novo" class="btn btn-outline-dark btn-sm me-3">Adicionar Produto</a>
  </nav>
</div>

<h1 class="display-4 fw-normal">Listar produtos</h1>

<table class="table table-hover table-striped">
  <thead class="table-dark">
    <tr>
      <th>#ID</th>
      <th>Nome</th>
      <th>Descrição</th>
      <th>Imagem</th>
      <th>Preço</th>
      <th>Quantidade</th>
      <th>Data de Cadastro</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php
      while($product = $data->fetch(\PDO::FETCH_ASSOC)) {
        extract($product);
        
        echo "
          <tr>
            <td>{$id}</td>
            <td>{$name}</td>
            <td>{$description}</td>
            <td><img src='{$photo}' width='130px'></td>
            <td>{$price}</td>
            <td>{$quantity}</td>
            <td>{$created_at}</td>
            <td>
              <a href='' class='btn btn-primary btn-sm'>Editar</a>
              <a href='' class='btn btn-danger btn-sm'>Excluir</a>
            </td>
          </tr>
        ";
      }
    ?>
  </tbody>
</table>