<?php

require "conn.php";

$id = 7;
$delete = $conn->prepare("DELETE FROM post
    WHERE id = :id");
$delete->execute([
    ":id" => $id
]);