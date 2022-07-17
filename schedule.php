<style>
    h3{
        color:white!important;
    }
</style>
<!--ETKİNLİK BAŞLANGIÇ-->
    <!-- ======= Schedule Section ======= -->
    <section id="schedule" class="section-with-bg">
      <div class="container" data-aos="fade-up">
        <hr class="ayrac">
            <h2 style="text-align: -webkit-center;">En Çok Okunan Haberler</h2>
            <hr class="ayrac">
       
     

    
       
        <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">


        <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <!-- Schdule Day 1 -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">
          <?php

                $sayfada=8;

                $sorgu=$baglanti->prepare("select * from schedule");
                $sorgu->execute();
                $toplam_schedule=$sorgu->rowCount();

                $toplam_sayfa=ceil($toplam_schedule / $sayfada);

                $sayfa= isset($_GET['sayfa']) ? (int) $_GET['sayfa'] :1;
                if($sayfa < 1) $sayfa=1;

                if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa;

                $limit = ($sayfa - 1) * $sayfada;
                $schedulesor=$baglanti->prepare("select * from schedule order by schedule_zaman DESC  limit $limit, $sayfada ");
                $schedulesor->execute();


                        
                while($schedulecek=$schedulesor->fetch(PDO::FETCH_ASSOC)) {


                ?>
            <div class="row schedule-item">
              <div class="col-md-2"><time><?php echo $schedulecek['schedule_zaman'];?></time></div>
              <div class="col-md-10">
              <div class="speaker">
                  <a href="schedule-<?=seo($schedulecek["schedule_ad"]).'-'.$schedulecek["schedule_id"]?>">
                  <img src="/pryingnet<?php echo $schedulecek['schedule_resimyol'];?>" ></a>
                </div>
                <h4><?php echo $schedulecek['schedule_ustbaslik'];?></h4>
                <p style="text-align:center!important;"><?php echo substr($schedulecek['schedule_detay'],0,80); ?>...</p>
              </div>
                </div>
                <?php } ?>
          </div>
          
          <!-- End Schdule Day 1 -->


        </div>
     
        </div>  
      </div>



    </section><!-- End Schedule Section -->