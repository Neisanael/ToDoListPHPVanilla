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
$confirmPassword = $_POST['confirmPassword'];

if ($password != $confirmPassword) {
    echo "<SCRIPT>
    alert('tidak sama')
    window.location.replace('loginTodo.php');
</SCRIPT>";
    $conn->close();
    return;
}


$sql = "INSERT INTO `todoaccount`(`username`, `password`) VALUES ('$username','$password')";
$result = $conn->query($sql);

if ($result) {
    echo "<SCRIPT>
    alert('akun terbuat')
    window.location.replace('loginTodo.php');
</SCRIPT>";
    $conn->close();
    return;
} else {
    echo "<SCRIPT>
    alert('Username Telah dibuat sebelumnya')
    window.location.replace('loginTodo.php');
</SCRIPT>";
    $conn->close();
    return;
}
