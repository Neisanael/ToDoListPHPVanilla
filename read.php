<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todolist";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `todofunction`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        if ($row['status'] == 'nonaktif') { ?>

            <form action="update.php" method="get" id="form_<?php echo $row['IdTodo'] ?>">
                <label id="label_<?php echo $row['IdTodo'] ?>" style="text-decoration:line-through">
                    <input type="checkbox" id="checked_<?php echo $row['IdTodo'] ?>" name="notChecked" checked><?php echo $row['value'] ?>
                    <script>
                        var checkbox = document.getElementById('checked_<?php echo $row['IdTodo'] ?>');
                        var form = document.getElementById('form_<?php echo $row['IdTodo'] ?>');

                        checkbox.addEventListener('change', function() {
                            if (!this.checked) {
                                var hiddenInput = document.createElement('input');
                                hiddenInput.type = 'hidden';
                                hiddenInput.name = 'notChecked';
                                hiddenInput.value = '<?php echo $row['IdTodo'] ?>';
                                form.appendChild(hiddenInput);
                                form.submit();
                            }
                        });
                    </script>
                </label>
            </form>

        <?php
        } else { ?>

            <form action="update.php" method="get">
                <label id="label_<?php echo $row['IdTodo'] ?>">
                    <button type="submit" name="checked" value="<?php echo $row['IdTodo'] ?>" id="checked_<?php echo $row['IdTodo'] ?>" style="display: none;"></button>
                    <input type="checkbox"><?php echo $row['value'] ?>
                </label>
            </form>

        <?php
        }
        ?>
        <form action="delete.php" method="get">
            <button type="submit" name="deleteButton" value="<?php echo $row['IdTodo'] ?>" id="button_<?php echo $row['IdTodo'] ?>">
                Button Delete for <?php echo $row['value'] ?>
            </button>
        </form>
<?php
    }
}
$conn->close();
?>