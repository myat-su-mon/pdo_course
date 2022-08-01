<?php

require "conn.php";
$rows = $conn->query("select body from post");

// while($row = $rows->fetch()){
//     echo $row['body']. "<br>";
// }

// foreach($rows as $row){
//     echo $row['body']. "<br>";
// }

// while($row = $rows->fetch(PDO::FETCH_OBJ)){
//     echo $row->body . "<br>";
// }

// while($row = $rows->fetch(PDO::FETCH_ASSOC)){
//     echo $row['body'] . "<br>";

?>