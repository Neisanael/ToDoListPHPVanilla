<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todolist";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
session_start();
$valueTodo = $_POST['inputTodo'];
$idAccount = $_SESSION['idAccount'];

if (!$valueTodo == null) {
  $sql = "INSERT INTO `todofunction`(`IdAccount`, `status`, `value`) VALUES ('$idAccount','aktif','$valueTodo')";
  $conn->query($sql);
}
header('Location: /todo.php');
$conn->close();