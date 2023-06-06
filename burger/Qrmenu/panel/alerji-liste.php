<?php $blok="alerji-yonetim"; $sayfa="alerji-liste"; ?>

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
            <h1 class="pd-0 mg-0 tx-20">Alerjen Listesi</h1>
         </div>
         <div class="breadcrumb pd-0 mg-0">
            <a class="breadcrumb-item" href="index.php"><i class="icon ion-ios-home-outline"></i> Anasayfa</a>
            <span class="breadcrumb-item active">Alerjen Listesi</span>
         </div>
        </div>
        <div class="col-sm-6 col-md-6 float-right pd-t-15 pd-b-15">
            <a href="alerji-ekle.php" class="btn btn-primary float-right font-weight-bold">
            <i class="fa fa-plus mg-r-5" style="font-size: 11px;"></i> Yeni Alerji Oluştur
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

                               Alerji Listesi

                              </h4>

                              

                           </div>

                           <div class="card-body pd-0 collapse show" id="collapse3">

                              <table class="table table-hover table-responsive-sm">

                                 <thead>

                                    <tr>

                                       <th>#</th> 

                                       <th>Alerji Adı</th> 

                                       <th>İşlem</th>

                                    </tr>

                                 </thead> 

                                  <?php



            $sorgu = $dbh->prepare("SELECT * FROM alerji ");

            $sorgu->execute();



            while ($sonuc = $sorgu->fetch()) {



                $id = $sonuc['id'];

                $baslik = $sonuc['baslik']; 

                
                ?>

                                    <tr>

                                       <th scope="row"><?=$sonuc['id']?></th> 

                                       <td><?php echo $baslik ?></td> 

                                       <td><a href="alerji-duzenle.php?id=<?=$sonuc['id']?>">İncele</a> | <a href="alerji-sil.php?id=<?=$sonuc['id']?>">Sil</a> </td>

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

                    


 <!-- Bigger Alerts Start -->

                     <!--================================-->              

                     <div class="col-md-12 col-lg-12">

                         

                           <div class="card-body collapse show" id="collapse6">

                              

                              <div class="alert alert-info alert-bordered pd-y-15" role="alert">

                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                                 <span aria-hidden="true"><i class="ico icon-close"></i></span>

                                 </button>

                                 <div class="d-sm-flex align-items-center justify-content-start">

                                    <i class="icon ion-ios-information alert-icon tx-52 mg-r-20"></i>

                                    <div class="mg-t-20 mg-sm-t-0">

                                       <h5 class="mg-b-2">Bilgilendirme Alanı</h5>

                                       <p class="mg-b-0 tx-gray">Sayın kullanıcımız, ürün adını ve ürün fiyatını satır içinde tıklayarak anlık olarak ürün adı ve fiyatını güncelleyebilirsiniz.</p>

                                    </div>

                                 </div>

                              </div>

                              

                              

                            

                        </div>

                     </div>

                     <!-- / Bigger Alerts End -->

                     <!--================================-->


                    

               </div>

               <!--/ Main Wrapper End --> 

            <!--================================--> 

            <?php include 'inc/footer.php'; ?> 

