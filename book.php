<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
 
<section class="header">
    <a href="home.php" class="logo">travel.</a>


   <nav class="navbar">
    <a href="home.php">home</a>
    <a href="about.php">about</a>
    <a href="package.php">package</a>
    <a href="book.php">book</a>
</nav>


<div id="menu-btn"class="fas fa-bars">

</div>

</section>

<div class="heading" style="background:url(images/header-bg-3.png)no-repeat">
    <h1>Book Now!</h1>

</div>


<section class="booking">

<h1 class="heading-title">
book your trip
</h1>
<form action="book_form.php" method="post" class="book-form">

<div class="flex">
    <div class="inputBox">
        <span>name :</span>
        <input type="text" placeholder="Enter your name" name="name">
    </div>

    <div class="inputBox">
        <span>email :</span>
        <input type="email" placeholder="Enter your email" name="email">
    </div>


    <div class="inputBox">
        <span>phone :</span>
        <input type="number" placeholder="Enter your number" name="phone">
    </div>

    <div class="inputBox">
        <span>address :</span>
        <input type="text" placeholder="Enter your address" name="address">
    </div>

    <div class="inputBox">
        <span>where to go :</span>
        <input type="text" placeholder="place you want to visit" name="location">
    </div>


    <div class="inputBox">
        <span>How many :</span>
        <input type="number" placeholder="number of guests" name="guests">
    </div>


    <div class="inputBox">
        <span>arrivals :</span>
        <input type="date"  name="arrivals">
    </div>


    <div class="inputBox">
        <span>leaving :</span>
        <input type="date"  name="leaving">
    </div>
</div>

<input type="submit" value="submit" class="btn" name="send">


</form>
</section>













<section class="footer">

<div class="box-container">

<div class="box">
    <h3>Quick links</h3>
   <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
    <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
    <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
    <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
</div>

<div class="box">
    <h3>Extra links</h3>
   <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
   <a href="#"><i class="fas fa-angle-right"></i>about us</a>
   <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
   <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
</div>


<div class="box">
    <h3>Contact info</h3>
   <a href="#"><i class="fas fa-angle-phone"></i>+123-456-7890</a>
   <a href="#"><i class="fas fa-angle-phone"></i>+111-222-3333</a>
   <a href="#"><i class="fas fa-angle-envelop"></i>rutwiksindkar07@gmail.com</a>
   <a href="#"><i class="fas fa-angle-map"></i>Pune, india -411028</a>

</div>

<div class="box">

<h3>Follow us</h3>
<a href="#"><i class="fab fa-facebook"></i>facebook</a>
<a href="#"><i class="fab fa-twitter"></i>twitter</a>
<a href="#"><i class="fab fa-instagram"></i>instagram</a>
<a href="#"><i class="fab fa-linkedin"></i>Linkedin</a>
</div>



</div>
<div class="credit">
    Created by <span>Mr. Rutwik Sindkar </span>| all rights reserved!
</div>

</section>




   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.css"></script>
    <script src="js/script.js"></script>
</body>
</html>