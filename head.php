<?php

include("site/nedmin/netting/vt.php");
include("site/nedmin/production/fonksiyon.php");
$ayarsor=$baglanti->prepare("select * from ayarlar where ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);


 
?>
<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $sayfa ?> - PryingNet | Meraklısına</title>
    <meta content="<?php echo $ayarcek['ayar_description'];?>" name="description">
    <meta content="<?php echo $ayarcek['ayar_keywords'];?>" name="keywords">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

     <!-- Favicons -->
    <link href="/pryingnet<?php echo $ayarcek['ayar_title'];?>" rel="icon">


<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>




    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <!-- Custom CSS -->
     <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="assets/css/colors.css">
    <!-- ALL VERSION CSS -->	
    <link rel="stylesheet" href="assets/css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- font family -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- end font family -->
    <link rel="stylesheet" href="assets/css/3dslider.css" />
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <script src="assets/js/3dslider.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>

  <body>

  <style>
  body {
  background: #fff;
  font-family: 'Montserrat', sans-serif!important;
  font-size: 14px!important;
  font-weight: bolder;
  color: #000;
  margin: 0;
  padding: 0;

}
.navbar-brand img{
    margin-top: -20px;
    height: 90px !important;
  }

     </style>
   <nav class="navbar navbar-expand-lg navbar-light bg-light" >
        <div class="container-fluid"  >
          <a class="navbar-brand ms-0 ms-md-5 " href="" >
            <img src="../pryingnet<?php echo $ayarcek['ayar_logo'];?>"  ></a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto ">
            <?php
            include("site/nedmin/netting/vt.php");
            $menusorgu=$baglanti->prepare("select * from menuler");
            $menusorgu->execute();
            while($menucek=$menusorgu->fetch()) {
              ?>
  
              <i  class="<?php echo $menucek['tablo_menuikon']?>" id="icons"></i>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" a href="<?php echo $menucek['tablo_menuurl']?>"><?php echo $menucek['tablo_menuad']?></a>
              </li>
              <?php 
                     }
                      ?>
              <div class="container h-100">
                <div class="d-flex justify-content-center h-100">
                  <div class="searchbar">
                    <input class="search_input" type="text" name="aranan" placeholder="Anahtar kelime giriniz...">
                    <button class="search_icon" type="submit" name="arama"><i class="fas fa-search"></i></a>
                    
                  
                  </div>
                </div>
              </div>
            </ul>  
          </div>
        </div>
     </nav>
  </body>