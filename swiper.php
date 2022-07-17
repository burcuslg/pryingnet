 <!-- Swiper -->


   <script>
     var swiper = new Swiper( {
    slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
        // ve daha üstündeki ekranlar için >= 320px
        320: {
          slidesPerView: 1,
          spaceBetween: 10
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 10
        },
        // ve daha üstündeki ekranlar için >= 992px
        992: {
          slidesPerView: 3,
          spaceBetween: 10
        },
        // ve daha üstündeki ekranlar için >= 200px
        1200: {
          slidesPerView: 4,
          spaceBetween: 10
        },
        // ve daha üstündeki ekranlar için >= 1650px
        1400: {
            slidesPerView: 5,
            spaceBetween: 10
          }
      }
  });
  </script>
   

 <div style=" padding-top: 200px!important;
  padding-bottom: 175px!important; " class="swiper-container" >

    <div class="swiper-wrapper">
            <?php
              $swipersor=$baglanti->prepare("select * from swiper order by swiper_id DESC limit 25 ");
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
     
        <a href="<?php echo $swipercek["swiper_link"] ?>">
        <img src="/pryingnet<?php echo $swipercek['swiper_resimyol'];?>">
        
      </div>
      <?php $i++; } ?>
    
    
     
    </div>   
    </div>

    
 
