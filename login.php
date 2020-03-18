<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>

        form{
            border:2px solid black;
            width: 50%;
            height: 250px;
            position: relative;
            margin: auto;
            text-align:center;
            margin-top:10%;
            border-radius:10px;
            font-size:20px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <h1>Login</h1>
    <p>Username:
        <input type="text" name="name">
    </p>
    <p>Password:
        <input type="password" name="password">
    </p>
    <input type="submit" value="Login">
    <input type="submit" name="logout" value="Logout">
    </form>
    <?php if (isset($_POST["logout"])) {
      // code...
      header("Location:Registration.php");
    } ?>
</body>
</html>
