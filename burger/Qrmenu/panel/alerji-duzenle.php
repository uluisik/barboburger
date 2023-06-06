 <?php $blok="alerji-yonetim"; $sayfa="alerji-liste"; ?>

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

   $id = $_GET["id"]; 

   $baslik = $_POST['baslik'];

   $aciklama = $_POST['aciklama'];

   $foto = $_POST['foto']; 


 if ($_FILES['foto']['tmp_name'] != "") {

   $boyut = $_FILES['foto']['size'];

 if ($boyut > (1024 * 1024 * 30)) {

      echo 'Dosya 30MB den büyük olamaz.';

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

        

  $settings = $dbh->prepare("UPDATE alerji SET foto = '".$foto_url."' WHERE id = '".$id."'");

    $settings->execute();

            }

            }

  $update = $dbh->prepare("UPDATE alerji SET baslik = '".$baslik."',aciklama = '".$aciklama."' WHERE id = '".$id."'");

    $update->execute();

    foreach ($_POST["en"] as $key => $value) {
         dilguncelle("en","alerji",$id,$key,$value);
      }

      foreach ($_POST["ar"] as $key => $value) {
         dilguncelle("ar","alerji",$id,$key,$value);
      }

      foreach ($_POST["ru"] as $key => $value) {
         dilguncelle("ru","alerji",$id,$key,$value);
      }

            }

?>



<?php

$sorgu = $dbh->prepare("SELECT * FROM alerji Where id=:id");
$sorgu->execute(['id' => (int)$_GET["id"]]);
$sonuc = $sorgu->fetch();
$sonucen = cevir("alerji",$sonuc,"en"); 
$sonucru = cevir("alerji",$sonuc,"ru"); 
$sonucar = cevir("alerji",$sonuc,"ar"); 


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

                        <a class="breadcrumb-item" href="">Menü Kategori Düzenle</a>

                      

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

                              Menü Kategori Düzenleme Formu

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
                                                            <label class="form-control-label active">Başlık <span class="tx-danger">*</span></label>
                                                            <input class="form-control" type="text" value="<?=$sonuc['baslik'];?>" name="baslik">
                                                         </div>
                                                      </div>  

                                                      <div class="col-lg-12">
                                                         <div class="form-group">
                                                            <label class="form-control-label active">Açıklama <span class="tx-danger">*</span></label>
                                                            <input class="form-control" type="text" value="<?=$sonuc['aciklama'];?>" name="aciklama">
                                                         </div>
                                                      </div>  

                                                      <div class="col-lg-12">
                                                         <div class="form-group">
                                                            <div class="card-body collapse show" id="collapse8">
                                                               <label class="form-control-label active">Alerji Görseli: <span class="tx-danger">*</span></label>
                                                               <input type="file" class="dropify" name="foto" data-show-remove="false" />
                                                                  <center> <img src="../img/<?=$sonuc['foto'];?>" height=150px></center>
                                                               </div>
                                                               
                                                         </div>
                                                      </div>

 
                                          </div>
                                       </div>
                                    </div>
                                
                                    <div class="tab-pane fade " id="navs-en">
                                       <div class="card-body">
                                           <div class="row">
                               
                                                <div class="col-lg-12">
                                                         <div class="form-group">
                                                            <label class="form-control-label active">Başlık <span class="tx-danger">*</span></label>
                                                            <input class="form-control" type="text" value="<?=$sonucen['baslik'];?>" name="en[baslik]">
                                                         </div>
                                                </div>  

                                                <div class="col-lg-12">
                                                         <div class="form-group">
                                                            <label class="form-control-label active">Açıklama <span class="tx-danger">*</span></label>
                                                            <input class="form-control" type="text" value="<?=$sonucen['aciklama'];?>" name="en[aciklama]">
                                                         </div>
                                                      </div>  

  

 
                                          </div>
                                       </div>
                                    </div>

                                    <div class="tab-pane fade" id="navs-ru">
                                       <div class="card-body">
                                           <div class="row">
                               
                                                <div class="col-lg-12">
                                                         <div class="form-group">
                                                            <label class="form-control-label active">Başlık <span class="tx-danger">*</span></label>
                                                            <input class="form-control" type="text" value="<?=$sonucru['baslik'];?>" name="ru[baslik]">
                                                         </div>
                                                </div>  

                                                  <div class="col-lg-12">
                                                         <div class="form-group">
                                                            <label class="form-control-label active">Açıklama <span class="tx-danger">*</span></label>
                                                            <input class="form-control" type="text" value="<?=$sonucru['aciklama'];?>" name="ru[aciklama]">
                                                         </div>
                                                </div>  

  

 
                                          </div>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade" id="navs-ar">
                                       <div class="card-body"> 
                                           <div class="row">
                               
                                                <div class="col-lg-12">
                                                         <div class="form-group">
                                                            <label class="form-control-label active">Başlık <span class="tx-danger">*</span></label>
                                                            <input class="form-control" type="text" value="<?=$sonucar['baslik'];?>" name="ar[baslik]">
                                                         </div>
                                                </div>  

  												 <div class="col-lg-12">
                                                         <div class="form-group">
                                                            <label class="form-control-label active">Açıklama <span class="tx-danger">*</span></label>
                                                            <input class="form-control" type="text" value="<?=$sonucar['aciklama'];?>" name="ar[aciklama]">
                                                         </div>
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
                    
              <div class="col-md-12 col-lg-12"> 

                           <div class="card-body collapse show" id="collapse8">

                              <div class="error-notice"> 

                                 <div class="oaerror success">

                                    <strong>BİLGİLENDİRME..</strong> - Logonun Kalitesi İçin Önerilen Boyutlar: <b>700x466</b> px'dir.

                                 </div>

                              </div>

                           </div> 

                     </div>


             <!-- BİTİŞ NOKTASI BURASIDIR . -->

                    





                    

               </div>

               <!--/ Main Wrapper End -->

            </div>

            <!--/ Page Inner End -->

            <!--================================-->

            

            <?php include 'inc/footer.php'; ?> 

