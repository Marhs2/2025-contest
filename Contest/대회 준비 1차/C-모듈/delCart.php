<?php
require_once "db.php";


// $cate = $_POST["cate"];
// $idx = $_POST["idx"];
// $price = $_POST["price"];
// $title = $_POST["title"];
extract($_POST);
echo $title;
if ($_SESSION["ss"] ?? false) {
  $userId = $_SESSION["ss"]->id;
} else {
  echo "존재안함";
}


if (!DB::fetch("select * from usercart where  itemidx = '$idx' and itemcate = '$cate' and user = '$userId'")) {
  DB::exec("INSERT INTO usercart( user, itemcate, itemidx , count , price , title) VALUES ('$userId','$cate','$idx','1' ,'$price' ,'$title')");
} else {
  DB::exec("UPDATE usercart SET count= count + 1  where  itemidx = '$idx' and itemcate = '$cate' and user = '$userId' ");
}
