<?php

  $connection = new mysqli("localhost", "root", "");
  $connection->query("SET NAMES utf8");
  $mess_text = $_POST['message'];
  $date = $_POST['date'];
  $mess_text = stripslashes($mess_text);
  $date = stripslashes($date);
  $mess_text = $connection->real_escape_string($mess_text);
  $date = $connection->real_escape_string($date);
  $db = $connection->select_db("mess_send");

  $ins = "INSERT INTO message (`Mess_text`,`Mess_date`,`sended`) VALUES ('$mess_text','$date',0)  ";
  $check = "SELECT COUNT(Mess_text)  FROM message where `Mess_text` = '$mess_text'";
  $count  =   $connection->query($ins);
  // if ($count->num_rows>0){
  //   echo "success";
  // }else {
  //   echo "sad";
  // }
  // if(>0){
  //   echo "Сущ-ет";
  // }else{
  // $connection->query($ins);
  // }




 ?>
