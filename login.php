<?php

session_start();

if (isset($_SESSION['name'])) {
  header('location: ./login/home.php');
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Open Cv login</title>

  <link rel="stylesheet" href="./login/style.css" />
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
 background-image:url('./login/ideal.jpg');
 background-size: cover;
           background-repeat: no-repeat;
           background-position: center;
    }
    .alert {
      color: red;
    /* padding: 2px; */
    padding-bottom: 19px;
    }
    .back-button {
      display: block;
      width: 80px;
      height: 40px;
      margin: 10px auto;
      background-color: #4CAF50;
      color: white;
      text-align: center;
      line-height: 40px;
      border-radius: 5px;
      text-decoration: none;
      font-weight: bold;
    }

    .back-button:hover {
      background-color: #3e8e41;
    }
    #uploadedImage {
  position: absolute;
  top: 15%;
  left: 50%;
  transform: translate(-50%, -50%);
  width:600px;
  max-width: 80%; /* Adjusted image size for better display */
  height: auto;
  border-radius: 5px;
}
.container {
  padding: 10rem 0;
}
  </style>
 
 
</head>
<div class="bg">
<body id="login">>
  <div class="container">
 <img id="uploadedImage" src="./login/college.jpeg" alt="Uploaded Image">
    <div class="box">
      <h1 class="box__title">Welcome Admin</h1>
      <p class="box__subtitle">Please log in to continue</p>
      <?php if (isset($_SESSION['login_failed'])) : ?>
        <div class="alert">
          Incorrect username or password!
        </div>
      <?php
        unset($_SESSION['login_failed']);
      endif;
      ?>
      <form action="./login/auth.php" method="post" class="form">
        <input type="text" class="form__input" placeholder="Username" name="username" required />
        <input type="password" class="form__input" placeholder="Password" name="password" required />
        <button class="form__button" type="submit" name="submit">LOGIN</button>
      </form>
      <a href="./index.html" class="back-button">&#8592;&nbsp;Back</a>
      
      
    </div>
  </div>

</body>
</div>
</html>