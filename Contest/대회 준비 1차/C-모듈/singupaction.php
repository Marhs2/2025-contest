<?php
require_once "db.php";
require_once "lib.php";

$name = $_POST["name"];
$id = $_POST["id"];
$email = $_POST["email"];
$psw = $_POST["psw"];



$login = DB::fetch("SELECT * FROM userinfo WHERE id = '$id'");

if ($login) {
  alert("회원가입 실패");
  move("index.php");
};

[$h_psw, $salt] = hashPw($psw);
DB::exec("INSERT INTO userinfo( id, name, psw , salt) VALUES ('$id','$name','$h_psw','$salt')");

$login = DB::fetch("SELECT * FROM userinfo WHERE id = '$id' ");

$_SESSION["ss"] = $login;
move("index.php");

