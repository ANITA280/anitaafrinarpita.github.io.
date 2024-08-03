<!DOCTYPE html>
<html lang="zxx">
  <?php include('login.php'); ?>
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
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__auth">
                <a href="logout.php"><i class="fa fa-user"></i> Logout</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.php">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="./about-us.html">About Us</a></li>
                <li><a href="./delivery.html">Delivery</a></li>
                <li><a href="./subscription-page.html">Subscription</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
            <li><i class="fa fa-envelope"></i> freshorganic@gmail.com | Delivering personalised certified organic produce</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                            <li><i class="fa fa-envelope"></i> freshorganic@gmail.com | Delivering personalised certified organic produce</li>
                        </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__auth">
                              <a href="logout.php"><i class="fa fa-user"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/Fresh Organic.gif" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.php">Home</a></li>
                            <li><a href="./shop-grid.html">Shop</a></li>
                            <li><a href="./about-us.html">About Us</a></li>
                            <li><a href="./delivery.html">Delivery</a></li>
                            <li><a href="./subscription-page.html">Subscription</a></li>
                            <li><a href="./contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="./shopping-cart.html"><i class="fa fa-shopping-bag"></i><span class="total-count">0</span></a></li>
                        </ul>
                        <div class="header__cart__price">Total <span class="total-cart">0</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row"></div>
                    <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                        <div class="hero__text">
                            <span>Fresh Fruit & Vegetables</span>
                            <h2>100% Organic <br />Produce</h2>
                            <p>No more indecisiveness. <br>Delivering personalised certified organic produce<br> to your home or business.
                            We curate and deliver<br> boxes according to your preference.</p>
                            <a href="./shop-grid.html" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container default-spacer">
          <h3>View our categories</h3>
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-1.jpg">
                            <h5><a href="./shop-grid.html#Fruit">Fruit</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-2.jpg">
                            <h5><a href="./shop-grid.html#Vegetables">Vegetables</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-3.jpg">
                            <h5><a href="./shop-grid.html#Salad">Salad</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-4.jpg">
                            <h5><a href="./shop-grid.html#Vegan">Vegan</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-5.jpg">
                            <h5><a href="./shop-grid.html#Dairy/Eggs">Dairy/Eggs</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-6.jpg">
                            <h5><a href="./shop-grid.html#Meat">Meat</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-7.jpg">
                            <h5><a href="./shop-grid.html#Nuts/Dried Fruit">Nuts/Dried Fruit</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Meat banner -->
    <section class="hero">
      <div class="container">
        <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
            <div class="hero__text">
                <span>Meat</span>
                <h2>Premium Meat</h2>
                <p>We offer customers fresh seasonal produce including meat from
                  <br> local farmers - nothing imported overseas or interstate.
                  <br> All produce is delivered in thermo-cooled boxes and
                  <br> packaged in bio-degradable and compostable packaging.</p>
                <a href="./shop-grid.html#Meat" class="primary-btn">SHOP MEAT</a>
            </div>
        </div>
      </div>
    </section>
    <!-- Meat banner Section end-->

    <!-- NEWSLETTER BEGIN -->
    <!-- background-color: #F3F6FA; -->
    <section class="contact-form">
        <div class="container">
          <h3>Join Our Newsletter Now</h3>
          <p>Get E-mail updates about our latest shop and special offers.</p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    <?php
    // define variables and set to empty values
    $nameErr = $emailErr = "";
    $name = $email = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["name"])) {
        $nameErr = "*Name required";
      } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
          $nameErr = "Only letters and white space allowed";
        }
      }  }

      if (empty($_POST["email"])) {
        $emailErr = "*Email required";
      } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
        }
      }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    ?>

        <div class="row">
            <div class="col-lg-4 col-md-4">
              <input type="text" name="name" placeholder="Name">
              <span class="error"> <?php echo $nameErr;?></span>
            </div>
            <div class="col-lg-4 col-md-4">
              <input type="text" name="email" placeholder="Email">
              <span class="error"> <?php echo $emailErr;?></span>
            </div>
            <div class="col-lg-4 col-md-4">
              <button type="submit" name="subscribe" class="site-btn">Subscribe</button>

            </div>
        </div>
      </form>

      <?php
      if (empty($_POST["name"]) || empty($_POST["email"])) {
      echo "<p>Unable to Subscribe, please enter valid details</p>";
    } else {
      echo $email, "<p>Subscribed Successfully!</p>";
    }
      ?>

      </div>
    </section>
    <br>
    <!-- NEWSLETTER END -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container default-spacer">
          <h3>Subscribe Today!</h3>
          <p>Interested in getting regular mystery boxes delivered? We offer regular subscriptions & sell seasonal produce - Check out our seasonal plans and subscriptions boxes.</p>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <a href="./subscription-page.html"><img src="img/banner/banner-1.jpg" alt=""/>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <a href="./subscription-page.html"><img src="img/banner/banner-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/Fresh Organic.gif" alt=""></a>
                        </div>
                        <ul>
                            <li>Phone: (03) 9915 1545</li>
                            <li>Email: freshorganic@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="./shop-grid.html">Shop</a></li>
                            <li><a href="./Subscription-page.html">Subscription</a></li>
                            <li><a href="./delivery.html">Delivery</a></li>  
                        </ul>
                        <ul>
                            <li><a href="./about-us.html">About Us</a></li>
                            <li><a href="./contact.html">Contact Us</a></li>                                                   
                            <li><a href="./Sitemap.html">Our Sitemap</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">

                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/cart.js"></script>


</body>

</html>
