<?php
$sayfa="Burç Yorumları";
include("head.php");
include("site/nedmin/netting/vt.php");


$swipersor=$baglanti->prepare("SELECT * from astro_swiper where swiper_id=:swiper_id");
$swipersor->execute(array(
  'swiper_id'=> $_GET['swiper_id']

));
$swipercek=$swipersor->fetch(PDO::FETCH_ASSOC);

$swipersor=$baglanti->prepare("SELECT * from astro_swiper where swiper_id=:swiper_id");
$swipersor->execute(array(
  'swiper_id'=> $_GET['swiper_id']

));
$swipercek=$swipersor->fetch(PDO::FETCH_ASSOC);



?>


<html>
<head>
<style>


/* Add a gray background color with some padding */
body {
  background: #f1f1f1;
}



/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: white;

  width:800px;
}

/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   margin-top: 90px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}
</style>
</head>
<body>



<div class="row">
  <div class="leftcolumn">

    <div class="card">
      <h2 style=" text-align: revert!important;"><?php echo $swipercek['swiper_ustbaslik']; ?></h2>
      <h5><?php echo $swipercek['swiper_zaman'];?></h5>
      <div class="fakeimg" ><img  src="/pryingnet<?php echo $swipercek['swiper_resimyol']; ?>" class="card-img-top" alt="..."></div>
      <p style=" text-align: revert!important;"><?php echo $swipercek['swiper_detay']; ?></p>
    </div>
   
  </div>
  <div class="rightcolumn">
    
  <div class="card">
              <div class="content-widget top-story" >
                
                    <div class="top-stroy-header">
                        <h2>İlginizi Çekebilir..<i class="fa fa-search-plus"></i></h2>
                        <h4 class="date"><?php echo $swipercek['swiper_zaman'];?></h4>
                    </div>
                    <ul class="other-stroies">
                    <?php
                  $swipersor=$baglanti->prepare("select * from astro_swiper order by swiper_id DESC limit 6 ");
                  $swipersor->execute();
                  $i=0;
                  while($swipercek=$swipersor->fetch(PDO::FETCH_ASSOC))  {
                    $actives='';
                    if($i==0){
                      $actives='active';
                    }
                  
                  ?>
                    <li><a href="astro-<?=seo($swipercek["swiper_ad"]).'-'.$swipercek["swiper_id"]?>"><?php echo $swipercek['swiper_ustbaslik'];?></a></li>
                    <?php $i++; } ?>
                 </ul>
                
              </div>           
        </div>
<div class="card">
      <div align="right"; class="col-md-6">
      <a href="astroloji"><button type="button" class="btn btn-primary btn-lg btn-block">Geri Dön</button></a>
    </div>
  </div>
  </div>
</div>

<?php
include("footer.php"); ?>
        

</body>

</html>


