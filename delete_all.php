<?php
require 'db_conn.php';

    
    // $id = $_GET['id'];
    $pdo->exec("TRUNCATE TABLE users");
    // $stmt->execute([$id]);
    header("Location:view.php");
    echo "hi";
?>