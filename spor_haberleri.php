<head>
  <style>
    .btn {
     padding: 10px 18px!important;
    }
    </style>
</head>
<div class="col-lg-8 col-sm-8 col-xs-12">
           <?php

               $sayfada=2;

               $sorgu=$baglanti->prepare("select * from spor_haber");
               $sorgu->execute();
               $toplam_haber=$sorgu->rowCount();

               $toplam_sayfa=ceil($toplam_haber / $sayfada);

               $sayfa= isset($_GET['sayfa']) ? (int) $_GET['sayfa'] :1;
               if($sayfa < 1) $sayfa=1;

               if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa;

               $limit = ($sayfa - 1) * $sayfada;
               $iceriksor=$baglanti->prepare("select * from spor_haber order by icerik_zaman DESC  limit $limit, $sayfada ");
               $iceriksor->execute();


                     
               while($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)) {


               ?>
              <div class="news-post-holder">
                 <div class="news-post-widget" style="background-color:white!important;">
                    <a href="haber-<?=seo($icerikcek["icerik_ad"]).'-'.$icerikcek["icerik_id"]?>">
                    <img class="img-responsive" src="/pryingnet<?php echo $icerikcek['icerik_resimyol']; ?>" alt="">
                    </a>
                    <div class="news-post-detail">
                       <h2><?php echo $icerikcek['icerik_ustbaslik']; ?> </h2>
                       <p><?php echo substr($icerikcek['icerik_detay'],0,100); ?>...</p>
                       <h4 class="date"><?php echo $icerikcek['icerik_zaman'];?></h4>
                    </div>
                 </div>
                
              </div>
              <?php } ?>
              
         <div id="right"   class="col-md-12">
      <ul class="pagination" style="float:right!important;">
         <?php

         $s=0;
         while($s < $toplam_sayfa){
           $s++; ?>
           <?php
           if($s==$sayfa) {?>

              <li class="active">
                <a style=" color:aliceblue!important;" class="btn btn-primary" href="sporhaberleri?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
              </li>

              <?php } else {?>

                <li>
                <a style="color:aliceblue!important;" class="btn btn-primary"  href="sporhaberleri?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>  
                </li>
                <?php }

                  }
                  ?>
        </ul>
        </div>  
</div>