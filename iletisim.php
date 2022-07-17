<?php
$sayfa="İletişim";
include("head.php");
?>

   <!-- Contact-->
   <section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase mt-3">İLETİŞİME GEÇMEK İÇİN BİLGİLERİ DOLDURUN</h2>
        </div>
        <form id="contactForm" action="iletisim" name="sentMessage" novalidate="novalidate">
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <input name="adsoyad" class="form-control" id="name" type="text" placeholder="Adınız *" required="required" data-validation-required-message="Lütfen adınızı girin." />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <input name="email" class="form-control" id="email" type="email" placeholder="E-mail Adresiniz *" required="required" data-validation-required-message="Lütfen e-mail adresinizi girin." />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group mb-md-0">
                        <input name="telefon" class="form-control" id="phone" type="tel" placeholder="Telefon Numaranız *" required="required" data-validation-required-message="Lütfen telefon numaranızı girin." />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <textarea name="mesaj" class="form-control" id="message" placeholder="Mesajınız *" required="required" data-validation-required-message="Lütfen bir mesajınızı yazınız."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div id="success"></div>
                <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" name="iletisimform" type="submit">Mesajı Gönder</button>
            </div>
        </form>
    </div>
</section>

<?php
include("footer.php");
?>
</html>

