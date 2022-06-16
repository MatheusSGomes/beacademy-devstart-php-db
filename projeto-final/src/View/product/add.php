<h1 class="display-4 fw-normal">Adicionar produto</h1>

<form method="POST" action="">
  <label for="category">Categoria</label>
  <select id="category" name="category" class="form-select">
    <option value="" selected disabled>-- SELECIONE --</option>
    <?php
      while ($category = $data->fetch(\PDO::FETCH_ASSOC)) {
        extract($category);

        echo "<option value='{$id}'>{$name}</option>";
      }
    ?>
  </select>

  <label for="name">Nome: </label>
  <input type="text" name="name" id="name" class="form-control mb-3">

  <label for="description">Descrição: </label>
  <textarea name="description" id="description" class="form-control mb-3"></textarea>

  <label for="price">Preço: </label>
  <input type="text" name="price" id="price" class="form-control mb-3" placeholder="Ex: 279.90">

  <label for="quantity">Quantidade: </label>
  <input type="text" name="quantity" id="quantity" class="form-control mb-3">

  <label for="photo">Foto: </label>
  <input type="text" name="photo" id="photo" class="form-control mb-3" placeholder="URL da Foto">

  <button class="btn btn-primary">Enviar</button>
</form>