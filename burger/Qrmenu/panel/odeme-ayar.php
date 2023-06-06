<?php $blok="ayar";?>

<?php include 'inc/header.php'; ?>

<?php include 'inc/sidebar.php'; ?>

<?php include 'inc/navbar.php'; ?>



<style>

  .zara-yatay {

    float:left;

  }

</style>





<?php

if(!empty($_POST)){

  $mid = $_POST['mid']; 

  $mkey = $_POST['mkey'];

  $msalt = $_POST['msalt'];

  $weburl = $_POST['weburl'];


$update = $dbh->prepare("UPDATE odeme_ayar SET merchant_id = '".$mid."',merchant_key = '".$mkey."',merchant_salt = '".$msalt."',web_url = '".$weburl."' WHERE id = 1 " );

$update->execute();

}

?>



<?php

$ayar = $dbh->query("SELECT * FROM odeme_ayar WHERE id = 1 ", PDO::FETCH_ASSOC);

if ($ayar->rowCount()) {

  foreach ($ayar as $ayar) {

  }

}

?>



<!-- Page Inner Start -->

<!--================================-->

<div class="page-inner">

 <!-- Main Wrapper -->

 <div id="main-wrapper">

  <!--================================-->

  <!-- Breadcrumb Start -->

  <!--================================-->

  <div class="pageheader pd-t-25 pd-b-35">

   <div class="pd-t-5 pd-b-5">

    <h1 class="pd-0 mg-0 tx-20">Ödeme Ayarları</h1>

  </div>

  <div class="breadcrumb pd-0 mg-0">

    <a class="breadcrumb-item" href="index.php"> Anasayfa</a>

    <a class="breadcrumb-item" href="">Ödeme Ayarları</a>



  </div>

</div>

<!--/ Breadcrumb End -->

<!--================================-->



<!-- ORTA ALAN BAŞLANGIÇ NOKTASI -->

<!-- Basic Form Start -->

<!--================================-->

<div class="col-md-12 col-lg-12">

  <div class="card mg-b-20">

   <div class="card-header">

    <h4 class="card-header-title">

      Genel Ayar Düzenleme Formu

    </h4>

  </div>

  <div class="card-body collapse show" id="collapse1">

    <form action="" method="post" enctype="multipart/form-data">

      <div class="row">



       <div class="col-lg-6">

         <div class="form-group">

          <label class="form-control-label active">Merchant id: <span class="tx-danger">*</span></label>

          <input class="form-control" type="text" value="<?=$ayar['merchant_id'];?>" name="mid">

        </div>

      </div>  

      <div class="col-lg-6">

       <div class="form-group">

        <label class="form-control-label active">Merchant Key: <span class="tx-danger">*</span></label>

        <input class="form-control" type="text" value="<?=$ayar['merchant_key'];?>" name="mkey">

      </div>

    </div>



    <div class="col-lg-6">

     <div class="form-group">

      <label class="form-control-label active">Merchant Salt: <span class="tx-danger">*</span></label>

      <input class="form-control" type="text" value="<?=$ayar['merchant_salt'];?>" name="msalt">

    </div>

  </div>



  <div class="col-lg-6">

   <div class="form-group">

    <label class="form-control-label active">Web Adresi: <span class="tx-danger">*</span></label>

    <input class="form-control" type="text" value="<?=$ayar['web_url'];?>" name="weburl">

  </div>

</div>















<br>

<!-- BİTİŞ NOKTASI BURASIDIR . -->

<div class="col-sm-6 col-md-3">

  <div class="btn-demo">

   <button class="btn btn-oblong btn-outline-blue btn-block mg-b-10">Güncelle</button>

 </div>

</div>


<!-- BİTİŞ NOKTASI BURASIDIR . -->

</form>







</div>



</div>

</div>

</div>

<!--/ Basic Form End -->   





<!-- BİTİŞ NOKTASI BURASIDIR . -->









</div>

<!--/ Main Wrapper End -->

</div>

<!--/ Page Inner End -->

<!--================================-->


<?php include 'inc/footer.php'; ?> 

