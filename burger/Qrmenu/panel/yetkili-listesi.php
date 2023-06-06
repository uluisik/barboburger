<?php $blok="yetkili-yonetim"; $sayfa="yetkili-liste"; ?>
<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<?php include 'inc/navbar.php'; ?>

<style>
.zara-yatay {
float:left;
            }
</style>
            <!-- Page Inner Start -->
            <!--================================-->
            <div class="page-inner">
            <!-- Main Wrapper -->
               <div id="main-wrapper">
            <!--================================-->
            <!-- Breadcrumb Start -->
            <!--================================-->

      <div class="pageheader pd-t-25 pd-b-35" style="min-height:100px;">
        <div class="col-sm-6 col-md-6 float-left">
         <div class="pd-t-5 pd-b-5">
            <h1 class="pd-0 mg-0 tx-20">Yönetici Listesi</h1>
         </div>
         <div class="breadcrumb pd-0 mg-0">
            <a class="breadcrumb-item" href="index.php"><i class="icon ion-ios-home-outline"></i> Anasayfa</a>
            <span class="breadcrumb-item active">Yönetici Listesi</span>
         </div>
        </div>
        <div class="col-sm-6 col-md-6 float-right pd-t-15 pd-b-15">
            <a href="yetkili-ekle.php" class="btn btn-primary float-right font-weight-bold">
            <i class="fa fa-plus mg-r-5" style="font-size: 11px;"></i> Yeni Yönetici Oluştur
            </a>
        </div>
      </div>
      <!--/ Breadcrumb End -->
      <!--================================-->

                  

             <!-- ORTA ALAN BAŞLANGIÇ NOKTASI -->





<div class="col-md-12 col-xl-12">

   <div class="card mg-b-20">

      <div class="card-header">

         <h4 class="card-header-title">

            Yönetici Listesi

         </h4>

         <div class="card-header-btn">

            <a href="#" data-toggle="refresh" class="btn card-refresh"><i class="ion-android-refresh"></i></a>

            <a href="#" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>

         </div>

      </div>

      <div class="card-body pd-0 pd-b-25 collapse show" id="customarDetails">

         <div class="table-responsive">

            <table class="table table-hover mg-0">

               <thead class="tx-dark tx-uppercase tx-10 tx-bold">

                  <tr>

                     <th>#</th>

                     <th>Kullanıcı Adı</th>

                     <th>İsim</th> 

                     <th>Soyisim</th>

                     <th>İşlemler</th>

                  </tr>

               </thead>

               <tbody>



                 <?php



            $sorgu = $dbh->prepare("SELECT * FROM yetkili");

            $sorgu->execute();



            while ($sonuc = $sorgu->fetch()) {



                $id = $sonuc['id'];

                $isim = $sonuc['isim'];

                $soyisim = $sonuc['soyisim'];

                $kullanici = $sonuc['kullanici'];



                ?>

                                    <tr>

                                       <td class="d-flex align-items-center">

                                          <div class="d-block">

                                             <a href="" class="my-0 mt-1 tx-13"><?=$sonuc['id'];?> </a>

                                          </div>

                                       </td>

                                        <td>

                                          <a href="" class="my-0 mt-1 tx-13"><?=$sonuc['kullanici'];?></a> 

                                       </td>

                                       <td>

                                          <a href="" class="my-0 mt-1 tx-13"><?=$sonuc['isim'];?></a> 

                                       </td>  

                                       <td>

                                          <a href="" class="my-0 mt-1 tx-13"><?=$sonuc['soyisim'];?></a> 

                                       </td>  

                                       <td>

                                          <a href="yetkili-duzenle.php?id=<?=$sonuc['id'];?>" class="btn btn-sm btn-label-primary">Düzenle</a> | <a href="yetkili-sil.php?id=<?=$sonuc['id'];?>" class="btn btn-sm btn-label-primary">Sil</a>

                                       </td>

                                    </tr>

                                    <?php } ?>







                  

                  

               </tbody>

            </table>

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

