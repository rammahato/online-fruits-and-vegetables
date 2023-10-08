<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about.png" alt="">
         <h3>Why Choose Us?</h3>
         <p>At Bhajiwala, we're your go-to destination for fresh and flavorful fruits and vegetables. We stand out because we're all about quality, convenience, and sustainability. With us, you can count on top-notch produce, easy online shopping, eco-friendly practices, and exceptional customer service. Join us today and elevate your produce shopping experience.</p>
         <a href="contact.php" class="btn-sbc">Get Know More</a>
      </div>

      <div class="box">
         <img src="images/about-2.png" alt="">
         <h3>What We Provide?</h3>
         <p>At Bhajiwala, we offer a diverse range of fresh fruits and vegetables, handpicked for their quality and taste. Our user-friendly platform makes ordering a breeze, and we deliver right to your doorstep. We're committed to sustainability, ensuring you get eco-conscious packaging and support for responsible farming. Choose us for an effortless and eco-friendly way to enjoy the best in fresh produce.</p>
         <a href="shop.php" class="btn-sbc">Click To Know More About Products</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">customer's Reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>"I've been a loyal customer of Bhajiwala for over a year now, and I can't say enough good things! The produce is consistently fresh and delicious, the ordering process is a breeze, and the eco-friendly packaging aligns with my values. Highly recommended!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Hemant Roy</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>"Bhajiwala has made my life so much easier. With my busy schedule, I used to struggle with grocery shopping. Now, I get top-quality fruits and veggies delivered to my door, saving me time and hassle. The best part? They taste amazing!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ranjeet Bhosale</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>"I appreciate that Bhajiwala supports local farmers. It's important to me to know where my food comes from, and this shop makes it easy. The customer service is top-notch too. They're always ready to assist with a smile."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Anjali Pandey</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>"I'm impressed with the variety Bhajiwala offers. Whether it's exotic fruits or seasonal vegetables, they have it all. Plus, the prices are competitive, and the freshness is unmatched. I won't shop anywhere else."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Anuj Patwari</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>"As someone who cares deeply about the environment, I love that Bhajiwala uses eco-friendly packaging. It's a small change that makes a big difference. Plus, their commitment to sustainability extends to their sourcing practices, which is fantastic."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Khushi Verma</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>"I've recommended Bhajiwala to all my friends and family. The convenience factor alone is a game-changer, but the quality of the produce seals the deal. If you haven't tried them yet, you're missing out!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mrunal Patil</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>