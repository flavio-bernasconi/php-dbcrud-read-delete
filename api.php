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

    $query = "
    SELECT id, price, status, prenotazione_id
    FROM pagamenti
    ";

    $res = $conn -> query($query);

    $pagamenti = [];

    if ($res && $res -> num_rows > 0) {

      while($row = $res -> fetch_assoc()) {

        $pagamenti[] = [
          'id' => $row['id'],
          'price' => $row['price'],
          'status' => $row['status'],
          'prenotazione_id' => $row['prenotazione_id'],
        ];

        // $ospiti[] = $row;

      }
    }

    $conn->close();
    echo json_encode($pagamenti);

?>
