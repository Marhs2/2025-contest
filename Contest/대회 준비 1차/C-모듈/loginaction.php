<?php
require_once "db.php";
require_once "lib.php";

$id = $_POST["id"];
$psw = $_POST["psw"];



$login = DB::fetch("SELECT * FROM userinfo WHERE id = '$id' ");

if (!$login) {
  alert("로그인 실패");
  move("login.php");
} else {
  $salt  = $login->salt;
  $h_psw  = $login->psw;
  $newpsw = hash('sha256',  $salt . $psw);
  if (DB::fetch("SELECT * FROM userinfo WHERE psw = '$newpsw' ")) $_SESSION["ss"] = $login;

  alert("로그인 성공");
  move("index.php");
}
