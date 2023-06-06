<?php $blok="urun-yonetim"; $sayfa="porsiyon-liste"; ?>

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

   $kategori_sec = $_POST['kategori_sec'];

   $baslik = $_POST['baslik'];

   $fiyat = $_POST['fiyat'];


  $update = $dbh->prepare("UPDATE porsiyon_secenekleri SET kategori_sec = '".$kategori_sec."',baslik = '".$baslik."', fiyat = '".$fiyat."' WHERE id = '".$id."'");

    $update->execute();

     foreach ($_POST["en"] as $key => $value) {
         dilguncelle("en","porsiyon_secenekleri",$id,$key,$value);
      }

      foreach ($_POST["ar"] as $key => $value) {
         dilguncelle("ar","porsiyon_secenekleri",$id,$key,$value);
      }

      foreach ($_POST["ru"] as $key => $value) {
         dilguncelle("ru","porsiyon_secenekleri",$id,$key,$value);
      }

            }

?>



<?php

$sorgu = $dbh->prepare("SELECT * FROM porsiyon_secenekleri Where id=:id");
$sorgu->execute(['id' => (int)$_GET["id"]]);
$sonuc = $sorgu->fetch();
$sonucen = cevir("porsiyon_secenekleri",$sonuc,"en"); 
$sonucru = cevir("porsiyon_secenekleri",$sonuc,"ru"); 
$sonucar = cevir("porsiyon_secenekleri",$sonuc,"ar"); 


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

                        <a class="breadcrumb-item" href="">Porsiyon Düzenle</a>

                      

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

                              Porsiyon Düzenleme Formu

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
                                          <label class="form-control-label active">Ürün Seçimi: <span class="tx-danger">*</span></label>
                                          <select class="form-control" name="kategori_sec">
                                        <option hidden   value=""> <?=$sonuc['kategori_sec'];?> </option>

                                        <?php
                                                    $alt = $dbh->query("select * from menu  ", PDO::FETCH_ASSOC);
                                                    if ($alt->rowCount()) {
                                                        foreach ($alt as $alt) {
                                                
                                                            echo '<option '.($alt['id']==$sonuc["kategori_sec"]?"selected":"").' value="' . $alt['id'] . '">' . $alt['urun_adi'] . '</option>';
                                                    
                                                    echo '</optgroup>';
                                                }
                                            }
                                            
                                        ?>

                                    </select>
                                       </div>
                                    </div>

                                         <div class="col-lg-6">

                                       <div class="form-group">

                                          <label class="form-control-label active">Başlık: <span class="tx-danger">*</span></label>

                                          <input class="form-control" type="text" value="<?=$sonuc['baslik'];?>" name="baslik">

                                       </div>

                                    </div>



                                    <div class="col-lg-6">

                                       <div class="form-group">

                                          <label class="form-control-label active">Fiyat : (ek fiyatını belirtin..)<span class="tx-danger">*</span></label>

                                          <input class="form-control" type="text" value="<?=$sonuc['fiyat'];?>" name="fiyat">

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
                                                            <label class="form-control-label active">Fiyat <span class="tx-danger">*</span></label>
                                                            <input class="form-control" type="text" value="<?=$sonucen['fiyat'];?>" name="en[fiyat]">
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
                                                            <label class="form-control-label active">Fiyat <span class="tx-danger">*</span></label>
                                                            <input class="form-control" type="text" value="<?=$sonucru['fiyat'];?>" name="ru[fiyat]">
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
                                                            <input class="form-control" type="text" value="<?=$sonucar['fiyat'];?>" name="ar[fiyat]">
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


                    

               </div>

               <!--/ Main Wrapper End -->

            </div>

            <!--/ Page Inner End -->

            <!--================================-->

              

            <?php include 'inc/footer.php'; ?> 

