<?php

require "conn.php";

$title = "title five";
$body = "the body of post five";

$insert = $conn->prepare("INSERT INTO post 
(title, body) VALUES (?, ?)");
$insert->execute(array(
    $title,
    $body
));

?>