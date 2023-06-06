<?php include 'includes/header.php';?>
<title>Bilgilerim</title>
<?php include 'includes/sayfa-navbar.php';
	/** @var User $user  */
  $user = $_SESSION["user"];
  
if($_POST){

  if(($_POST["mail"] )==""  ||($_POST["isim_soyisim"] )==""  ||($_POST["telefon"] )==""  ){
    ?>
<script >

  alert("Lütfen Tüm Alanları Doldurunuz");
</script>
    <?

  }else{
    $user->email     = $_POST["mail"];
    $user->fullname  = $_POST["isim_soyisim"];
    $user->phone     = $_POST["telefon"];
    $user->update();
  }


}
?>
 

     <div id="pages_maincontent">

      

      <h2 class="page_title"><center>Üyelik Bilgileri</center></h2>

	  

     <div class="page_single layout_fullwidth_padding">	  



            <h2 id="Note"></h2>

            <div class="contactform">

            <form method="post" class="" id="ContactForm">

            <label>Ad Soyad:</label>

            <input type="text" name="isim_soyisim" id="isim_soyisim" value="<?=$user->fullname?>" class="form_input required" / required>

            <label>email:</label>

            <input type="text" name="mail" id="mail" value="<?=$user->email?>" class="form_input required email" / required>

            <label>Tel:</label>

            <input type="text" name="telefon" id="telefon" value="<?=$user->phone?>" class="form_input required email" / required>
        <? /* 
            <label>Sipariş Adresi:</label>

            <input type="text" name="mail" id="mail" value="" class="form_input required email" / required>
          */ ?>
            <input type="submit" name="submit" class="form_submit" id="submit" value="<?php echo $dil["gonder"];?>" /> 

            <label id="loader" style="display:none;"><img src="images/loader.gif" alt="Loading..." id="LoadingGraphic" /></label>

            </form>
            <br>
            <!--<a class="button button3" href="cikis.php">Çıkış Yap</a>-->
            </div>

            <style>

.button {
 
  border: none;
  color: white;
  padding: 0px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  width: 100%;
}
.button3 {background-color: #f44336;} /* Red */

            </style>

            

      </div>

      

      </div>

    </div>

  </div>

</div>



         </div>

    </div>

 

 <?php include 'includes/footer.php';?>