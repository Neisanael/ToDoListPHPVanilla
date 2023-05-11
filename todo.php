<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col md-3 overflow-auto vh-100" style="background-color:#343541;">
                <div class="d-grid gap-6 col-12 mt-2">
                    <form action="/insert.php" method="post" class="row align-items-start">
                        <div class="col mt-2" style="max-width: 100%;">
                            <input type="text" placeholder="Insert Todo" class="form-control text-black bg-body-secondary" name="inputTodo">
                        </div>
                        <div class="col-auto mt-2">
                            <button type="submit" class="btn btn-link border rounded-pill bg-body-secondary"><img src="src/logoSubmit.png" alt="Logo" width="20" height="20"></button>
                        </div>
                    </form>
                    <div class="container">
                        <?php include 'read.php'; ?>
                    </div>
                    <div>
                        <form action="/out.php" method="get">
                            <button type="submit" class="btn btn-link border rounded-pill bg-dark text-decoration-none text-white">Logout</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</body>

</html>