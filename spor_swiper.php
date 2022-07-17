 <!-- Swiper -->
 <div style=" padding-top: 200px!important;
  padding-bottom: 175px!important; " class="swiper-container" >
    <div class="swiper-wrapper">
            <?php
              $swipersor=$baglanti->prepare("select * from spor order by swiper_id DESC limit 25 ");
              $swipersor->execute();
              $i=0;
              while($swipercek=$swipersor->fetch(PDO::FETCH_ASSOC))  {
                $actives='';
                if($i==0){
                  $actives='active';
                }
              
              ?>
      <div class="swiper-slide" style="  width: 500px!important;
  height: 500px!important;">
     
        <a target="_blank" href="<?php echo $swipercek["swiper_link"] ?>">
        <img src="/pryingnet<?php echo $swipercek['swiper_resimyol'];?>">
        
      </div>
      <?php $i++; } ?>
    
    
     
    </div>   
    </div>