<?php 
$title = "Добавить товар";
require_once("components/header.php"); 
?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-12">
      <h1 class="text-center">Добавить товар</h1>
    </div>
    <div class="col-7">
      <form action="addProduct_obr.php" method="POST" class="add-form">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">@</span>
          </div>
          <input type="text" class="form-control" placeholder="Название товара" name="name" required>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">@</span>
          </div>
          <input type="text" class="form-control" placeholder="Цена" name="price">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">@</span>
          </div>
          <textarea rows="3" type="text" class="form-control" placeholder="Краткое описание" name="short-description"></textarea>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">@</span>
          </div>
          <textarea rows="10" type="text" class="form-control" placeholder="Полное описание" name="full-description"></textarea>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">@</span>
          </div>
          <input type="text" class="form-control" placeholder="Ссылка на картинку" name="image-src">
        </div>
        <p class="error-text text-danger d-none"></p>
        <input type="submit" value="Добавить товар" class="btn btn-primary btn-block">
      </form>
    </div>
  </div>
</div>
<script src="js/addProduct.js"></script>
<?php require_once("components/footer.php"); ?>