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

$sql = "SELECT * FROM `ToDoData`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {

        if ($row['Status'] == 'nonaktif') { ?>
            <h1 style="text-decoration:line-through">Value: <?php echo $row['TaskName'] ?></h1>

        <?php
        } else { ?>
            <form action="update.php" method="post">
                <label>
                    <input type="checkbox" name="deleteButton" value="<?php echo $row['IdToDo'] ?>" id="button_<?php echo $row['IdToDo'] ?>">
                    Button Selesai for <?php echo $row['TaskName'] ?>
                    </input>
                </label>
            </form>
            <h1>Value: <?php echo $row['TaskName'] ?></h1>
            <form action="delete.php" method="get">
                <button type="submit" name="deleteButton" value="<?php echo $row['IdToDo'] ?>" id="button_<?php echo $row['IdToDo'] ?>">
                    Button Delete for <?php echo $row['TaskName'] ?>
                </button>
            </form>
        <?php
        }
        ?>
<?php
    }
}
$conn->close();
?>