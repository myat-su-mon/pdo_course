<?php

require "conn.php";

$title = "title number ten";
$body = "the body of number ten";

$insert = $conn->prepare("INSERT INTO post 
(title, body) VALUES (?, ?)");
$insert->execute(array(
    $title,
    $body
));

echo $conn->lastInsertId();

?>