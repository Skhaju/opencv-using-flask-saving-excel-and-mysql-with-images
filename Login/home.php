<?php

session_start();

if (!isset($_SESSION['name'])) {
  header('location: ./index.php');
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>face Project</title>

  <style>
    body {
      
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background-image: url(./3rd.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }

    .container {
      text-align: center;
      background-color: rgba(255, 255, 255, 0.8);
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .information__title {
      font-size: 3em;
      color: #333;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
      margin-bottom: 20px;
    }

    .btn {
      display: inline-block;
      padding: 15px 30px;
      margin: 10px;
      border: none;
      border-radius: 5px;
      background-color: #0d3b66;
      color: white;
      font-size: 1.2em;
      text-decoration: none;
      cursor: pointer;
      transition: background-color 0.3s ease, transform 0.2s ease;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .btn:hover {
      background-color: #3282b8;
      transform: translateY(-3px);
    }

    h1 {
      font-size: 3em;
      margin-bottom: 20px;
    }

    p {
      font-size: 1.5em;
      margin-bottom: 30px;
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
  </style>
</head>

<body>
  <div class="container">
    <div class="information">
      <h1 class="information__title">You are logged in as Admin</h1>  
      <a href="../admin.html" class="btn">Check Data</a>
      <a href="./logout.php" class="btn">Logout</a>
      
    </div>
  </div>
</body>

</html>