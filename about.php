<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'components/user_header.php'; ?>

   <section class="about">

      <div class="row">

         <div class="image">
            <img src="images/23.png" alt="">
         </div>

         <div class="content">
            <h3>Welcome to Mobile Shop!</h3>
            <p>Welcome to Barthe - Your Ultimate Destination for Mobile Technology! At Barthe, we're dedicated to providing you with the latest and greatest in mobile technology.</p>



            <a href="Services/messaging_service/contact.php" class="btn">Contact Us</a>
         </div>

   </section>

  <section class="reviews">
    <h1 class="heading">Client's Reviews.</h1>
    <div class="swiper reviews-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide">
                <img src="images/pic-5.jpg" alt="">
                <p>I've been a loyal customer of Barthe for over a year now, and I must say, their service and product quality are exceptional. The ease of browsing through their website and the swift delivery always impress me. Highly recommended!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3><a href="https://t3.ftcdn.net/jpg/05/47/76/58/360_F_547765852_LsiuZzX1oTDDYs7k9utokjvjoasNuctq.jpg" target="_blank">Sanjula Senarthna</a></h3>
            </div>
            <div class="swiper-slide slide">
                <img src="images/pic-1.jpg" alt="">
                <p>Barthe has been my go-to online store for electronics and gadgets. Their wide range of products and competitive prices keep me coming back. Plus, their customer service is top-notch. Definitely worth recommending!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3><a href="C:\xampp\htdocs\PFA\images\arunu.JPG" target="_blank">Arunu Bandara</a></h3>
            </div>
            <div class="swiper-slide slide">
                <img src="images/pic-3.jpg" alt="">
                <p>I recently purchased a smartphone from Barthe, and I couldn't be happier with my experience. The product arrived on time, and it exceeded my expectations in terms of quality. KinBech has definitely earned my trust as a reliable online retailer.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3><a href="https://www.facebook.com/kaushalsah135790" target="_blank">Miyuru Mihilanga</a></h3>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>









   <?php include 'components/footer.php'; ?>

   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <script src="js/script.js"></script>

   <script>
      var swiper = new Swiper(".reviews-slider", {
         loop: true,
         spaceBetween: 20,
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
         breakpoints: {
            0: {
               slidesPerView: 1,
            },
            768: {
               slidesPerView: 2,
            },
            991: {
               slidesPerView: 3,
            },
         },
      });
   </script>

</body>

</html>