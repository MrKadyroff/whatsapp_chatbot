<?php
  $connection = new mysqli("localhost", "root", "");
  $connection->query("SET NAMES utf8");
  $db = $connection->select_db("mess_send");
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $name = stripslashes($name);
  $phone = stripslashes($phone);
  $name = $connection->real_escape_string($name);
  $phone = $connection->real_escape_string($phone);


  $ins = "INSERT INTO clients (`name`,`phone`) VALUES ('$name','$phone')";
  $connection->query($ins);

 ?>
