<?php include 'includes/header.php';?>
<title>Sipariş Durumum</title>
<link rel="stylesheet" href="./button.css"> 
<?php include 'includes/sayfa-navbar.php';?>
<?php 

if(isset($_POST['form1'])){
  $masa = $_POST['masa_adi'];
  $telefon = $_POST['telefon'];

  $siparis_getir = $dbh-> prepare("SELECT durum FROM siparisler WHERE masa = ? AND siparis_id = ?");
  $siparis_getir -> execute([$masa, $telefon]);
  if ($siparis_getir->rowCount() > 0) {
    $siparis = $siparis_getir->fetch();
    $durum = $siparis['durum'];

    if ($durum == 0) {
     $durum = "Siparişinizi Aldık Birazdan Hazırlayacağız..";
   }else if($durum == 1){
    $durum = "Siparişinizi Hazırlıyoruz..";
  }else if($durum == 2){
    $durum = "Siparişiniz Tamamlandı Birazdan Sizlere Sunacağız..";
  }else if($durum == 3){
    $durum = "Siparişiniz İptal Edildi.";
  }else{
    $durum = "Geçersiz Bir Sipariş Lütfen Doğru Bilgileri Giriniz";
  }
}else{
  $durum = "Geçersiz Bir Sipariş Lütfen Doğru Bilgileri Giriniz";
}

}elseif(isset($_POST['form2'])){

 $sip_no = $_POST['sip_no'];
 $mail = $_POST['mail'];

 $siparis_getir = $dbh-> prepare("SELECT durum FROM siparisler WHERE masa = 0 AND mail = ? AND siparis_id=?");
 $siparis_getir -> execute([$mail,$sip_no]);
 if ($siparis_getir->rowCount() > 0) {
  $siparis = $siparis_getir->fetch();
  $durum = $siparis['durum'];

  if ($durum == 0) {
   $durum = "Siparişinizi Aldık Birazdan Hazırlayacağız..";
 }else if($durum == 1){
  $durum = "Siparişinizi Hazırlıyoruz..";
}else if($durum == 2){
  $durum = "Siparişiniz Tamamlandı Birazdan Sizlere Sunacağız..";
}else if($durum == 3){
  $durum = "Siparişiniz İptal Edildi.";
}else{
  $durum = "Geçersiz Bir Sipariş Lütfen Doğru Bilgileri Giriniz";
}
}else{
  $durum = "Geçersiz Bir Sipariş Lütfen Doğru Bilgileri Giriniz";
}
}

?>
<div id="pages_maincontent">


 <h2 class="page_title"><center><?php echo $dil["sip-aciklama"];?></center></h2>



 <div class="page_single layout_fullwidth_padding">

  <h4 class="checkout_title"><?= $durum; ?></h4>	
  <div class="contactform">
    <form class="cmxform" id="ContactForm" method="post" action="">
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
     </label><br> 

     <?

     if($_SESSION["masa_no"]){            
      $sth = $dbh->prepare("select * from masa_no where id=".$_SESSION["masa_no"]);
      $sth->execute();
      $masa_ = $sth->fetch(PDO::FETCH_ASSOC);
      echo $masa_["masa_adi"];
      ?>
      <input type="hidden" name="masa_adi" value="<?=$_SESSION["masa_no"];?>">
      <?}else{?>
       <br> 
       <p><font color="red"> <?php echo $dil["masaqrkodgerekli"];?></font></p>

     <? } ?>


     <label>Sipariş Numarası Girin:
      <? if(!$_SESSION["masa_no"]){ ?>
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
    </label> <br> 

    <input type="number" name="telefon" id="ContactEmail" placeholder="2587" value="<?= $_SESSION['sipid'];?>" class="form_input required email" / required>
    <input type="hidden" name="siparis-kontrol" value="1"> 
    <br />
    <? 
    if($_SESSION["masa_no"]){ 
      ?>
      <center><button name="form1" type="submit"><?php echo $dil["kontrol-et"];?></button></center>
      <?
    } 

    ?>       


  </form>
  <?php  if(!$_SESSION["masa_no"]){  ?>
    <label>
      <form action="" id="form2" method="post">

        <h4 class="checkout_title">Paket Sipariş Kontrolü</h4>  
        <br>
        <input type="hidden" name="masa_adi" value="0">
        <label>Sipariş Numarası</label>
        <input type="number" name="sip_no" class="form_input" placeholder="2587" value="<?= $_SESSION['sipid'];?>">
        <label>Eposta</label>
        <input type="text" name="mail" class="form_input" value="<?= $_SESSION['mail'];?>">

        <center><button name="form2" type="submit">Kontrol Et</button></center>

      </form>
    </label> <br> 
  <?php } ?>
</div>

</div> 
<blockquote>
  <center><?php echo $dil["sip-kontrol"];?></center>
</blockquote> 
</div>


</div>
</div>
</div>

</div>
</div>

<?php include 'includes/footer.php';?>