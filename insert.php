<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ToDoList";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$valueTodo = $_POST['inputTodo'];

if (!$valueTodo == null) {
  $sql = "INSERT INTO `ToDoData`(`IdAccountKey`, `Status`, `TaskName`) VALUES ('1','aktif','$valueTodo')";
  $conn->query($sql);
}

header('Location: /todo.php');
