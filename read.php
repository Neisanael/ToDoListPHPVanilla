<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "todolist";

    $conn = new mysqli($servername, $username, $password, $dbname);
    session_start();
    $idAccount = $_SESSION['idAccount'];
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM `todofunction` WHERE `IdAccount` = $idAccount";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) { ?>
            <div class="row d-flex">
                <div class="col-11">
                    <div class="card bg-secondary border-white text-white mt-3 row align-self-start">
                        <div class="col align-self-start">
                            <?php
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
                                        <button type="submit" name="checked" value="<?php echo $row['IdTodo'] ?>" id="checked_<?php echo $row['IdTodo'] ?>" style="display: none;" class="button btn-danger"></button>
                                        <input type="checkbox"><?php echo $row['value'] ?>
                                    </label>
                                </form>
                            <?php
                            }
                            ?>
                        </div>

                        <div class="col-auto align-self-end">
                            <form action="delete.php" method="get">
                                <button type="submit" name="deleteButton" value="<?php echo $row['IdTodo'] ?>" id="button_<?php echo $row['IdTodo'] ?>" class="btn btn-link border rounded-pill bg-danger text-decoration-none text-white">
                                    Button Delete <?php echo $row['value']?>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        }
    }
    $conn->close();
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>