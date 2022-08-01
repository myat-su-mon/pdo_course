<?php

require "conn.php";

try{
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->beginTransaction();
    $conn->query("INSERT INTO post (title, body) 
        VALUES ('ruby', 'body about ruby')");
        $conn->query("INSERT INTO post (title, body) 
        VALUES ('php', 'body about php')");
        $conn->commit();
}catch(Exception $e){
    $conn->rollback();
    echo $e->getMessage();
    $conn = null;
}

?>