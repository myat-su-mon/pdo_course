<?php

require "conn.php";

$rows = $conn->query("SELECT * FROM post LIMIT 3");

//print_r($rows->rowCount());

if($rows->rowCount() > 0){
    while($row = $rows->fetch(PDO::FETCH_ASSOC)){
        echo $row['body'] . "<br>";
    }
}else {
    echo "no results yet";
}