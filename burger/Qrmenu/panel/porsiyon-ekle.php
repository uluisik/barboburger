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

        if ($_POST) { 

            $baslik = $_POST['baslik'];
            $fiyat = $_POST['fiyat'];
            $kategori_sec = $_POST['kategori_sec'];

            if ($baslik <> "" && $fiyat <> "" && $kategori_sec <> "" ) 

              
                                $satir = [
                                    'baslik' => $baslik,
                                    'fiyat' => $fiyat,
                                    'kategori_sec' => $kategori_sec,
                                ];

                                $sql = "INSERT INTO porsiyon_secenekleri SET baslik=:baslik, fiyat=:fiyat, kategori_sec=:kategori_sec;";
                                $durum = $dbh->prepare($sql)->execute($satir);

                                if ($durum) {
                                    $sonId = $dbh->lastInsertId();
                                    foreach ($_POST["en"] as $key => $value) {
                                       dilguncelle("en","porsiyon_secenekleri",$sonId,$key,$value);
                                    }

                                    foreach ($_POST["ar"] as $key => $value) {
                                       dilguncelle("ar","porsiyon_secenekleri",$sonId,$key,$value);
                                    }

                                    foreach ($_POST["ru"] as $key => $value) {
                                       dilguncelle("ru","porsiyon_secenekleri",$sonId,$key,$value);
                                    }
                                    echo '<div class="col-md-6 col-lg-6"> 
                           <div class="card-body collapse show" id="collapse8">
                              <div class="error-notice"> 
                                 <div class="oaerror success">
                                    <strong>Eklendi..</strong> - Belirtilen Veri Başarı ile Eklendi
                                 </div>
                              </div>
                           </div> 
                     </div>';
                                    
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

                        <a class="breadcrumb-item" href="">Yeni Porsiyon Ekle</a>

                      

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
                              Yeni Porsiyon Ekle
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
                                        <option hidden selected value=""> Ürün Seçin </option>

                                       <?php
                                                    $alt = $dbh->query("select * from menu ", PDO::FETCH_ASSOC);
                                                    if ($alt->rowCount()) {
                                                        foreach ($alt as $alt) {
                                                            echo '<option value="' . $alt['id'] . '">' . $alt['urun_adi'] . '</option>';
                                                      
                                                    
                                                    echo '</optgroup>';
                                                }
                                            }
                                            
                                        ?>

                                    </select>
                                       </div>
                                    </div>    	
    
                                             <div class="col-lg-12">

                                       <div class="form-group">

                                          <label class="form-control-label active">Başlık: <span class="tx-danger">*</span></label>

                                          <input class="form-control" type="text" name="baslik">

                                       </div>

                                    </div>

                                        <div class="col-lg-12">

                                       <div class="form-group">

                                          <label class="form-control-label active">Porsiyon Ek Fiyatı: (ek fiyatını belirtin)<span class="tx-danger">*</span></label>

                                          <input class="form-control" type="text" name="fiyat">

                                       </div>

                                    </div>
                                    
                                     
                                    
                                           
                                                  
                                          </div>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade" id="navs-en">
                                       <div class="card-body">
                                         
                                       <div class="col-lg-12"> 
                                                   <div class="form-group">
                                                      <label class="form-control-label active">Başlık : <span class="tx-danger">*</span></label>
                                                      <input class="form-control" type="text"   name="en[baslik]">
                                                   </div>
                                                </div>

                                                 <div class="col-lg-12"> 
                                                   <div class="form-group">
                                                      <label class="form-control-label active">Fiyat : <span class="tx-danger">*</span></label>
                                                      <input class="form-control" type="text"   name="en[fiyat]">
                                                   </div>
                                                </div>  

                                       </div>
                                    </div>
                                 
                                    <div class="tab-pane fade" id="navs-ru">
                                       <div class="card-body">

                                       <div class="col-lg-12">
                                                   <div class="form-group">
                                                      <label class="form-control-label active">Başlık : <span class="tx-danger">*</span></label>
                                                      <input class="form-control" type="text" name="ru[baslik]">
                                                   </div>
                                                </div>

                                                <div class="col-lg-12">
                                                   <div class="form-group">
                                                      <label class="form-control-label active"> Fiyat  : <span class="tx-danger">*</span></label>
                                                      <input class="form-control" type="text" name="ru[fiyat]">
                                                   </div>
                                                </div>
                      

                                  
                                       </div>
                                    </div>

                                
                                    <div class="tab-pane fade" id="navs-ar">
                                       <div class="card-body">
                                       <div class="col-lg-12">
                                                   <div class="form-group">
                                                      <label class="form-control-label active">Başlık : <span class="tx-danger">*</span></label>
                                                      <input class="form-control" type="text"  name="ar[baslik]">
                                                   </div>
                                                </div>

                                                <div class="col-lg-12">
                                                   <div class="form-group">
                                                      <label class="form-control-label active">Fiyat : <span class="tx-danger">*</span></label>
                                                      <input class="form-control" type="text"  name="ar[fiyat]">
                                                   </div>
                                                </div>
 
                      

                                       </div>
                                    </div>

                                 </div>
                              </div>




                              <br>
                                                <div class="col-sm-6 col-md-3">
                                                <div class="btn-demo">
                                                   <button class="btn btn-oblong btn-outline-blue btn-block mg-b-10">Ekle</button>
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

                                    <strong>BİLGİLENDİRME..</strong> - Ürün Resimleri için Tavsiye ettiğimiz ebatlar <b>500x500</b> px.

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

