<?php
require 'db_conn.php';

    
    $id = $_GET['id'];
    $stmt = $pdo->prepare("DELETE FROM users WHERE id=?");
    $stmt->execute([$id]);
    header("Location:view.php");
?>