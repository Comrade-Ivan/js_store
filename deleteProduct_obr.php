<?php
require_once("components/db.php");
$id = $_GET["id"];
$result = $mysqli->query("DELETE FROM `products` WHERE `id`='$id'");

if($result) {
  exit("ok");
} else {
  exit("Не удалось удалить товар");
}
