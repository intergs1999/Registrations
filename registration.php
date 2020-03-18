<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" href="styles/style.css">
  </head>
  <body>
    <form class="" action="" method="post">
      <p><h1>Registration Form</h1></p>
      <p>Name</p>
      <input type="text" name="name" value="<?php
        if (isset($_POST["name"])) {
          // code...
          print($_POST["name"]);
        }
       ?>" id="input">
       <?php if (isset($_POST["Submit"])) {
         // code...
         $name=$_POST["name"];
         if (empty($name)) {
           // code...
           print("<br>Please enter your name");
         }
       } ?>
      <br><br>
      <p>Email</p>
      <input type="email" name="email" value="<?php
        if (isset($_POST["email"])) {
          // code...
          print($_POST["email"]);
        }
        ?>" id="input">
        <?php if (isset($_POST["Submit"])) {
          // code...
          $name=$_POST["email"];
          if (empty($email)) {
            // code...
            print("<br>Please enter your email");
          }
        } ?>
      <br><br>
      <p>Password</p>
      <input type="password" name="password" value="" id="input">
      <?php if (isset($_POST["Submit"])) {
        // code...
        $name=$_POST["name"];
        if (empty($password)) {
          // code...
          print("<br>Please enter your password");
        }
      } ?>
      <br><br>
      <input type="submit" name="Submit" value="Register" id="submit">
    </form>
    <?php
      if (isset($_POST["Submit"])) {
        // code...
        session_start();
        $name=$_POST["name"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        $_SESSION["name"]=$name;
        $_SESSION["email"]=$email;
        $_SESSION["password"]=$password;
        if (!empty($name) and !empty($email) and !empty($password)) {
          // code...
          header("Location:login.php");
        }else {
          print("Please fill in the blank spaces");
        }

      }
     ?>
  </body>
</html>
