<?php $blok="hakkimizda"; ?>
 

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

      $icerik = $_POST['icerik'];


	  $update = $dbh->prepare("UPDATE hakkimizda SET icerik = '".$icerik."' WHERE id = 1 " );

      $update->execute();

      $id=1;

      foreach ($_POST["en"] as $key => $value) {
         dilguncelle("en","hakkimizda",$id,$key,$value);
      }

      foreach ($_POST["ar"] as $key => $value) {
         dilguncelle("ar","hakkimizda",$id,$key,$value);
      }

      foreach ($_POST["ru"] as $key => $value) {
         dilguncelle("ru","hakkimizda",$id,$key,$value);
      }

  		}

?>




<?php
$ayar = $dbh->query("SELECT * FROM hakkimizda WHERE id = 1 ", PDO::FETCH_ASSOC);
if ($ayar->rowCount()) {
    foreach ($ayar as $ayar) {
    }
}

$sonucen = cevir("hakkimizda",$ayar,"en"); 
$sonucru = cevir("hakkimizda",$ayar,"ru"); 
$sonucar = cevir("hakkimizda",$ayar,"ar"); 
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

                        <a class="breadcrumb-item" href="">Hakkımızda Düzenle</a>

                      

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

                              Hakkımızda Düzenleme Formu

                              </h4>

                           </div>

                           <div class="card-body collapse show" id="collapse1">

                              <form action="" method="post" enctype="multipart/form-data">
                              

                              <div class="nav-tabs-top">
                                 <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                       <a class="nav-link active show" data-toggle="tab" href="#navs-genel">Genel Bilgiler</a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" data-toggle="tab" href="#navs-en">İngilizce</a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" data-toggle="tab" href="#navs-ru">Rusça</a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" data-toggle="tab" href="#navs-ar">Arapca</a>
                                    </li>
                                 </ul>
                                 <div class="tab-content">
                                    <div class="tab-pane fade active show" id="navs-genel">
                                       <div class="card-body">
                                       <div class="row">
                                             

                                                <div class="col-lg-12">
                                                   <div class="form-group">
                                                      <label class="form-control-label active">Açıklama: <span class="tx-danger">*</span></label>
                                                      <textarea name="icerik" id="icerik" class="ckeditor"><?=$ayar['icerik'];?></textarea>
                                                   </div>
                                                </div>

                                                 
                                          
                                        </div>
                                       </div>
                                       </div>
                                    <div class="tab-pane fade" id="navs-en">
                                       <div class="card-body">
                                         
                                       <div class="col-lg-12">  
                                                   <div class="form-group">
                                                      <label class="form-control-label active">Açıklama: <span class="tx-danger">*</span></label>
                                                   <textarea name="en[icerik]" id="icerik" class="ckeditor"><?=$sonucen['icerik'];?></textarea>
                                                   </div>
                                                </div>
                      

          

                                       </div>
                                    </div>
                                   
                                    <div class="tab-pane fade" id="navs-ru">
                                       <div class="card-body">
                                        

                                                <div class="col-lg-12">
                                                   <div class="form-group">
                                                      <label class="form-control-label active">Açıklama: <span class="tx-danger">*</span></label>
                                                   <textarea name="ru[icerik]" id="icerik" class="ckeditor"><?=$sonucru['icerik'];?></textarea>
                                                   </div>
                                                </div>
                      

                                  
                                       </div>
                                    </div>
             
                                    <div class="tab-pane fade" id="navs-ar">
                                       <div class="card-body">
                                      

                                                <div class="col-lg-12">
                                                   <div class="form-group">
                                                      <label class="form-control-label active">Açıklama: <span class="tx-danger">*</span></label>
                                                   <textarea name="ar[icerik]" id="icerik" class="ckeditor"><?=$sonucar['icerik'];?></textarea>
                                                   </div>
                                                </div>
                      

                                       </div>
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

