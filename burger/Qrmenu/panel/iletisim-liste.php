<?php $blok="iletisim";?>

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
                  <div class="pageheader pd-t-25 pd-b-35">
                     <div class="pd-t-5 pd-b-5">
                        <h1 class="pd-0 mg-0 tx-20">Özel Yönetim Sistemleri</h1>
                     </div>
                     <div class="breadcrumb pd-0 mg-0">
                        <a class="breadcrumb-item" href="index.php"> Anasayfa</a>
                        <a class="breadcrumb-item" href="">Gelen İletişim Talepleri</a>
                      
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

                               Gelen İletişim Talepleri

                              </h4>

                              

                           </div>

                           <div class="card-body pd-0 collapse show" id="collapse3">

                              <table class="table table-hover table-responsive-sm">

                                 <thead>

                                    <tr>

                                       <th>#</th>  
                                       <th>İsim Soyisim</th>
                                       <th>Mail Adresi</th>
                                       <th>Telefon <th>
                                       <th>İşlem</th>

                                    </tr>

                                 </thead>

                                 <tbody>

                                  <?php



            $sorgu = $dbh->prepare("SELECT * FROM iletisim");

            $sorgu->execute();



            while ($sonuc = $sorgu->fetch()) {



                $id = $sonuc['id']; 
                $isim_soyisim = $sonuc['isim_soyisim'];
                $mail = $sonuc['mail'];
                $telefon = $sonuc['telefon']; 
                $icerik = $sonuc['icerik'];
                ?>

                                    <tr>

                                       <th scope="row"><?=$sonuc['id']?></th> 
                                       <td><?=$sonuc['isim_soyisim']?></td>
                                       <td><?=$sonuc['mail'];?></td>
                                       <td><?=$sonuc['telefon'];?></td>
                                       <td>
                                          <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m_modal_<?=$sonuc['id'];?>"> Detay</button> <a href="iletisim-sil.php?id=<?=$sonuc['id'];?>" class="btn btn-primary"> Sil</a> </td>  
                                       </td>
                                       
                                    </tr>

                                     <div class="modal" id="m_modal_<?=$sonuc['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel_1" style="display: none;" aria-hidden="true">
                                 <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel_1">İletişim Detayı</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true"><i class="ion-ios-close-empty"></i></span>
                                          </button>
                                       </div>
                                       <div class="modal-body"> 
                                          <p><b>İçerik: </b><br><br><?=$sonuc['icerik'];?></p>
                                       </div>
                                       <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button> 
                                       </div>
                                    </div>
                                 </div>
                              </div>

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

            <?php include 'inc/footer.php'; ?> 

