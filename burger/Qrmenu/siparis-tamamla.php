<?php include 'includes/header.php';?>
<title>Siparişi Tamamla</title>
<link rel="stylesheet" href="./button.css">
<link rel="stylesheet" href="./selectstyle.css">
<?php include 'includes/sayfa-navbar.php';?>

<style type="text/css">
  .tab button.active {
    background-color: #ccc;
  }
</style>

<div id="pages_maincontent">


 <h2 class="page_title"><center><b><?php echo $dil["siparis-tamamla"];?></b></center></h2>

 <?php 


 if(isset($_POST['form1']) ){
  $adisoyadi = strip_tags($_POST['adisoyadi']);
  $telefon = strip_tags($_POST['telefon']);
  $masa = $_POST['masa_adi'];
  $payment = ($_POST['payment']);
  $durum = 0;
  $siparisdetayekstra=[];

  foreach ($_SESSION['sepet'] as $id => $dizi) {
    $porsiyon_id[]=$dizi["menu_porsiyon"];
    $idler[] = $dizi['urunid'];
    $adetler[] = $dizi['qty'];
    $aciklamalar[] = $dizi['icerik'];

              /*
              $ekstraistek=0;
              if($dizi["menu_porsiyon"]>0){
                  $porsyon = $dbh -> prepare("SELECT * FROM porsiyon_secenekleri WHERE id = ?");
                  $porsyon-> execute(array($dizi["menu_porsiyon"]));
                  $porsyon = $porsyon->fetch(PDO::FETCH_ASSOC);
                  $pfiyat = $porsyon["fiyat"];
                  $ekstraistek+= $pfiyat;
               }  
              */
               $siparisdetayekstra[]=implode('$', $dizi["ekstra"]);
             }

             $id_birlestir = implode("|",$idler);
             $adet_birlestir = implode("|", $adetler);
             $aciklama_birlestir =  strip_tags(implode("|", $aciklamalar));
             $porsiyon_idler = implode("|", $porsiyon_id);
             $siparisdetayekstrab = implode("|", $siparisdetayekstra);






             $siparis_ekle = $dbh -> prepare("INSERT INTO siparisler (adi_soyadi,telefon,masa,urun_id,urun_adet,porsiyon_id,ekstralar,aciklamalar,payment,durum) VALUES (?,?,?,?,?,?,?,?,?,?)");
             $siparis_ekle->execute([$adisoyadi,$telefon,$_SESSION["masa_no"],$id_birlestir,$adet_birlestir,$porsiyon_idler,$siparisdetayekstrab,$aciklama_birlestir,$payment,$durum]);
             if ($siparis_ekle) {
              echo 'siparisiniz alindi';
              $_SESSION['sipid']= $dbh->lastInsertId();
              $_SESSION['mail']=$mail ;
             header("location:siparis-alindi.php");
              $_SESSION['sepet']=[];
            }else{
              echo 'bir sorun olustu';
            }

          }elseif(isset($_POST['form2']) ){

           $adisoyadi = strip_tags($_POST['name']);
           $telefon = strip_tags($_POST['tel']);
           $mail = strip_tags($_POST['mail']);
           $adres = strip_tags($_POST['adres']);
           $payment = ($_POST['paymentp']);
           $durum = 0;
           $siparisdetayekstra=[];



           foreach ($_SESSION['sepet'] as $id => $dizi) {
            $porsiyon_id[]=$dizi["menu_porsiyon"];
            $idler[] = $dizi['urunid'];
            $adetler[] = $dizi['qty'];
            $aciklamalar[] = $dizi['icerik'];

              /*
              $ekstraistek=0;
              if($dizi["menu_porsiyon"]>0){
                  $porsyon = $dbh -> prepare("SELECT * FROM porsiyon_secenekleri WHERE id = ?");
                  $porsyon-> execute(array($dizi["menu_porsiyon"]));
                  $porsyon = $porsyon->fetch(PDO::FETCH_ASSOC);
                  $pfiyat = $porsyon["fiyat"];
                  $ekstraistek+= $pfiyat;
               }  
              */
               $siparisdetayekstra[]=implode('$', $dizi["ekstra"]);
             }

             $id_birlestir = implode("|",$idler);
             $adet_birlestir = implode("|", $adetler);
             $aciklama_birlestir =  strip_tags(implode("|", $aciklamalar));
             $porsiyon_idler = implode("|", $porsiyon_id);
             $siparisdetayekstrab = implode("|", $siparisdetayekstra);


             $siparis_ekle = $dbh -> prepare("INSERT INTO siparisler (adi_soyadi,telefon,mail,adres,masa,urun_id,urun_adet,porsiyon_id,ekstralar,aciklamalar,payment,durum) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
             $siparis_ekle->execute([$adisoyadi,$telefon,$mail,$adres,0,$id_birlestir,$adet_birlestir,$porsiyon_idler,$siparisdetayekstrab,$aciklama_birlestir,$payment,$durum]);
             if ($siparis_ekle) {
              $_SESSION['sipid']= $dbh->lastInsertId();
              $_SESSION['mail']=$mail ;
             // echo 'siparisiniz alindi';

              if( $payment==4){
                header("location:odeme.php");

              }else{
                header("location:siparis-alindi.php");

              }
              $_SESSION['sepet']=[];
            }
          }


          ?>

          <div class="page_single layout_fullwidth_padding">

            <h4 class="checkout_title"><?php echo $dil["bilgi-guncelle"];?></h4> 
            <div>


              <div class="w3-bar w3-black tab">

                <style type="text/css">
                  .tablinks{
                    padding: 0.3em 1em;
                  }
                </style>
                <center>
                  <button class="w3-bar-item w3-button tablinks active" onclick="openCity(event, 'London')">Masa Sipariş</button>

                  <button class="w3-bar-item w3-button tablinks" onclick="openCity(event, 'Paris')">Paket Sipariş</button>
                </center>
              </div>

              <div id="London" class="tabcontent city" style="display: block;">
                <!-- Masa Siparişi -->


                <div class="contactform">
                  <form class="cmxform" id="ContactForm" method="post" action="">

                   <h4 class="checkout_title">Sipariş Bilgileriniz</h4>  

                   <label><?php echo $dil["isim-soyisim"];?>:</label>
                   <input type="text" name="adisoyadi" id="ContactName" value="" class="form_input required" / required>
                 <!--   <label><?php echo $dil["dogrulama"];?>:</label>
                   <input type="number" name="telefon" id="ContactEmail" value="" class="form_input required email" / required> -->

                   <label><?php echo $dil["masa-no"];?>:
                    <? if(!isset($_SESSION["masa_no"])){ ?>
                     <a   href="qrsayfa.php" style=" background-color: #000; /* Green */
                     border: none;
                     float:right;
                     color: white;
                     padding: 5px 23px;
                     text-align: center;
                     text-decoration: none;
                     display: inline-block;
                     font-size: 16px;"><?php echo $dil["qrokut"];?></a> 
                   <? } ?>
                 </label>







                 <h4 class="checkout_title"><?php echo $dil["sepet-urun"];?></h4>

                 <?php 
                 if(count($_SESSION['sepet']) > 0){
                   foreach ($_SESSION['sepet'] as $siparis => $siparisdetay) :
                    $array=$siparisdetay;
                    $urun_getir = $dbh -> prepare("SELECT * FROM menu WHERE id = ?");
                    $urun_getir-> execute(array($siparisdetay["urunid"]));
                    $urun = $urun_getir->fetch(PDO::FETCH_ASSOC);
                    $fiyat = $urun["urun_fiyat"];

                    ////
                    $ekstraistek=0;
                    $porsyon="";
                    if($siparisdetay["menu_porsiyon"]>0){
                      $porsyon = $dbh -> prepare("SELECT * FROM porsiyon_secenekleri WHERE id = ?");
                      $porsyon-> execute(array($siparisdetay["menu_porsiyon"]));
                      $porsyon = $porsyon->fetch(PDO::FETCH_ASSOC);
                      $pfiyat = $porsyon["fiyat"] * $array['qty'] ;
                      $ekstraistek+= $pfiyat;
                    }  

                    ////


                    $siparisdetayekstra=implode(" ", $siparisdetay["ekstra"]);
                    //

                    $toplam = $fiyat * $array['qty'] + $ekstraistek; 
                    $urun = cevir("menu",$urun,$_SESSION["dil"]);
                    $toplam2 += $toplam;


                    $porsyon = cevir("porsiyon_secenekleri",$porsyon,$_SESSION["dil"]); 

                    ?>
                    <div class="order_item">
                      <div class="order_item_thumb"><img src="img/<?= $urun['foto']; ?>" alt="" title="" /></div>
                      <div class="order_item_title"> &nbsp; <?= $array['qty']; ?> X <span><?= $urun["urun_adi"]; ?><?=$porsyon?" | ".$porsyon["baslik"]:""?></span><br>  <?=$siparisdetayekstra?" &nbsp;&nbsp;&nbsp; ".$siparisdetayekstra:""?>    </div>
                      <div class="order_item_price"><?= $toplam; ?> ₺</div>           
                    </div>
                  <?php endforeach;  }?>
                  <!-- Ödeme Yöntemi -->
                  <!-- Ödeme Yöntemi -->

                  <h4 class="checkout_title"><?php echo $dil["odeme-yontem"];?></h4>

                  <div class="contactform">
                    <div class="checkout_select">

                      <label class="label-radio item-content">

                        <input type="radio" name="payment" value="1" checked="checked">
                        <div class="item-inner">
                          <div class="item-title"><?php echo $dil["kasa"];?></div>
                        </div>
                      </label>
                      <label class="label-radio item-content"> </label>
                    </div>
                  </div>


                  <h4 class="checkout_title"><?php echo $dil["toplam-tutar"];?></h4>      
                  <div class="carttotal_full"> 
                    <div class="carttotal_row_last">
                      <div class="carttotal_left"><?php echo $dil["toplam-tutar"];?> =</div> <div class="carttotal_right"> <?= $toplam2;?> ₺ </div>
                    </div>
                  </div> 
                  <?
                  if($_SESSION["masa_no"]){ 
                   ?>
                   <button type="submit" name="form1" class="button_full"><?php echo $dil["sip-onay"];?></button>
                   <?
                 }else{
                   ?>
                   <p><font color="red"> <?php echo $dil["masaqrkodgerekli"];?></font></p>
                   <?
                 }
                 ?>

               </form> 

             </div>

             <!-- Masa Siparişi -->


           </div>

           <div id="Paris" class="tabcontent city" style="display: none;">

            <!-- Paket Siparişi -->


            <div class="contactform">
              <form class="cmxform" id="ContactForm" method="post" action="">


                <h4 class="checkout_title">Sipariş Bilgileriniz</h4>      

                <div class="carttotal_full"> 
                  <div class="carttotal_row_last">
                    <label>İsim Soyisim</label>
                    <input type="text" name="name" required="" class="form_input ">
                  </div>

                  <div class="carttotal_row_last">
                    <label>Telefon</label>
                    <input type="text" required="" name="tel" class="form_input ">
                  </div>
                  <div class="carttotal_row_last">
                    <label>Mail</label>
                    <input type="text" required="" name="mail" class="form_input ">
                  </div>

                  <div class="carttotal_row_last">
                    <label>Adres</label>
                    <textarea required="" name="adres" class="form_textarea textarea required"></textarea>
                  </div>
                </div> 
                <h4 class="checkout_title"><?php echo $dil["sepet-urun"];?></h4>

                <?php 
                if(count($_SESSION['sepet']) > 0){
                 foreach ($_SESSION['sepet'] as $siparis => $siparisdetay) :
                  $array=$siparisdetay;
                  $urun_getir = $dbh -> prepare("SELECT * FROM menu WHERE id = ?");
                  $urun_getir-> execute(array($siparisdetay["urunid"]));
                  $urun = $urun_getir->fetch(PDO::FETCH_ASSOC);
                  $fiyat = $urun["urun_fiyat"];

                    ////
                  $ekstraistek=0;
                  $porsyon="";
                  if($siparisdetay["menu_porsiyon"]>0){
                    $porsyon = $dbh -> prepare("SELECT * FROM porsiyon_secenekleri WHERE id = ?");
                    $porsyon-> execute(array($siparisdetay["menu_porsiyon"]));
                    $porsyon = $porsyon->fetch(PDO::FETCH_ASSOC);
                    $pfiyat = $porsyon["fiyat"] * $array['qty'] ;
                    $ekstraistek+= $pfiyat;
                  }  

                    ////


                  $siparisdetayekstra=implode(" ", $siparisdetay["ekstra"]);
                    //

                  $toplamm = $fiyat * $array['qty'] + $ekstraistek; 
                  $urun = cevir("menu",$urun,$_SESSION["dil"]);
                  $toplamm2 += $toplamm;


                  $porsyon = cevir("porsiyon_secenekleri",$porsyon,$_SESSION["dil"]); 

                  ?>
                  <div class="order_item">
                    <div class="order_item_thumb"><img src="img/<?= $urun['foto']; ?>" alt="" title="" /></div>
                    <div class="order_item_title"> &nbsp; <?= $array['qty']; ?> X <span><?= $urun["urun_adi"]; ?><?=$porsyon?" | ".$porsyon["baslik"]:""?></span><br>  <?=$siparisdetayekstra?" &nbsp;&nbsp;&nbsp; ".$siparisdetayekstra:""?>    </div>
                    <div class="order_item_price"><?= $toplam; ?> ₺</div>           
                  </div>
                <?php endforeach;  }?>
                <!-- Ödeme Yöntemi -->
                <!-- Ödeme Yöntemi -->



                <h4 class="checkout_title"><?php echo $dil["odeme-yontem"];?></h4>

                <div class="contactform">
                  <div class="checkout_select">

                    <label class="label-radio item-content">

                      <input type="radio" name="paymentp" value="3" checked="checked">
                      <div class="item-inner">
                        <div class="item-title">Kapıda Nakit</div>
                      </div>
                    </label>
                    <label class="label-radio item-content">

                      <input type="radio" name="paymentp" value="2">
                      <div class="item-inner">
                        <div class="item-title">Kapıda Kredi Kartı</div>
                      </div>
                    </label>

                    <label class="label-radio item-content">

                      <input type="radio" name="paymentp" value="4">
                      <div class="item-inner">
                        <div class="item-title">Online Ödeme</div>
                      </div>
                    </label>
                  </div>
                </div>


                <h4 class="checkout_title"><?php echo $dil["toplam-tutar"];?></h4>      
                <div class="carttotal_full"> 
                  <div class="carttotal_row_last">
                    <div class="carttotal_left"><?php echo $dil["toplam-tutar"];?> =</div> <div class="carttotal_right"> <?= $toplamm2;?> ₺ </div>
                  </div>
                </div> 



                <button type="submit" name="form2" class="button_full">Siparişi Onayla</button>


              </form> 

            </div>



            <!-- Paket Siparişi -->
          </div>



        </div>
        <!-- Paket Siparişi -->
        <!-- Paket Siparişi -->
        <!-- Paket Siparişi -->
        <!-- Paket Siparişi -->



        <blockquote>
          <center><?php echo $dil["sip-aciklama"];?></center>
        </blockquote> 
      </div>



    </div>
  </div>


  <script  src="./selectscript.js"></script>
  <?php include 'includes/footer.php';?>
  <script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
  </script>