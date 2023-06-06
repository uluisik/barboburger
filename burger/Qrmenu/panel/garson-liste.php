<?php $blok="garson";?>

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
                        <a class="breadcrumb-item" href="">Garson Çağırma Talepleri</a>
                      
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

                               Garson Çağırma Talepleri

                              </h4>

                              

                           </div>

                           <div class="card-body pd-0 collapse show" id="collapse3">

                              <table class="table table-hover table-responsive-sm">

                                 <thead>

                                    <tr>

                                       <th>#</th>  
                                       <th>İsim Soyisim</th> 
                                       <th>Masa No</th>
                                       <th>Doğrulama No</th> 

                                    </tr>

                                 </thead>

                                 <tbody>

                                  <?php



            $sorgu = $dbh->prepare("SELECT * FROM garson_cagir");

            $sorgu->execute();



            while ($sonuc = $sorgu->fetch()) {



                $id = $sonuc['id']; 
                $isim_soyisim = $sonuc['isim_soyisim'];
                $telefon = $sonuc['telefon'];  
                $masa_adi = $sonuc['masa_adi']; 

                 $check = $dbh->query("SELECT * FROM masa_no WHERE id = '".$masa_adi."' ", PDO::FETCH_ASSOC);
                        if ($check->rowCount()) {
                          foreach ($check as $check) {
                            }

                            $kategori = $check["masa_adi"];
                        }

               
                ?>

                                    <tr>

                                       <th scope="row"><?=$sonuc['id']?></th> 
                                       <td><?=$sonuc['isim_soyisim']?></td>
                                       <td><?=$kategori?></td>
                                       <td><?=$sonuc['telefon'];?></td>
                                       <td>
                                          <td><a href="garson-sil.php?id=<?=$sonuc['id'];?>" class="btn btn-primary"> Sil</a> </td>  
                                       </td>
                                       
                                    </tr>

                            <div class="modal" id="m_modal_<?=$sonuc['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel_1" style="display: none;" aria-hidden="true">   
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

