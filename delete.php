<?php

$id = $_GET['id'];
include "db.php";
$conn->query("DELETE FROM students WHERE id = '$id'");

header("location:read.php");
?>