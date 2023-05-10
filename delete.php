<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todolist";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$idToDo = $_GET['deleteButton'];

$sql = "DELETE FROM `todofunction` WHERE `IdTodo` = $idToDo";
$conn->query($sql);
header('Location: /todo.php');
$conn->close();