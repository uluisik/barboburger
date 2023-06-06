<?php include 'includes/header.php';?>
<title>Bize Ulaşın </title>
<?php include 'includes/sayfa-navbar.php';?>

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

     <div id="pages_maincontent">



      <h2 class="page_title"><center><?php echo $dil["bize-ulasin"];?></center></h2>



     <div class="page_single layout_fullwidth_padding">



            <h2 id="Note"></h2>

            <div class="contactform">

            <form method="post" class="" id="ContactForm">

            <label><?php echo $dil["isim-soyisim"];?>:</label>

            <input type="text" name="isim_soyisim" id="isim_soyisim" value="" class="form_input required" / required>

            <label><?php echo $dil["mail"];?>:</label>

            <input type="text" name="mail" id="mail" value="" class="form_input required email" / required>

            <label><?php echo $dil["telefon"];?>:</label>

            <input type="text" name="telefon" id="telefon" value="" class="form_input required email" / required>

            <label><?php echo $dil["icerik"];?>:</label>

            <textarea name="icerik" id="icerik" class="form_textarea textarea required" rows="" cols="" required></textarea>

            <input type="submit" name="submit" class="form_submit" id="submit" value="<?php echo $dil["gonder"];?>" />

            <label id="loader" style="display:none;"><img src="images/loader.gif" alt="Loading..." id="LoadingGraphic" /></label>

            </form>

            </div>



      <h3><?php echo $dil["lokasyon"];?></h3>



      <iframe src="<?=$ayar['harita'];?>" width="100%" height="200" frameborder="0" style="border:0"></iframe>



      <blockquote>

      <b><?php echo $dil["mail"];?>:</b> <?=$ayar['mail'];?> <br />

      <b><?php echo $dil["telefon"];?>:</b> <?=$ayar['telefon'];?> <br />

      <b><?php echo $dil["adres"];?>:</b> <?=$ayar['adres'];?>

      </blockquote>



      <a href="tel:<?=$ayar['telefon'];?>" class="button_full btyellow external"><?php echo $dil["bize-ulasin"];?></a>



      <div class="clear"></div>

      </div>



      </div>

    </div>

  </div>

</div>



         </div>

    </div>



 <?php include 'QrMenu/includes/footer.php';?>
