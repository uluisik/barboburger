<?php $blok="urun-yonetim"; $sayfa="eksecenek-liste"; ?>

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
            <h1 class="pd-0 mg-0 tx-20">Ek Seçenek Listesi</h1>
         </div>
         <div class="breadcrumb pd-0 mg-0">
            <a class="breadcrumb-item" href="index.php"><i class="icon ion-ios-home-outline"></i> Anasayfa</a>
            <span class="breadcrumb-item active">Ek Seçenek Listesi</span>
         </div>
        </div>
        <div class="col-sm-6 col-md-6 float-right pd-t-15 pd-b-15">
            <a href="eksecenek-ekle.php" class="btn btn-primary float-right font-weight-bold">
            <i class="fa fa-plus mg-r-5" style="font-size: 11px;"></i> Yeni Ek Seçenek Oluştur
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

                               Ek Seçenek Listesi

                              </h4>

                              

                           </div>

                           <div class="card-body pd-0 collapse show" id="collapse3">

                              <table class="table table-hover table-responsive-sm">

                                 <thead>

                                    <tr>

                                       <th>#</th>

                                       <th>Ek Seçenek Adı</th>

                                       <th>İşlem</th> 

                                    </tr>

                                 </thead>

                                 <tbody>
                                    
                                  <?php



            $sorgu = $dbh->prepare("SELECT * FROM ek_secenek");

            $sorgu->execute();



            while ($sonuc = $sorgu->fetch()) {



                $id = $sonuc['id'];

                $baslik = $sonuc['baslik']; 

                ?>

                                    <tr>

                                       <th scope="row"><?=$sonuc['id']?></th> 

                                         <td contenteditable="true" onBlur="veriKaydet(this,'baslik','<?php echo $id ?>')"
                        onClick="duzenle(this);"><?php echo $baslik ?></td> 

                                       <td><a href="eksecenek-duzenle.php?id=<?=$sonuc['id']?>">Düzenle</a> | <a href="eksecenek-sil.php?id=<?=$sonuc['id']?>">Sil</a> </td>

                                       <td>
					                   
					                </td>

                          
                                    </tr>

                                   <?php } ?>

                                 </tbody>

                              </table>

                              <span id="sonuc"></span>

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

                                       <p class="mg-b-0 tx-gray">Sayın kullanıcımız, ürünün adını ve fiyatını satır içine tıklayarak anlık olarak güncelleyebilirsiniz. Ürün fiyatına para birimi yazmanıza gerek yoktur. Aynı zamanda geçici veya süreli olarak ürünlerinizi göstermek istemezseniz swicht butonunu pasif konuma getiriniz.</p>

                                    </div>

                                 </div>

                              </div>

                              

                              

                            

                        </div>

                     </div>

                     <!-- / Bigger Alerts End -->

                     <!--================================-->


                    

               </div>

               <!--/ Main Wrapper End --> 

<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script>
    function duzenle(deger) {
        $(deger).css("background", "#ffff00");
        //seçilen hücrenin rengini değiştiriyoruz
    }

    function veriKaydet(deger, alan, id) {
        $(deger).css("background", "#FFF url(yukleniyor.gif) no-repeat right");
        //

        $.ajax({
            url: "secenekKaydet.php", //verileri göndereceğimiz url
            type: "POST", //post ile gönderilecek
            data: 'alan=' + alan + '&deger=' + deger.innerHTML.split('+').join('{0}')+ '&id=' + id, 
            // verileri alan deger ve id olarak yolluyoruz
      //+ (artı) post edilirken boşluk ile değişiyor 
      //bunu engellemek için + değeri {0} ile değiştirdim 
      //kayıt yaparkende index.php de geri değişimini yapıyoruz 
            success: function (data) {
                if (data == true) {
                    $(deger).css("background", "#fff");
                    // eğer veriler veri tabanına yazılmış ise hücrenin
                    //arka plan rengini beyaza geri döndürüyoruz
                }

                else {
                    $(deger).css("background", "#f00");
                    $("#sonuc").text("Hata veri düzenlenmedi");

                    //Eğer hata varsa hücre rengini kırmızı ve
                    // tablo altında hata mesajı yazdırıyoruz
                }
            }
        });
    }
</script>
            <!--================================--> 
            <?php include 'inc/footer.php'; ?> 

