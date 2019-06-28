<?php
  $connection = new mysqli("localhost", "root", "");
  $connection->query("SET NAMES utf8");
  $db = $connection->select_db("mess_send");

  $table = "SELECT * FROM message ORDER BY MessageID DESC";
  $table = $connection->query($table);



echo "<table>";
echo "<tr><td><h4>ID</h4></td><td><h4>Дата</h4></td><td><h4>Сообщение</h4></td><td><h4>Функции</h4></td></tr>";
while ($row=$table->fetch_assoc()){
$pole1=$row['MessageID'];
$pole2=$row['Mess_text'];
$pole3=$row['Mess_date'];



echo "<form id='message' method='POST'><tr><td><h4 name='$pole1' id='$pole1'>$pole1</h4></td><td id='date'> <input type='text' name='data' value='$pole3'></td>
<td width='70%' id='text'><textarea id='text' name='mess' >$pole2</textarea></h4></td>
<td><h4> <input type='submit' onclick='upd()' name='upd' value='Изменить'>
<input type='submit'  onclick='delete()' name='delete' value='Удалить'> </td></tr></form>";
}
echo "</table>";

if(isset($_POST['delete'])){
  // $_POST[$pole1]=$id;
Global $pole1;
  $del = "DELETE FROM message WHERE MessageID =".$_POST[$pole1].";";
  $connection->query($del);

}

if(isset($_POST['upd'])){
$mess = $_POST['mess'];
$data= $_POST['data'];
$mess  = $connection->real_escape_string($mess);
$data = $connection->real_escape_string($data);
    $upd ="UPDATE message SET Mess_text='$mess' , Mess_date='$data'  WHERE MessageID = '$pole1'";

  $connection->query($upd);

}

 ?>
<style>
table {
font-family: arial, sans-serif;
border-collapse: collapse;
width: 100%;
}

#text textarea{
  width:100%;
  height: 100px;
  font-size: 18px;
  resize: none;
  text-align: center;
  font-family: serif;


}

td, th {
border: 1px solid #dddddd;
text-align: center;
padding: 6px;
}

tr:nth-child(even) {
background-color: #dddddd5c;
}
</style>
