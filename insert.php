<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todolist";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$valueTodo = $_POST['inputTodo'];

if (!$valueTodo == null) {
  $sql = "INSERT INTO `todofunction`(`IdAccount`, `status`, `value`) VALUES ('1','aktif','$valueTodo')";
  $conn->query($sql);
}
header('Location: /todo.php');
$conn->close();