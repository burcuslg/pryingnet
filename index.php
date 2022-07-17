<?php
$sayfa="Ana Sayfa";
include("site/nedmin/netting/vt.php");
include("head.php");

?>

  <!-- LOADER -->
  <div id="preloader">
    <img class="preloader" src="assets/img/A.gif"  alt="İşte Geliyor,Bir Saniye..">
 </div>
 
 <!-- END LOADER -->
<style>
  p{
    font-size:16px!important; text-align:left!important; line-height: 28px!important; font-family:revert!important;
  }
  h5{
    text-align:left!important;font-family:revert!important;

  }
  </style>
 <body>

  
    <?php include("swiper.php"); ?>

    <?php include("slider.php"); ?>

    <?php include("anasayfa_sondakika.php"); ?>

    <?php include("schedule.php"); ?>
    </body>
  


<?php
include("footer.php");
?>
