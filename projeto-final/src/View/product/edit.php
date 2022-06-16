<h1 class="display-4 fw-normal">Editar produto</h1>

<?php extract($data); ?>

<form method="POST" action="">
  <label for="category">Categoria</label>
  
  <select id="category" name="category" class="form-select" required>
    <option disabled>-- SELECIONE --</option>
    <?php
      while ($category = $data['categories']->fetch(\PDO::FETCH_ASSOC)) {
        extract($category);

        if ($product['category_id'] == $id) {
          echo "<option value='{$id}' selected>{$name}</option>";
        } else {
          echo "<option value='{$id}'>{$name}</option>";
        }
      }
    ?>
  </select>

  <label for="name">Nome: </label>
  <input value="<?php echo $product['name']?>" type="text" name="name" id="name" class="form-control mb-3" required>

  <label for="description">Descrição: </label>
  <textarea name="description" id="description" class="form-control mb-3" required><?php echo $product['description']?></textarea>

  <label for="price">Preço: </label>
  <input value="<?php echo $product['price']?>" type="text" name="price" id="price" class="form-control mb-3" placeholder="Ex: 279.90" required>

  <label for="quantity">Quantidade: </label>
  <input value="<?php echo $product['quantity']?>" type="text" name="quantity" id="quantity" class="form-control mb-3" required>

  <label for="photo">Foto: </label>
  <input value="<?php echo $product['photo']?>" type="text" name="photo" id="photo" class="form-control mb-3" placeholder="URL da Foto" required>

  <button class="btn btn-primary">Atualizar</button>
</form>