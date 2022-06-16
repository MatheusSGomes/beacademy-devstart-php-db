<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4">
  <nav class="d-inline-flex mt-md-0 ms-md-auto">
    <a href="/categorias/nova" class="btn btn-outline-dark btn-sm me-3">Adicionar Categoria</a>
  </nav>
</div>

<h1 class="display-4 fw-normal">Listar Categorias</h1>

<table class="table table-hover table-striped">
  <thead class="table-dark">
    <tr>
      <th>#ID</th>
      <th>Nome</th>
      <th>Descrição</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php
      while($category = $data->fetch(\PDO::FETCH_ASSOC)) {
        extract($category);

        echo "<tr>";
          echo "<td>{$id}</td>";
          echo "<td>{$name}</td>";
          echo "<td>{$description}</td>";
          echo "<td>
                  <a href='/categorias/editar?id={$id}' class='btn btn-primary btn-sm'>Editar</a>
                  <a href='/categorias/excluir?id={$id}' class='btn btn-danger btn-sm'>Excluir</a>
                </td>";
        echo "</tr>";
      }
    ?>
  </tbody>
</table>