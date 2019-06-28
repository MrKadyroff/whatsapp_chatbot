<?php

$connection = new mysqli("localhost", "root", "");
$connection->query("SET NAMES utf8");
$db = $connection->select_db("mess_send");

function mes1(){
  global $connection,$id,$tel;
   $sql = "SELECT * FROM message WHERE  sended=0  limit 1";
   $client = "SELECT * FROM clients";
   $result = $connection->query($sql);
   $result2 = $connection->query($client);
   while ($row3 = $result2->fetch_assoc()){
     echo $t =$row3['phone']."<br>";
   }
   while ($row = $result->fetch_assoc()) {
echo "<br> Сообщение : ".$text = $row['Mess_text'];
$id = $row['MessageID'];
echo "<br> Дата : ".$date = $row['Mess_date'];
$today = strtotime("today");
$date  = strtotime($date);
if ($today != $date){
  echo "  Дата не совпадает";
}else if($today=$date) {
  wp_send1($tel,$text,$id);
}
   }
   while ($row2 = $result2->fetch_assoc()) {
echo "<br>";
$tel = $row2['phone'];
echo "Номер : ".$tel;
}
  }
mes1();


function wp_send1($tel,$text,$id){
  global $connection;
$data = [
    'phone' => $tel, // Телефон получателя
    'body' => $text, // Сообщение
];
$json = json_encode($data); // Закодируем данные в JSON
// URL для запроса POST /message
$url = 'https://eu36.chat-api.com/instance47494/message?token=kk4fkovpx6z7k01e';
// Сформируем контекст обычного POST-запроса
$options = stream_context_create(['http' => [
        'method'  => 'POST',
        'header'  => 'Content-type: application/json',
        'content' => $json
    ]
]);
// Отправим запрос
$result = file_get_contents($url, false, $options);
$sended = "UPDATE message SET sended = 1 where id=$id ";
$connection->query($sended);
}

 ?>
