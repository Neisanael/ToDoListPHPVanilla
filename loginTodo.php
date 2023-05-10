<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="loginRead.php" method="post">
        <input type="text" name="username">
        <br>
        <input type="password" name="password">
        <br>
        <button type="submit">Login</button>
    </form>
    <a href="#" id="createNew">create new account</a>
    <form action="loginCreate.php" method="post" id="createAccount" style="display: none;">
        <input type="text" placeholder="username" name="username">
        <br>
        <input type="password" placeholder="password" name="password">
        <br>
        <input type="password" placeholder="confirm password" name="confirmPassword">
        <br>
        <button type="submit">Create</button>
        <br>
        <button id="cancel">Cancel</button>
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
</body>

</html>