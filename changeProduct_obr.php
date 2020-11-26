<?
  header('Content-type: text/html; charset=utf-8');
  require_once("components/db.php");
  $id = $_POST['id'];
  $name = htmlspecialchars( trim($_POST["name"]) ); //Ключи в массиве $_POST - атрибуты name
  $price = htmlspecialchars( trim($_POST["price"]) );
  $shortDescription = htmlspecialchars( trim($_POST["short-description"]) );
  $fullDescription = htmlspecialchars( trim($_POST["full-description"]) );
  $imageSrc = htmlspecialchars( trim($_POST["image-src"]) );
  
  if (empty($name) || empty($price) || empty($shortDescription) || empty($fullDescription) || empty($imageSrc)) {
    exit("Не все поля заполнены"); //как return для файла-обработика
  }
  
  if (mb_strlen($name) < 3 || $price < 0) {
    exit("Невалидные данные"); 
  }
  
  $result = $mysqli->query("UPDATE `products` SET `name`='$name',`price`='$price',`short_description`='$shortDescription',`full_description`='$fullDescription',`image_src`='$imageSrc' WHERE `id`='$id'");

  if($result) {
    exit("ok");
  } else {
    exit("Не удалось обновить товар");
  }