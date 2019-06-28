<?php
$connection = new mysqli("localhost", "root", "");
$connection->query("SET NAMES utf8");
$db = $connection->select_db("mess_send");

// $upd ="UPDATE clients SET name=`$_POST[name]` , phone=`$_POST[phone]` WHERE clientID = 60";
// $upd ="UPDATE clients SET `name`=".`$_POST[name]`.",`phone`=".`$_POST[phone]`." WHERE `clientID`=$_POST[id]";

$upd ="UPDATE clients SET `name`=".$connection->real_escape_string($_POST['name'])." ,`phone`=".$connection->real_escape_string($_POST['phone'])." WHERE `clientID`=$_POST[id]";

  $connection->query($upd);

 ?>
