<?php
require_once(__DIR__."/Qrmenu/panel/inc/vt.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500;600;700&family=Poppins:wght@100;200;300;400;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Mogra&family=Poppins:wght@100;200;300;400;600;700&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/a921f6758e.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <section class="header-iletisim">
      <nav>
        <article class="container-imgs">
          <a href="./index.html">
            <div>
              <img
                src="./images/barboburger_header_yeni"
                alt=""
                class="image-1"
              />
              <!-- <h1 class="image-1">BARBO BURGER</h1> -->
            </div>
          </a>
          <a href="./index.html">
            <div>
              <img
                src="./images/barbopizza_header.png"
                alt=""
                class="image-2"
              />
              <!-- <h1 class="image-2">BARBO PİZZA</h1> -->
            </div>
          </a>
        </article>
        <div class="nav-links" id="navLinks">
          <i class="fa fa-times" onclick="hideMenu()"></i>
          <ul>
            <li>
              <a href="./index.html">ANA SAYFA</a>
            </li>
            <li>
              <a href="./about.php">HAKKIMIZDA</a>
            </li>
            <li>
              <a href="./gallery.html">GALERİ</a>
            </li>
            <li>
              <a href="./subelerimiz.html">ŞUBELERİMİZ</a>
            </li>
            <li>
              <a href="./iletisim.php">İLETİŞİM</a>
            </li>
            <li id="nav-item">
              <a id="nav-item-name" href="./franchising.php">FRANCHISING</a>
            </li>
          </ul>
        </div>
        <i
          class="fa-solid fa-bars"
          style="color: #ffffff"
          onclick="showMenu()"
        ></i>
      </nav>
      <hr />
      <div class="text-box">
        <h1>İletişim</h1>
        <p>
          Sorularınız, görüşleriniz, önerileriniz ve daha fazlası için bize
          ulaşın
        </p>
      </div>
    </section>
    <section class="iletisim-container">
      <div class="iletisim-container-item">
        <div>
          <i
            class="fa-solid fa-location-dot"
            style="font-size: xx-large; color: red"
          ></i>
          <p>Adres</p>
          <p>
            <a
              href="https://www.google.com/maps/place/Denizevleri,+Atat%C3%BCrk+Bl.+No:116,+55200+Atakum%2FSamsun/@41.329071,36.2954051,17z/data=!3m1!4b1!4m6!3m5!1s0x408879b104c323d5:0x7b27a0b6bb4ee696!8m2!3d41.329071!4d36.2954051!16s%2Fg%2F11c24r46qw"
              target="_blank"
              style="text-decoration: none"
              >Denizevleri, Atatürk Bl. <br />
              No: 116/1, 55200 Atakum/Samsun
            </a>
          </p>
        </div>
        <div>
          <i
            class="fa-solid fa-phone"
            style="font-size: xx-large; color: blue"
          ></i>
          <p>Telefon</p>
          <p><a href="tel:03622333333"> (0362) 233 33 33</a></p>
        </div>
        <div>
          <i
            class="fa-brands fa-whatsapp"
            style="font-size: xx-large; color: green"
          ></i>
          <p>WhatsApp</p>
          <p><a href="https://wa.me/05323934083">+90 532 393 40 83</a></p>
        </div>
        <div style="border-right: white">
          <i
            class="fa-sharp fa-regular fa-envelope"
            style="font-size: xx-large"
          ></i>
          <p>Email</p>
          <p><a href="mailto:info@barboburger.com">info@barboburger.com</a></p>
        </div>
      </div>
      <?php
             if ($_POST) {

                 $isim_soyisim = $_POST['isim_soyisim'];

                 $mail = $_POST['mail'];

                 $telefon = $_POST['telefon'];

                 $icerik = $_POST['icerik'];

                if ($isim_soyisim <> "" && $mail <> "" && $telefon <> "" && $icerik <> "" ) {

                                     $satir = [
                                         'isim_soyisim' => $isim_soyisim,
                                         'mail' => $mail,
                                         'telefon' => $telefon,
                                         'icerik' => $icerik,
                                     ];

                                     $sql = "INSERT INTO iletisim SET isim_soyisim=:isim_soyisim, mail=:mail, telefon=:telefon, icerik=:icerik;";

                                     $durum = $dbh->prepare($sql)->execute($satir);

                                     if ($durum) {

                                         $sonId = $dbh->lastInsertId();

                                         echo '<script language="javascript">
     alert("Talebiniz Başarı İle Alınmıştır. Müşteri Temsilcileri Sizin İle İletişime Geçeceklerdir.")
     </script> ';



                                     }



                                 }

                             }



             ?>
      <div class="iletisim-form">
        <h1>Bize Ulaşın</h1>
        <p>Aşağıdaki formu doldurarak bize hızlı şekilde ulaşabilirsiniz.</p>
        <form  method="post" class="" id="ContactForm">
          <div class="form-row">
            <div class="form-label">
              <label for="">Ad Soyad <span class="isaret">*</span></label>
              <input type="text" placeholder="Adınız ve soyadınız" name="isim_soyisim" id="isim_soyisim" value="" class="form_input required" required />
            </div>
            <div class="form-label">
              <label for="">Email <span class="isaret">*</span></label>
              <input type="email" placeholder="Email adresiniz" name="mail" id="mail" value="" class="form_input required email" required />
            </div>
          </div>
          <div class="form-row">

            <div class="form-label">
              <label for="">Telefon <span class="isaret">*</span></label>
              <input type="text" placeholder="Telefon numaranız" name="telefon" id="telefon" value="" class="form_input required email" required />
            </div>
          </div>
          <div class="form-label">
            <label for="">Mesaj <span class="isaret">*</span></label>
            <textarea
              name="icerik" id="icerik" class="form_textarea textarea required"
              cols="30"
              rows="10"
              placeholder="Mesajınız"
              style="padding: 10px; border-radius: 8px"
            ></textarea>
          </div>
          <div class="iletisim-submit" style="padding-bottom: 20px">
            <input class="iletisim-btn" type="submit" name="submit" id="submit" value="Mesajı Gönder" />
          </div>
        </form>
      </div>

    </section>
    <section class="footer">
      <div class="footer-container">
        <div class="footer-container-left">
          <nav>
            <article class="container-imgs">
              <a href="./index.html">
                <div>
                  <h1 class="image-1">BARBO BURGER</h1>
                </div>
              </a>
              <a href="./index.html">
                <div>
                  <h1 class="image-2">BARBO PİZZA</h1>
                </div>
              </a>
            </article>
          </nav>
          <p>
            Başarının Sırrı: İnanç ve Çalışmak. Ne sahip olduğun becerilerin
            ulaştırır seni başarıya ne hayallerin ne de şansın, sadece inancın
            ve disiplinli çalışman başarıya ulaştırır. Başarının sırrı hırs
            değil azimli ve öz verili çalışmaktır.
          </p>
          <p style="color: #b5a46d; font-weight: bold">By Barbaros Yoloğlu</p>
          <div class="footer-icons">
            <a href="https://www.facebook.com/barboburger/" target="_blank">
              <i
                class="fa-brands fa-facebook-f fa-2xl"
                style="color: #ffffff"
              ></i
            ></a>
            <a href="https://www.instagram.com/barboburger/" target="_blank">
              <i
                class="fa-brands fa-instagram fa-2xl"
                style="color: #ffffff"
              ></i>
            </a>
            <a href="https://twitter.com/BarboBurgers" target="_blank">
              <i class="fa-brands fa-twitter fa-2xl" style="color: #ffffff"></i
            ></a>
            <a href="https://www.youtube.com/@BARBAROSYOLOGLUU" target="_blank">
              <i class="fa-brands fa-youtube fa-2xl" style="color: #ffffff"></i
            ></a>
          </div>
        </div>
        <div class="footer-container-middle">
          <div>
            <h3>İletişim Bilgilerimiz</h3>
            <p>Tel: (0362) 233 33 33</p>
            <p>Email: info@barboburger.com</p>

            <h3 style="margin-top: 10px">Adres</h3>

            <p>
              Denizevleri Mahallesi <br />
              Atatürk Bulvarı No:116 <br />
              Atakum/Samsun
            </p>
            <a
              href="https://www.google.com/maps/place/Denizevleri,+Atat%C3%BCrk+Bl.+No:116,+55200+Atakum%2FSamsun/@41.329071,36.2954051,17z/data=!3m1!4b1!4m6!3m5!1s0x408879b104c323d5:0x7b27a0b6bb4ee696!8m2!3d41.329071!4d36.2954051!16s%2Fg%2F11c24r46qw"
              target="_blank"
              style="text-decoration: none"
            >
              <p
                style="
                  font-size: small;
                  color: white;

                  margin-top: 5px;
                "
              >
                Haritada Görüntüle
              </p>
            </a>
          </div>
        </div>
        <div class="footer-container-right">
          <div>
            <h3>Çalışma Saatlerimiz</h3>
            <p>Her Gün 12:00 - 22:00</p>
            <h3>Hizmet Seçenekleri</h3>
            <p>İçerde Servis</p>
            <p>Paket Servis</p>
            <h3>Sipariş Seçenekleri</h3>
            <p class="siparis-buton">
              <a
                href="https://www.yemeksepeti.com/restaurant/llj0/barbo-burger"
                target="_blank"
              >
                <img
                  src="./images/yemek-sepeti-logo-0961A3A1FD-seeklogo.com_.png"
                  alt=""
                />
              </a>
              <a
                href="https://getir.com/yemek/restoran/barbo-burger-atakum-denizevleri-mah-atakum-samsun/"
                target="_blank"
              >
                <img src="./images/Getir_Logo_1621812382342.png" alt="" />
              </a>
              <a href="https://www.trendyol.com/" target="_blank">
                <img
                  src="./images/X4hUOIQNrUML48yz-trendyol-yemek.png"
                  alt=""
                />
              </a>
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- JavaScript for Toggle Menu -->
    <script>
      var navLinks = document.getElementById("navLinks");
      function showMenu() {
        console.log("calll");
        navLinks.style.display = "inherit";
        navLinks.style.right = "0";
      }
      function hideMenu() {
        navLinks.style.display = "none";
      }
    </script>
  </body>
</html>
