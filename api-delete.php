<?php

header('Content-type: application/json');

  $servername = 'localhost';
  $username = 'flavio';
  $password = 'admin';
  $dbname = 'HOTELDB';

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn -> connect_error) {

    var_dump('error');
    var_dump($conn);
    die();
  }

  $id = $_GET["id"];

  $query = "
  DELETE FROM pagamenti
  WHERE id = " . $id . "
  ";

  // echo json_encode(["query" => $query]);

  $res = $conn -> query($query);

  $conn->close();
  echo json_encode($pagamenti);


 ?>
