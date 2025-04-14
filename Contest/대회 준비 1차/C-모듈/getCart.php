<?php

require_once "db.php";

if ($_SESSION["ss"] ?? false) {
  $user = $_SESSION["ss"]->id;
} else {
  return;
}

header("Content-Type: application/json; charset=utf-8");

echo json_encode(DB::fetchAll("select * from usercart where user = '$user'")); 
