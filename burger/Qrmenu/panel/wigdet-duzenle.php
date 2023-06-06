<?php $blok="wigdet"; ?>



<?php include 'inc/header.php'; ?>

<?php include 'inc/sidebar.php'; ?>

<?php include 'inc/navbar.php'; ?>

<script src="ckeditor/ckeditor/ckeditor.js"></script>

<style>

.zara-yatay {

float:left;

          	 }

</style>





<?php

	if(!empty($_POST)){ 

      $baslik = $_POST['baslik'];
      $aciklama = $_POST['aciklama'];
      $buton = $_POST['buton'];


    if ($_FILES['foto']['tmp_name'] != "") {

      $boyut = $_FILES['foto']['size'];

    if ($boyut > (1024 * 1024 * 10)) {

       echo 'Dosya 10MB den büyük olamaz.';

       } else {

      $tip = $_FILES['foto']['type'];

      $isim = $_FILES['foto']['name'];

      $uzanti = explode('.', $isim);

      $uzanti = $uzanti[count($uzanti) - 1];

	  $random = rand();

	  $dosya = $_FILES['foto']['tmp_name'];

      $foto_url = $random . "." . $uzanti;



        copy($dosya, '../img/' . $foto_url);

        echo 'Dosyanız upload edildi!';

          

      $settings = $dbh->prepare("UPDATE wigdet SET foto = '".$foto_url."' WHERE id=1 ");

      $settings->execute();

        }

        }

	  $update = $dbh->prepare("UPDATE wigdet SET baslik = '".$baslik."', aciklama = '".$aciklama."', buton = '".$buton."' WHERE id = 1 " );

      $update->execute();

  		}

?>



<?php

$ayar = $dbh->query("SELECT * FROM wigdet WHERE id = 1 ", PDO::FETCH_ASSOC);

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

                        <h1 class="pd-0 mg-0 tx-20">Özel Yönetim Sistemleri</h1>

                     </div>

                     <div class="breadcrumb pd-0 mg-0">

                        <a class="breadcrumb-item" href="index.php"> Anasayfa</a>

                        <a class="breadcrumb-item" href="">Anasayfa Wigdet Düzenle</a>

                      

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

                              Anasayfa Wigdet Düzenleme Formu

                              </h4>

                           </div>

                           <div class="card-body collapse show" id="collapse1">

                              <form action="" method="post" enctype="multipart/form-data">

                              <div class="row">

                                 
                                <div class="col-lg-6">

                                       <div class="form-group">

                                          <label class="form-control-label active">Başlık: <span class="tx-danger">*</span></label>

                                          <input class="form-control" type="text" value="<?=$ayar['baslik'];?>" name="baslik">

                                       </div>

                                    </div>

                                    <div class="col-lg-6">

                                       <div class="form-group">

                                          <label class="form-control-label active">Buton Link: <span class="tx-danger">*</span></label>

                                          <input class="form-control" type="text" value="<?=$ayar['buton'];?>" name="buton">

                                       </div>

                                    </div>


                                     <div class="col-lg-12">

                                       <div class="form-group">

                                          <label class="form-control-label active">Açıklama: <span class="tx-danger">*</span></label>

                                          <textarea name="aciklama" id="aciklama" class="ckeditor"><?=$ayar['aciklama']?></textarea>

                                       </div>

                                    </div>



                                    



                                    <div class="col-lg-12">

                                       <div class="form-group">

                                           <div class="card-body collapse show" id="collapse8">

                                             <label class="form-control-label active">Foto: <span class="tx-danger">*</span></label>

                                             <input type="file" class="dropify" name="foto" data-show-remove="false" />

                                            <center> <img src="../img/<?=$ayar['foto'];?>" height=150px></center>

                                              </div>

                                              

                                       </div>

                                    </div>

                                    



                                    <br>

                                    <div class="col-sm-6 col-md-3">

                                    <div class="btn-demo">

                                       <button class="btn btn-oblong btn-outline-blue btn-block mg-b-10">Güncelle</button>

                                    </div>

                                 </div>

                              </form>



                               <div class="col-md-12 col-lg-12"> 

                           <div class="card-body collapse show" id="collapse8">

                              <div class="error-notice"> 

                                 <div class="oaerror success">

                                    <strong>BİLGİLENDİRME..</strong> - Resimlerinizin Kalitesi İçin Önerilen Boyutlar: <b>1920 x 1080</b> px'dir.

                                 </div>

                              </div>

                           </div> 

                     </div>



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

