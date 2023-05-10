<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todolist";

session_start();
$conn = new mysqli($servername, $username, $password, $dbname);
$idAccount = $_SESSION['idAccount'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_GET['checked'])) {
    $idToDo = $_GET['checked'];

    $sql = "UPDATE `todofunction` SET `IdAccount`='$idAccount',`status`='nonaktif' WHERE `IdTodo` = $idToDo";
    $conn->query($sql);
    header('Location: /todo.php');
    $conn->close();
} elseif (isset($_GET['notChecked'])) {
    $idToDo = $_GET['notChecked'];

    $sql = "UPDATE `todofunction` SET `IdAccount`='$idAccount',`status`='aktif' WHERE `IdTodo` = $idToDo";
    $conn->query($sql);
    header('Location: /todo.php');
    $conn->close();
}
