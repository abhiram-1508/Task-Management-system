<?php
include 'db.php';
$id = $_GET['id'];
$conn->query("DELETE FROM tasks WHERE id=$id");
header("Location: index.php");
?>