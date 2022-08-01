<?php

require "conn.php";

$data = $conn->query("SELECT * FROM post");

$one = $data->fetchColumn(3);

echo $one;

?>