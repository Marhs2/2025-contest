<?php
require_once "db.php";

if ($_SESSION["ss"]->id) {
  $user = $_SESSION["ss"]->id;
  extract($_POST);
  if (DB::fetch("SELECT * FROM usercart WHERE user = '$user' and itemcate = '$cate' and itemidx = '$num'")) {
    DB::exec("UPDATE usercart SET  count=count + 1  WHERE user = '$user' and itemcate = '$cate' and itemidx = '$num'");
  } else {
    DB::exec("INSERT INTO usercart( user, itemcate, itemidx, count, price, title) VALUES ('$user','$cate','$num','1','$price','$title')");
  }
} else {
  return;
}
