<?php
header("Content-Type: text/html; charest=utf-8");

require_once "lib.php";

session_start();


class DB
{
  static $db = null;
  static function getDB()
  {
    if (!self::$db) {
      $connection = new PDO("mysql:host=localhost;dbname=shoping;charset=utf8mb4", "root", "");
      $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
      self::$db = $connection;
    }
    return self::$db;
  }
  static function exec($query)
  {
    try {
      self::getDB()->exec($query);
      return true;
    } catch (Exception $e) {
      return false;
    }
  }
  static function fetch($query)
  {
    $stmt = self::getDB()->query($query);
    return $stmt->fetch();
  }
  static function fetchAll($query)
  {
    $stmt = self::getDB()->query($query);
    return $stmt->fetchAll();
  }
}



function adminCreate()
{
  [$h_psw, $salt] = hashPw("1111");

  if (!DB::fetch("SELECT * FROM userinfo WHERE id = 'admin'"))
    DB::exec("INSERT INTO userinfo(id, psw, salt) VALUES ('admin','$h_psw','$salt')");
}
adminCreate();
