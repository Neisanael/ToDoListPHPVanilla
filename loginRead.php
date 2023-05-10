<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todolist";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT `IdAccount` FROM `todoaccount` WHERE `username` = '$username' AND `$password` = 'password'";
$result = $conn->query($sql);

if($result){
    $row = $result->fetch_assoc();
    session_start();
    $_SESSION['idAccount'] = $row['IdAccount'];
    $id = $_SESSION['idAccount'];
    header('Location: /todo.php');
}else{
    header('Location: /loginTodo.php');
}

$conn->close();
