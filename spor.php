
<?php
$sayfa="Spor";
include("head.php");
?>
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="assets/img/D.gif"  alt="İşte Geliyor,Bir Saniye..">
      </div>
      <!-- END LOADER -->
     
            
   

  <?php include("spor_swiper.php"); ?>


    
  <?php include("spor_slider.php"); ?>



  <section id="contant" class="contant">
     <div class="container">
        <div class="row">
           <div class="col-lg-4 col-sm-4 col-xs-12">
         

              <h3>Spor Toto Süper Lig Puan Tablosu</h3>
              <aside id="sidebar" class="left-bar">
               <div style="font: normal 11px Arial; width: 100%; border: solid 1px #ccc; background: #fff; border-radius: 3px; box-shadow: 1px 1px 3px #ccc;">
               <iframe frameborder="0" width="100%" height="470px" src="https://www.trtspor.com.tr/puandurumu-ekle/?lig=1&renk=a&resimler=1&a=7"></iframe>
               </div>
              </aside>
           
              <h4>Maç Fikstürü</h4>
              <aside id="sidebar" class="sidebar" >
                 <div class="feature-matchs" >
                    <div class="team-btw-match">
                       <ul>
                          <li>
                             <img style="width:70px;"src="assets/img/galatasaray-icon.png" alt="">
                             <h4>Galatasaray</h4>
                          </li>
                          <li class="vs"><h4>vs</h4></li>
                          <li>
                             <img style="width:70px;"src="assets/img/fb.png" alt="">
                             <h4>Fenerbahçe</h4>
                          </li>
                       </ul>
                       <ul>
                          <li>
                             <img style="width:70px;"src="assets/img/trabs.jpg" alt="">
                             <h4>Trabzonspor</h4>
                          </li>
                          <li class="vs"><h4>vs</h4></li>
                          <li>
                             <img style="width:70px;"src="assets/img/konya.jpg" alt="">
                             <h4>Konyaspor</h4>
                          </li>
                       </ul>
                       <ul>
                          <li>
                             <img style="width:70px;"src="assets/img/kayseri.png" alt="">
                             <h4>Kayserispor</h4>
                          </li>
                          <li class="vs"><h4>vs</h4></li>
                          <li>
                             <img style="width:70px;"src="assets/img/adana.png" alt="">
                             <h4>Adana Demirspor</h4>
                          </li>
                       </ul>
                       <ul>
                          <li>
                             <img style="width:70px;"src="assets/img/konya.jpg" alt="">
                             <h4>Konyaspor</h4>
                          </li>
                          <li class="vs"><h4>vs</h4></li>
                          <li>
                             <img style="width:70px;"src="assets/img/bşk.jpg" alt="">
                             <h4>Beşiktaş</h4>
                          </li>
                       </ul>
                    </div>
                 </div>
              </aside>
           </div>
           <?php include("spor_haberleri.php"); ?>

           

        </div>
     </div>
  </section>
</body>

<?php
include("footer.php");
?>
 </body>   
</html>
