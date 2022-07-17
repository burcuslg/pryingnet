<?php
$sayfa="Astroloji";
include("head.php");
?>
<head>
  <style>
    .btn {
     padding: 10px 18px!important;
    }
    </style>
</head>
<body>
  <!-- LOADER -->
  <div id="preloader">
    <img class="preloader" src="assets/img/B.gif"  alt="İşte Geliyor,Bir Saniye..">
 </div>

 <!-- END LOADER -->

  <!-- Swiper -->
  <div class="swiper-container" style=" background-image: url(assets/img/c.jpg)!important;">
    <div class="swiper-wrapper">
    <?php
              $swipersor=$baglanti->prepare("select * from astro_swiper order by swiper_id DESC limit 25 ");
              $swipersor->execute();
              $i=0;
              while($swipercek=$swipersor->fetch(PDO::FETCH_ASSOC))  {
                $actives='';
                if($i==0){
                  $actives='active';
                }
              
              ?>
      <div class="swiper-slide">
        <a href="astro-<?=seo($swipercek["swiper_ad"]).'-'.$swipercek["swiper_id"]?>">
        <img src="/pryingnet<?php echo $swipercek['swiper_resimyol'];?>"></a>
      </div>
     
      <?php $i++; } ?>
     
    </div>
    </div>
            </body>




    <?php
    include("footer.php");
    ?>
   

 
