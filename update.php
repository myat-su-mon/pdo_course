<?php

require "conn.php";

$newTitle = "#1";
$id = 1;

$update = $conn->prepare("UPDATE post SET 
    title = :title WHERE id = :id");

$update->execute(array(
    ":title" => $newTitle,
    ":id" => $id
));