<?php include 'includes/header.php';?>
<title>Siparişiniz Alındı..</title>
<?php include 'includes/sayfa-navbar.php';

// $_SESSION["sepet"]=[];
//session_destroy();
?>

<div id="pages_maincontent">



	<div class="page_single layout_fullwidth_padding">

    <div class="success_message">

      <span><?php echo $dil["tesekkur"];?></span>

      <img src="images/icons/black/rocket.png" alt="" title="" />

      <p><?php echo $dil["sip-alindi"];?> </p>    
      <p>#<?= $_SESSION['sipid']?> kodunuz ile sipariş durumunu kontrol edebilirsiniz.</p>        

    </div>

  </div>

  <a href="anasayfa" class="button_full btyellow"><?php echo $dil["anasayfa-don"];?></a>     

</div>





</div>

</div>

</div>



</div>

</div>


<?php include 'includes/footer.php';?>