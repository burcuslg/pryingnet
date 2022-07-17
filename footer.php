<?php

include("site/nedmin/netting/vt.php");
$ayarsor=$baglanti->prepare("select * from ayarlar where ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>
<!--FOOTER BAŞLANGIÇ-->
   <!-- ======= Footer ======= -->
   <body>
   <style>
   .darkmode--activated #footer {
    isolation: isolate;
    background: rgb(19, 17, 17)!important;
    z-index: unset!important;
   }
   #footer-icon{
    height: 125px!important;
    margin-left: 0px!important;
  }
  
  </style>
  </body>
   <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-info">
            <img src="../pryingnet<?php echo $ayarcek['ayar_logo'];?>" id="footer-icon" alt="PryingNet">
          </div>
          <div class="col-md-3 footer-contact">
            <h4>BİZİMLE İLETİŞİME GEÇİN</h4>
            <a target="_blank" href="<?php echo $ayarcek['ayar_footeriletisim'];?>"><img src="https://img.icons8.com/external-smashingstocks-flat-smashing-stocks/66/000000/external-mail-tech-support-mentoring-and-training-smashingstocks-flat-smashing-stocks.png" style="margin-left:85px;"></a> 
          </div>
          <div class="col-md-3 footer-contact">
          <h4>KATEGORİLER</h4>
          <ul>
          <?php
            include("site/nedmin/netting/vt.php");
            $menusorgu=$baglanti->prepare("select * from menuler");
            $menusorgu->execute();
            while($menucek=$menusorgu->fetch()) {
              ?>
            <li><i class="bi bi-chevron-right"></i> <a style="color:white!important;" href="<?php echo $menucek['tablo_menuurl']?>"><?php echo $menucek['tablo_menuad']?></a></li>
            <?php 
            }
            ?>
          </ul>
          </div>
          <div class="col-md-3 footer-contact">
            <h4>BİZİ TAKİP EDİN</h4>
            <ul class="social-icons style-4 pull-left">
              <li><a class="facebook" target="_blank" href="<?php echo $ayarcek['ayar_facebook'];?>"><i class="fa fa-facebook"></i></a></li>
              <li><a class="instagram" target="_blank" href="<?php echo $ayarcek['ayar_twitter'];?>"><i class="fa fa-instagram"></i></a></li>
              <li><a class="youtube" target="_blank" href="<?php echo $ayarcek['ayar_instagram'];?>"><i class="fa fa-youtube-play"></i></a></li>
              <li><a class="pinterest" target="_blank" href="<?php echo $ayarcek['ayar_pinterest'];?>"><i class="fa fa-pinterest-p"></i></a></li>
           </ul>
            </div>
        </div>
      </div>
    </div> 

    <div class="container">
      <div class="copyright">
      <?php echo $ayarcek['ayar_footer'];?>
      </div>
    </div>
  
  </footer>
  <!-- End  Footer -->
  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="assets/js/main.js"></script>
        

      <!-- Js -->
      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
      
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>

    <!-- ALL JS FILES -->
    <script src="assets/js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="assets/js/custom.js"></script>

   
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>


        <script src="assets/js/app.js"></script>

        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="script.js" type="text/javascript" charset="utf-8" async defer></script>
       
       
  <script>
          const options = {
            bottom: '64px', // default: '32px'
            right: 'unset', // default: '32px'
            left: '32px', // default: 'unset'
            time: '0s', // default: '0.3s'
            mixColor: '#fff', // default: '#fff'
            backgroundColor: '#fff',  // default: '#fff'
            buttonColorDark: '#100f2c',  // default: '#100f2c'
            buttonColorLight: '#fff', // default: '#fff'
            saveInCookies: true, // default: true,
            label: '🌘', // default: ''
            autoMatchOsTheme: true // default: true
          }

          const darkmode = new Darkmode(options);
          darkmode.showWidget();
  </script>
</html>
