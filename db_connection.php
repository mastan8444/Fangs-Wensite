<?php
$servername = "sql312.infinityfree.com";
$username = "if0_36003154";
$password = "21030cm286";
$database = "if0_36003154_fangs";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
?>