  <!--AKIŞ CONTAINER BAŞLANGIÇ-->
<head>
  <style>
    .btn {
     padding: 10px 18px!important;
    }
    </style>
</head>



  <section class="p-5 text-center akis">
    <div class="container">
    <div class="col-md-12">
            <hr class="ayrac">
            <h2>Son Dakika Magazin</h2>
            <hr class="ayrac">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php

                    $sayfada=16;

                    $sorgu=$baglanti->prepare("select * from icerik");
                    $sorgu->execute();
                    $toplam_icerik=$sorgu->rowCount();

                    $toplam_sayfa=ceil($toplam_icerik / $sayfada);

                    $sayfa= isset($_GET['sayfa']) ? (int) $_GET['sayfa'] :1;
                    if($sayfa < 1) $sayfa=1;

                    if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa;

                    $limit = ($sayfa - 1) * $sayfada;
                    $iceriksor=$baglanti->prepare("select * from icerik order by icerik_zaman DESC  limit $limit, $sayfada ");
                    $iceriksor->execute();


                            
                      while($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)) {
              

            ?>
            <!--Başlangıç-->
            <div class="col-md-3" >
                <div class="card h-100 akisSlider" style="height:500px; " >
                  <img width:400px; height:250px padding:10px; src="/pryingnet<?php echo $icerikcek['icerik_resimyol']; ?>" class="card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $icerikcek['icerik_ustbaslik']; ?></h5>
                    <p class="card-text"><?php echo substr($icerikcek['icerik_detay'],0,100); ?>...</p>
                    
                  </div>
                  <div class="card-footer">
                  <a style="color:white!important; float: revert!important; "  href="gundem-<?=seo($icerikcek["icerik_ad"]).'-'.$icerikcek["icerik_id"]?>" class="btn btn-primary" >Devamını Oku <i class="fa fa-long-arrow-right"></i></a>
                  <small class="text" style="font-size: 97%;font-weight: 600;"><?php echo $icerikcek['icerik_zaman'];?></small>
                 
                </div>
            
                
               
                </div>
              </div>
              <!--Bitiş-->
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
                <a style=" color:aliceblue!important;" class="btn btn-primary" href="anasayfa?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
              </li>

              <?php } else {?>

                <li>
                <a style="color:aliceblue!important;" class="btn btn-primary"  href="anasayfa?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>  
                </li>
                <?php }

                  }
                  ?>
        </ul>
        </div>   
        
            </div>
          </div>
    </div>
  </section>


  <!--AKIŞ CONTAINER SON-->