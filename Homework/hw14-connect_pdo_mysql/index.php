<?php

class DB {

  static $obj;

  private function __clone(){}
  private function __wakeup(){}

  private function __construct(){

	require_once 'config.php';

    $this->con = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  }

  static public function getConnect(){
    if(empty(self::$obj))
      self::$obj = new self();
    return self::$obj->con;
  }

}

$con = DB::getConnect();

$sql = "SELECT name, title, genre FROM authors INNER JOIN books ON (authors.author_id = books.genre_id) INNER JOIN genres ON (books.genre_id =
genres.genre_id)";

$result = $con->query($sql);

$articles = $result->fetchAll(PDO::FETCH_ASSOC);

print_r($articles);