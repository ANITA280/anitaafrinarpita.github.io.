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

<?php
  session_start();

    if(isset($_POST['username'])) {

      if($_POST['username']=='inte'&&$_POST['password']=='2047') {
      $_SESSION['logged_in']='true';
    } else {
      echo '
      <i>Incorrect login details.
      please try again</i><br />';
    }
  }

  if (! (isset($_SESSION['logged_in']) && $_SESSION['logged_in']=='true') ) {
    echo'
    <html>
      <head>
        <title>Login form</title>
      </head>
      <body>
          <h3>Login to access FreshOrganic</h3>
        <form action="' . $_SERVER['PHP_SELF'] .'"method="POST">
          Username: <input type="text"
          name="username" />
          <br />

          Password: <input type="password"
          name="password" />
          <br />

          <button type="submit" name="login" class="site-btn">Login</button>
        </form>
      </body>
    </html>';
    exit;
  }
  ?>

  </head>
