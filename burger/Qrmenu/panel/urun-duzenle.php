<?php $blok="urun-yonetim"; $sayfa="urun-liste"; ?>

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

   $parent = $_POST['parent'];

   $urun_adi = $_POST['urun_adi'];

   $urun_fiyat = $_POST['urun_fiyat'];

   $aciklama = $_POST['aciklama'];

   $alerji = implode("|", $_POST['alerji']);

   $foto = $_POST['foto'];
   $ekstralar=implode("|",$_POST["eksecenek"]);

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

        

  $settings = $dbh->prepare("UPDATE menu SET foto = '".$foto_url."' WHERE id = '".$id."'");

    $settings->execute();

            }

            }

  $update = $dbh->prepare("UPDATE menu SET parent = '".$parent."',urun_adi = '".$urun_adi."', urun_fiyat = '".$urun_fiyat."', aciklama = '".$aciklama."', 
    alerji = '".$alerji."' , ekstralar='".$ekstralar."' WHERE id = '".$id."'");

    $update->execute();

     foreach ($_POST["en"] as $key => $value) {
         dilguncelle("en","menu",$id,$key,$value);
      }

      foreach ($_POST["ar"] as $key => $value) {
         dilguncelle("ar","menu",$id,$key,$value);
      }

      foreach ($_POST["ru"] as $key => $value) {
         dilguncelle("ru","menu",$id,$key,$value);
      }

            }

?>



<?php

$sorgu = $dbh->prepare("SELECT * FROM menu Where id=:id");
$sorgu->execute(['id' => (int)$_GET["id"]]);
$sonuc = $sorgu->fetch();
$alerji_bol = explode("|", $sonuc['alerji']);
$sonucen = cevir("menu",$sonuc,"en"); 
$sonucru = cevir("menu",$sonuc,"ru"); 
$sonucar = cevir("menu",$sonuc,"ar"); 


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

                        <a class="breadcrumb-item" href="">Ürün Düzenle</a>

                      

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
                                          <label class="form-control-label active">Kategori Seçimi: <span class="tx-danger">*</span></label>
                                          <select class="form-control" name="parent">
                                        <option hidden   value=""> <?=$sonuc['parent'];?> </option>

                                         <?php
                                            $kategoric = $dbh->query("select * from menu_kategori WHERE parent = ''  ", PDO::FETCH_ASSOC);
                                            if ($kategoric->rowCount()) {
                                                foreach ($kategoric as $kategori) {
                                                   
                                                    $optgroup="optgroup";
                                                    $alt = $dbh->query("select * from menu_kategori WHERE parent = '" . $kategori['id'] . "'   ", PDO::FETCH_ASSOC);
                                                   
                                                    
                                                    if ($alt->rowCount()) {
                                                      echo '<optgroup   label="' . $kategori['baslik'] . '" >';
                                                        foreach ($alt as $alt) {
                                                           echo '<option '.($alt['id']==$sonuc["parent"]?"selected":"").' value="' . $alt['id'] . '">' . $alt['baslik'] . '</option>';
                                                        }
                                                      echo '</optgroup>';
                                                    }else{
                                                      echo '<option '.($kategori['id']==$sonuc["parent"]?"selected":"").' value="' . $kategori['id'] . '">' . $kategori['baslik'] . '</option>';
                                                    }
                                                    
                                                
                                                }
                                            }
                                            ?>

                                    </select>
                                       </div>
                                    </div>

                                         <div class="col-lg-6">

                                       <div class="form-group">

                                          <label class="form-control-label active">Ürün Adı: <span class="tx-danger">*</span></label>

                                          <input class="form-control" type="text" value="<?=$sonuc['urun_adi'];?>" name="urun_adi">

                                       </div>

                                    </div>



                                    <div class="col-lg-6">

                                       <div class="form-group">

                                          <label class="form-control-label active">Ürün Fiyatı: (sadece tutarı yazın para birimi eklemeyin)<span class="tx-danger">*</span></label>

                                          <input class="form-control" type="text" value="<?=$sonuc['urun_fiyat'];?>" name="urun_fiyat">

                                       </div>

                                    </div>



                                      <?php 
                                                       
                                                          $oncekiekstralar = explode("|",$sonuc['ekstralar']);
                                                        $eksecenek = $dbh -> query("SELECT * FROM ek_secenek")->fetchAll();
                                                        foreach ($eksecenek as $row ) :
                                                      ?>
                                                      <div class="col-lg-2">
                                                         <div class="custom-control custom-checkbox">
                                                             <input type="checkbox" class="custom-control-input" name="eksecenek[]" 
                                                             <? if(in_array($row["id"], $oncekiekstralar)){ echo "checked"; } ?>    id="customCheck<?=($row['id']+100); ?>" value="<?= $row['id'];?>">
                                                             <label class="custom-control-label" for="customCheck<?=($row['id']+100); ?>"><?= $row['baslik'];?></label>
                                                          </div> 
                                                      </div>
                                                    <?php endforeach; ?>
                                                




                                    <div class="col-lg-12">

                                       <div class="form-group">

                                          <label class="form-control-label active">Ürün Açıklaması: <span class="tx-danger">*</span></label>

                                          <input class="form-control" type="text" value="<?=$sonuc['aciklama'];?>" name="aciklama">

                                       </div>

                                    </div>  

                                        <?php 
                                                     
                                                        $alerji = $dbh -> query("SELECT * FROM alerji")->fetchAll();
                                                        foreach ($alerji as $row ) :
                                                           
                                                      ?>
                                                      <div class="col-lg-2">
                                                         <div class="custom-control custom-checkbox">
                                                             <input type="checkbox" class="custom-control-input" <?php 
                                                              for ($i=-1; $i < count($alerji_bol) ; $i++) { 
                                                                if ($alerji_bol[$i] == $row['baslik']){echo 'checked';}
                                                              }

                                                             ?> name="alerji[]" id="customCheck<?= $row['id']; ?>" value="<?= $row['baslik'];?>">
                                                             <label class="custom-control-label" for="customCheck<?= $row['id']; ?>"><?= $row['baslik'];?></label>
                                                          </div> 
                                                      </div>
                                                    <?php endforeach; ?>

                                                      <div class="col-lg-12">
                                                         <div class="form-group">
                                                            <div class="card-body collapse show" id="collapse8">
                                                               <label class="form-control-label active">Kategori Görseli: <span class="tx-danger">*</span></label>
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
                                                            <input class="form-control" type="text" value="<?=$sonucen['urun_adi'];?>" name="en[urun_adi]">
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
                                                            <input class="form-control" type="text" value="<?=$sonucru['urun_adi'];?>" name="ru[urun_adi]">
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
                                                            <input class="form-control" type="text" value="<?=$sonucar['urun_adi'];?>" name="ar[urun_adi]">
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


                    

               </div>

               <!--/ Main Wrapper End -->

            </div>

            <!--/ Page Inner End -->

            <!--================================-->

              

            <?php include 'inc/footer.php'; ?> 

