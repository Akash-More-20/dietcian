<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>About Healthy Diet Clinic, Satara</title>
  

  <link rel="stylesheet" href="assets/css/maicons.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="assets/css/theme.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>



  <?php  include 'topbar.php';?>
  <div class="page-banner overlay-dark bg-image" style="background-image: url(assets/img/bg.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">About Us</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->



  <div class="page-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 wow fadeInDown">
          <h1 class="text-center mb-3 text-primary">
          Welcome To The Healthy Diet Clinic! Mentored By Dietician Sunita Vairat Since 2016

          </h1>
          <div class="text-lg">
        <p>
        Are you ready to transform your life and achieve your health goals? 
        Look no further than the Healthy Diet Clinic,
         where you will find the guidance and support you need to make positive changes to your diet and lifestyle. 
         With over 7 years of experience, the  Clinic has been mentored by renowned 
         dietician Sunita Vairat Seharawat since 2016.


        </p>   

        <p>
        At the  Clinic, we believe that a healthy lifestyle begins with a well-balanced diet. We understand that each person is unique, with different nutritional needs and goals. That's why we offer personalized nutrition plans that are tailored to your specific requirements. Whether you want to lose weight, manage a medical condition, or simply improve your overall well-being, we will create a plan that suits your lifestyle and preferences.


        </p>
        <p>
        Dietician Sunita Vairat approach is rooted in scientific research and evidence-based practices. She stays up-to-date with the latest advancements in the field of nutrition, ensuring that her recommendations are based on the most current knowledge. Her expertise covers a wide range of areas, including weight management, diabetes management, sports nutrition, and more.
        In addition to personalized nutrition plans, the Diet Clinic provides ongoing support and guidance. We understand that making lasting changes to your lifestyle can be challenging, and that's why we are here to support you every step of the way. Our team of experienced dieticians and nutritionists will provide you with the tools and knowledge you need to stay motivated and make sustainable changes.



        </p>
        <p>
        At the Diet Clinic, we believe that healthy eating should never be boring or restrictive. Our nutrition plans are designed to offer a wide variety of delicious and nutritious options. We emphasize the importance of balance, incorporating all the essential nutrients your body needs to thrive. Our goal is to help you develop a healthy relationship with food and enjoy the journey towards a healthier you.


        </p>
    
        
        </div>
        </div>
        
        
        </div>
        <hr>
        <div class="row mt-5 p-3">
          <div class="col-md-6 text-center wow fadeInLeft">
            <img src="images/what-we-do.jpg" alt="" width="90%">
          </div>
          <div class="col-md-6 pt-3">

          <h1>What <span class="text-primary wow fadeInRight">
          We Do?
          </span> </h1>
            <p>
            Diet Clinic Program look at your body as a whole and after consultations, present you with a diets plan that will not just make you look fit, but feel healthy and enjoy the lifestyle you love. In today's world, being thin and being healthy are a world apart. Once you have reached that ideal weight, I design a specific program customized for you so that you can maintain that ideal weight
            </p>
          </div>          
        </div>


        <hr>
        <div class="row mt-5 p-3">
          
          <div class="col-md-6 pt-3">

          <h1>How <span class="text-primary wow fadeInLeft">
          We Do?
          </span> </h1>
            <p>
            We provide you with different diet plans where it provides you with the best result leading to a good and healthy body without any sort of problem at all. Having a number of consulting clinics in Noida, Delhi and Gurgaon and also in cities of North India, you can expect to get the perfect results that would make you bring a big smile to your face in the right way. You do not have to go for crash dieting to make your body immunity weaker. But what we provide to you is the balanced diet where that would help you to get the perfect results without any sort of problem to your body at all.   </p>
          </div>   
          
          <div class="col-md-6 text-center wow fadeInRight">
            <img src="images/how-we-do.jpg" alt="" width="90%">
          </div>
        </div>
      
        <hr>

        <div class="container my-5">
  <h2 class="text-center mb-5">
       <span class="border-3 border-bottom border-danger pb-3">
       Client Review
       </span>
      </h2>
    <div class="row">

    <?php include 'connection.php';
                     

                       $qF ="SELECT r.rid,r.rname,f.fid,f.ftext,f.fdate,f.fstatus FROM 
                       register r INNER JOIN feedback f 
                       ON r.rid = f.rid WHERE f.fstatus ='Published'";
                       $rF=mysqli_query($cn,$qF);
                       $i=1;
                       while($dataF = mysqli_fetch_assoc($rF))
                       {
                         //var_dump($dataF);
                       ?>
     
      <div class="offset-md-1 col-md-5 shadow-lg  p-3">
        <div class=" p-3">
          <h3><?php echo $dataF['rname'];?></h3>
          <hr>
          <p>
          <?php echo $dataF['ftext'];?>         </p>
          <p class="text-right">
          <?php echo $dataF['fdate'];?>         </p>
        </div>
      </div>

      <?php

                       }

                       ?>

    
    </div>
  </div>
      </div>
      
      
    </div>
    
  </div>
  


  <?php include  'footer.php';?>


<script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="assets/vendor/wow/wow.min.js"></script>

<script src="assets/js/theme.js"></script>
  
</body>
</html>