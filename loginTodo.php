<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="containter bg-dark vh-100 d-flex w-100 flex-column justify-content-center align-content-center">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-5">
                <div class="card bg-body-secondary d-flex align-items-center flex-column p-sm-3">
                    <div class="col-sm-7 mb-3 d-flex align-items-center flex-column">
                        <h3>Login</h3>
                    </div>
                    <form action="loginRead.php" method="post" class="row">
                        <div class="col-sm-12 mb-3 d-flex align-items-center flex-column">
                            <input type="text" name="username" placeholder="Username" class="form-control rounded-pill">
                        </div>
                        <div class="col-sm-12 mb-3 d-flex align-items-center flex-column">
                            <input type="password" name="password" placeholder="Password" class="form-control rounded-pill">
                        </div>
                        <div class="d-grid col-sm-12 mb-3 flex-column">
                            <button type="submit" class="btn btn-success rounded-pill">Login</button>
                        </div>
                    </form>

                    <a href="#" id="createNew">create new account</a>

                    <form action="loginCreate.php" method="post" id="createAccount" style="display: none;" class="row">
                        <div class="col-sm-12 mb-3 d-flex align-items-center flex-column">
                            <input type="text" placeholder="username" name="username" class="form-control rounded-pill">
                        </div>
                        <div class="col-sm-12 mb-3 d-flex align-items-center flex-column">
                            <input type="password" placeholder="password" name="password" class="form-control rounded-pill">
                        </div>
                        <div class="col-sm-12 mb-3 d-flex align-items-center flex-column">
                            <input type="password" placeholder="confirm password" name="confirmPassword" class="form-control rounded-pill">
                        </div>
                        <div class="d-grid col-sm-12 mb-3 flex-column">
                            <button type="submit" class="btn btn-success rounded-pill">Create</button>
                        </div>
                        <div class="d-grid col-sm-12 mb-3 flex-column">
                            <button id="cancel" class="btn btn-danger rounded-pill">Cancel</button>
                        </div>
                    </form>

                    <script>
                        var link = document.getElementById('createNew');
                        var form = document.getElementById('createAccount');
                        var cancel = document.getElementById('cancel');

                        link.addEventListener('click', function(event) {
                            event.preventDefault();
                            form.style.display = 'block';
                        });

                        cancel.addEventListener('click', function() {
                            event.preventDefault();
                            form.style.display = 'none';
                        });
                    </script>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>