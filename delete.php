<?php
// Check if the delete button was clicked and the IdToDo value was passed via GET request

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

$idToDo = $_GET['deleteButton'];
var_dump($idToDo);

$sql = "DELETE FROM `ToDoData` WHERE `IdToDo` = $idToDo";

if ($conn->query($sql) === TRUE) {
    echo "Data Deleted";
    header('Location: /todo.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
