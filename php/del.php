<?php
$connection = new mysqli("localhost", "root", "");
$connection->query("SET NAMES utf8");
$db = $connection->select_db("mess_send");


  $del = "DELETE FROM clients WHERE clientID = $_POST[id] ";
  $connection->query($del);


 ?>
