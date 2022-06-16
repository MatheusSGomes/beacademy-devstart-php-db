<h1 class="display-4 fw-normal">Editar Categoria</h1>

<form action="" method="POST" class="form mt-3">
  <label for="name">Nome: </label>
  <input value="<?php echo $data['name'] ?>" class="form-control mb-3" type="text" name="name" id="name">

  <label for="description">Descrição: </label>
  <textarea class="form-control mb-3" name="description" id="description"><?php echo $data['description'] ?></textarea>

  <button class="btn btn-primary">Atualizar</button>
</form>