<?php
$sayfa="Spor Haberleri";
include("head.php");
include("site/nedmin/netting/vt.php");


$iceriksor=$baglanti->prepare("SELECT * from spor_haber where icerik_id=:icerik_id");
$iceriksor->execute(array(
  'icerik_id'=> $_GET['icerik_id']

));
$icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC);

$iceriksor=$baglanti->prepare("SELECT * from spor_haber where icerik_id=:icerik_id");
$iceriksor->execute(array(
  'icerik_id'=> $_GET['icerik_id']

));
$icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC);



?>


<html>
<head>
  <style>
    .btn {
     padding: 10px 18px!important;
    }
    </style>
</head>
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
      <h2><?php echo $icerikcek['icerik_ustbaslik']; ?></h2>
      <h5><?php echo $icerikcek['icerik_zaman'];?></h5>
      <div class="fakeimg" ><img  src="/pryingnet<?php echo $icerikcek['icerik_resimyol']; ?>" class="card-img-top" alt="..."></div>
      <p style=" text-align: revert!important;"><?php echo $icerikcek['icerik_detay']; ?></p>
    </div>
   
  </div>
  <div class="rightcolumn">

        <div class="card">
              <div class="content-widget top-story" >
                
                    <div class="top-stroy-header">
                        <h2>İlginizi Çekebilir..<i class="fa fa-search-plus"></i></h2>
                        <h4 class="date"><?php echo $icerikcek['icerik_zaman'];?></h4>
                    </div>
                    <ul class="other-stroies">
                    <?php
                  $iceriksor=$baglanti->prepare("select * from spor_haber order by icerik_id DESC limit 6 ");
                  $iceriksor->execute();
                  $i=0;
                  while($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC))  {
                    $actives='';
                    if($i==0){
                      $actives='active';
                    }
                  
                  ?>
                    <li><a href="haber-<?=seo($icerikcek["icerik_ad"]).'-'.$icerikcek["icerik_id"]?>"><?php echo $icerikcek['icerik_ustbaslik'];?></a></li>
                    <?php $i++; } ?>
                 </ul>
                
              </div>           
        </div>
<div class="card">
      <div align="right"; class="col-md-6">
      <a href="spor"><button type="button" class="btn btn-primary btn-lg btn-block">Geri Dön</button></a>
    </div>
  </div>
  </div>
</div>

<?php
include("footer.php"); ?>
        

</body>

</html>


