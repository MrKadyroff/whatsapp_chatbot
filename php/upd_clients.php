<?php
  $connection = new mysqli("localhost", "root", "");
  $connection->query("SET NAMES utf8");
  $db = $connection->select_db("mess_send");

  $table = "SELECT * FROM clients ORDER BY clientID DESC";
  $table = $connection->query($table);


echo "<table>";
echo "<tr><td><h4>ID</h4></td><td><h4>Номера</h4></td><td><h4>ФИО</h4></td><td><h4>Функции</h4></td></tr>";

while ($row=$table->fetch_assoc()){
$id=$row['clientID'];
$name=$row['name'];
$phone=$row['phone'];


echo "<tr><td><input type='text' value='$id' id='id_$id' name='id_$id' readonly></td>
<td id='date'><input type='text' name='phone_$id' id='phone_$id' value='$phone'></td>
<td width='70%' id='text' ><textarea id='name_$id' name='name_$id'>$name</textarea></h4></td>
<td><input type='submit' onclick='upd(\"".'id_'.$id."\", \"".$name."\",\"".$phone."\")' id='upd_$id' name='upd' value='Изменить'> <input type='submit' id='del_$id'  onclick='del(\"".$id."\", \"".$name."\",\"".$phone."\")' name='del' value='Удалить'> </td></tr> ";
}
echo "</table>";





 ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

function del(id, name, phone) {

alert (id+"  "+phone+"  "+name);
        $.ajax({

            url: 'del.php',
            type:'POST',
            data: {
                id:id,
                name:name ,
                phone:phone,
            },
            success : function(data){
              alert(data);
            }
        });
};

function upd(id, name, phone) {

alert (id+"  "+phone+" name="+name);
        $.ajax({

            url: 'upd.php',
            type:'POST',
            data: {
                id:id,
                name:name ,
                phone:phone,
            },
            success : function(data){
              alert(data);
            }
        });
};

</script>

<style>
table {
font-family: arial, sans-serif;
border-collapse: collapse;
width: 100%;
}

#text textarea{
  width:80%;
  height: 30px;
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
