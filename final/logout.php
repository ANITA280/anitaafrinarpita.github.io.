<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fresh Organic delivers personalised certified organic produce to your home or business. We curate and deliver
boxes according to your preference.">
    <meta name="keywords" content="organic produce, fruits, vegetables, nuts, salad, vegan, meat, dairy, fresh, delivery, home delivery, mornington peninsula, melbourne ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fresh Organic | Delivering personalised certified organic produce</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
  <?php
  session_start();
  $_SESSION = array();
  session_destroy();
  ?>

    <h3>You have been successfully logged out</h3>

    <a href="index.php" button type="submit" name="login" class="site-btn">Login</button>
</body>
</html>
