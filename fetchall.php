<?php

require "conn.php";
$data = $conn->query("SELECT * FROM post");

$all = $data->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($all);
echo "</pre>";

// echo $all[0]->title; // obj
echo $all[0]['body'];
?>