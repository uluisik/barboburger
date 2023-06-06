<?php $blok="urun-yonetim"; $sayfa="kategori-liste"; ?>

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
            <h1 class="pd-0 mg-0 tx-20">Kategori Listesi</h1>
         </div>
         <div class="breadcrumb pd-0 mg-0">
            <a class="breadcrumb-item" href="index.php"><i class="icon ion-ios-home-outline"></i> Anasayfa</a>
            <span class="breadcrumb-item active">Kategori Listesi</span>
         </div>
        </div>
        <div class="col-sm-6 col-md-6 float-right pd-t-15 pd-b-15">
            <a href="kategori-ekle.php" class="btn btn-primary float-right font-weight-bold">
            <i class="fa fa-plus mg-r-5" style="font-size: 11px;"></i> Yeni Kategori Oluştur
            </a>
        </div>
      </div>
      <!--/ Breadcrumb End -->
      <!--================================-->

                  

             <!-- ORTA ALAN BAŞLANGIÇ NOKTASI -->

<!-- Hoverable Table Start -->

                     <!--================================-->

                     <div class="col-md-12 col-lg-12">

                        <div class="card mg-b-20">

                           <div class="card-header">

                              <h4 class="card-header-title">

                               Kategori Listesi

                              </h4>

                              

                           </div>

                           <div class="card-body pd-0 collapse show" id="collapse3">

                              <table class="table table-hover table-responsive-sm">

                                 <thead>

                                    <tr>

                                       <th>#</th>

                                       <th>Kategori Adı</th>

                                       <th>İşlem</th>

                                    </tr>

                                 </thead>

                                 <tbody id="siralikategori">

                                  <?php



            $sorgu = $dbh->prepare("SELECT * FROM menu_kategori ORDER BY sira");

            $sorgu->execute();



            while ($sonuc = $sorgu->fetch()) {



                $id = $sonuc['id'];

                $baslik = $sonuc['baslik'];

                ?>

                                   <tr id="elemankategori-<?php echo $sonuc['id'] ?>" >

                                       <th scope="row"><?=$sonuc['id']?></th>

                                       <td><?=$sonuc['baslik']?></td>

                                       <td><a href="kategori-duzenle.php?id=<?=$sonuc['id']?>">İncele</a> | <a href="kategori-sil.php?id=<?=$sonuc['id']?>">Sil</a> </td>

                                    </tr>

                                   <?php } ?>

                                 </tbody>

                              </table>

                           </div>

                        </div>

                     </div>

                     <!--/ Hoverable Table End -->  

                     <!--================================-->





             <!-- BİTİŞ NOKTASI BURASIDIR . -->

                    





                    

               </div>

               <!--/ Main Wrapper End --> 

            <!--================================-->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/jquery-ui.min.js"></script> <!-- jquery kütüphanelerimizi ekliyoruz -->
<script src="js/jquery.ui.touch-punch.min.js"></script> <!-- Mobil cihazlar ve tabletlerde sürükle bıark özelliğini aktif ediyoruz-->
<script src="js/customkategori.js"></script> <!-- Ajax ve sıralama ile ilgili ayarları custom.js de yapıyoruz.-->
            <?php include 'inc/footer.php'; ?> 

