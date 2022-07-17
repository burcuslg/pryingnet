 
  <!--SPOR SLİDER-->
  <section >
      <div class="col-md-12">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"  >
            <ol class="carousel-indicators">
              <?php
              $slidersor=$baglanti->prepare("select * from spor_slider order by slider_id DESC limit 25 ");
              $slidersor->execute();
              $i=0;
              foreach($slidersor as $slidercek) {
                $actives='';
                if($i==0){
                  $actives='active';
                }
             
              ?>
              <li data-target="#carouselExampleIndicators" data-slide-to="<?= $i; ?>" class="<?= $actives;?>"></li>
              <?php   $i++; } ?>
            </ol>
            <div class="carousel-inner">
            <?php
              $slidersor=$baglanti->prepare("select * from spor_slider order by slider_id DESC limit 25 ");
              $slidersor->execute();
              $i=0;
              foreach($slidersor as $slidercek) {
                $actives='';
                if($i==0){
                  $actives='active';
                }
              
              ?>  
                          
              <div class="carousel-item <?= $actives; ?> ">
                <a href="onemli-<?=seo($slidercek["slider_ad"]).'-'.$slidercek["slider_id"]?>">
                <img width="100%" height="600" class="d-block w-100" src="/pryingnet<?php echo $slidercek['slider_resimyol'];?>" alt="<?php echo $slidercek['slider_ad']; ?>">
                <div class="carousel-caption d-none d-md-block">
                <h6><?php echo $slidercek['slider_ustbaslik'];?></h6>
                <h6><?php echo $slidercek['slider_altbaslik'];?></h6>
              </div>
              </div>
              <?php $i++; } ?>      
              </div>  
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
      </div>
     
        

    </div>
   
  </div>
  </div>
  
  </section>
    
  
  <!--SPOR SLİDER SON-->