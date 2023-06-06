<?php $blok="anasayfa";?>
<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include 'inc/navbar.php';?>


<style>
  .zara-yatay {
    float:left;
  }
  @media print {
    body * {
      visibility: hidden;
    }
    .section-to-print, .section-to-print * {
      visibility: visible;
    }
    .section-to-print {
      position: absolute;
      left: 0;
      top: 0;
    }
  }


</style>

<script type="text/javascript">
  window.onload = function(e){ 
   $(function(){
    $(".yazdir").click(function(){
     window.print();
   })
  })
 }


</script>
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
    <h1 class="pd-0 mg-0 tx-20">Web Site Yönetim Paneli </h1>
  </div>
  <div class="breadcrumb pd-0 mg-0">
    <a class="breadcrumb-item" href="index.php"> Anasayfa </a>
    <a class="breadcrumb-item" href="index.php"> Anasayfa </a>
  </div>
</div>
<!--/ Breadcrumb End -->
<!--================================-->
<!-- Count Card Start -->
<!--================================-->


<!--================================-->

<!--  Monthly Report Start-->

<!--================================-->

<!-- ORTA ALAN BAŞLANGIÇ NOKTASI -->

<!-- Hoverable Table Start -->

<!--================================-->
<div class="row row-xs">


  <div class="col-sm-6 col-xl-3">

   <div class="card mg-b-20">

    <div class="card-body">

     <div class="row">

      <div class="col-12">

       <div class="float-right">

        <i class="tx-30 tx-brown icon-clock "></i>

      </div>

      <h3 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark"><span class="counter">
       <?php 
       $bekleyen_siparis = $dbh->prepare("SELECT siparis_id FROM siparisler WHERE durum  = ?");
       $bekleyen_siparis->execute([0]);
       echo $bekleyen_siparis->rowCount();
       ?>

     </span></h3>

     <p class="tx-uppercase tx-10 mg-b-10">YENİ SİPARİŞ</p>

   </div>



 </div>

</div>

</div>

</div>

<div class="col-sm-6 col-xl-3">

 <div class="card mg-b-20">

  <div class="card-body">

   <div class="row">

    <div class="col-12">

     <div class="float-right">

      <i class="tx-30 tx-warning icon-shuffle"></i>

    </div>

    <h3 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark"><span class="counter">

      <?php 
      $bekleyen_siparis = $dbh->prepare("SELECT siparis_id FROM siparisler WHERE durum  = ?");
      $bekleyen_siparis->execute([1]);
      echo $bekleyen_siparis->rowCount();
      ?>

    </span></h3>

    <p class="tx-uppercase tx-10 mg-b-10">HAZIRLANAN SİPARİŞ</p>

  </div>



</div>

</div>

</div>

</div>

<div class="col-sm-6 col-xl-3">

 <div class="card mg-b-20">

  <div class="card-body">

   <div class="row">

    <div class="col-12">

     <div class="float-right">

      <i class="tx-30 tx-success icon-check"></i>

    </div>

    <h3 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark"><span class="counter">

      <?php 
      $bekleyen_siparis = $dbh->prepare("SELECT siparis_id FROM siparisler WHERE durum  = ?");
      $bekleyen_siparis->execute([2]);
      echo $bekleyen_siparis->rowCount();
      ?>
    </span></h3>

    <p class="tx-uppercase tx-10 mg-b-10">TAMAMLANAN SİPARİŞ</p>

  </div>



</div>

</div>

</div>

</div>

<div class="col-sm-6 col-xl-3">

 <div class="card mg-b-20">

  <div class="card-body">

   <div class="row">

    <div class="col-12">

     <div class="float-right">

      <i class="tx-30 tx-danger  icon-close"></i>

    </div>

    <h3 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark"><span class="counter">

      <?php 
      $bekleyen_siparis = $dbh->prepare("SELECT siparis_id FROM siparisler WHERE durum  = ?");
      $bekleyen_siparis->execute([3]);
      echo $bekleyen_siparis->rowCount();
      ?>
    </span></h3>

    <p class="tx-uppercase tx-10 mg-b-10">İPTAL EDİLEN SİPARİŞ</p>

  </div>



</div>

</div>

</div>

</div>



</div>




<!--- genel talepler -->



<!-- ORTA ALAN BAŞLANGIÇ NOKTASI -->

<!-- Hoverable Table Start -->
<?php

$iletisim = $dbh->query("SELECT * FROM iletisim WHERE id ", PDO::FETCH_ASSOC);
$hesap = $dbh->query("SELECT * FROM hesap_iste WHERE id ", PDO::FETCH_ASSOC);
$garson = $dbh->query("SELECT * FROM garson_cagir WHERE id ", PDO::FETCH_ASSOC);
$siparis = $dbh->query("SELECT * FROM siparisler WHERE siparis_id ", PDO::FETCH_ASSOC);


?> 
<!--================================-->
<div class="row row-xs">


  <div class="col-sm-6 col-xl-3">

   <div class="card mg-b-20">

    <div class="card-body">

     <div class="row">

      <div class="col-12">

       <div class="float-right">

        <i class="tx-30 tx-brown "></i>

      </div>

      <h3 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark"><span class="counter">
       <?=$iletisim->rowCount()?>  

     </span></h3>

     <p class="tx-uppercase tx-10 mg-b-10">İLETİŞİM MESAJI</p>

   </div>



 </div>

</div>

</div>

</div>

<div class="col-sm-6 col-xl-3">

 <div class="card mg-b-20">

  <div class="card-body">

   <div class="row">

    <div class="col-12">

     <div class="float-right">

      <i class="tx-30 tx-warning  "></i>

    </div>

    <h3 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark"><span class="counter">
      <?=$hesap->rowCount()?> 

    </span></h3>

    <p class="tx-uppercase tx-10 mg-b-10">HESAP TALEBİ</p>

  </div>



</div>

</div>

</div>

</div>

<div class="col-sm-6 col-xl-3">

 <div class="card mg-b-20">

  <div class="card-body">

   <div class="row">

    <div class="col-12">

     <div class="float-right">

      <i class="tx-30 tx-success "></i>

    </div>

    <h3 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark"><span class="counter">
      <?=$garson->rowCount()?> 			
    </span></h3>

    <p class="tx-uppercase tx-10 mg-b-10">GARSON TALEBİ</p>

  </div>



</div>

</div>

</div>

</div>

<div class="col-sm-6 col-xl-3">

 <div class="card mg-b-20">

  <div class="card-body">

   <div class="row">

    <div class="col-12">

     <div class="float-right">

      <i class="tx-30 tx-danger "></i>

    </div>

    <h3 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark"><span class="counter">
      <?=$siparis->rowCount()?> 
    </span></h3>

    <p class="tx-uppercase tx-10 mg-b-10">TOPLAM SİPARİŞ</p>

  </div>



</div>

</div>

</div>

</div>



</div>


<div class="col-md-12 col-lg-12">

  <div class="card mg-b-20">

   <div class="card-header">

    <h4 class="card-header-title">

     Son 5 Sipariş Listesi

   </h4>



 </div>

 <div class="card-body pd-0 collapse show" id="collapse3">

  <table class="table table-hover table-responsive-sm">

   <thead>

    <tr>
      <th>#</th>
      <th>Adı Soyadı</th>
      <th>Telefon </th>
      <th>Masa/Paket </th>
      <th>Ödeme Tipi</th>
      <th>Ödeme Durumu</th>

      <th>Sip. Durumu </th>
      <th>İşlem</th>

    </tr>

  </thead>

  <tbody>

   <?php

   $siparisler = $dbh->query("SELECT * FROM siparisler ORDER BY siparis_id DESC limit 5")->fetchAll(PDO::FETCH_OBJ);
    foreach ($siparisler as $siparis) :


                $id = $siparis->siparis_id;
                $sipno =  $siparis->siparis_id;
                $name_surname = $siparis->adi_soyadi;
                $email = $siparis->mail;
                $phone = $siparis->telefon;
                
                $status = $sonuc['status'];
                $payment = $sonuc['payment'];
                $phpdate = strtotime( $siparis->tarih );
                $mysqldate = date( 'd', $phpdate );
                $mysqldatex = date( 'm', $phpdate );
                $mysqldatexx = date( 'Y', $phpdate );
                $mysqldatexxx = date( 'H:i', $phpdate );


                $id_parcala = explode("|", $siparis->urun_id);
                $adet_parcala = explode("|", $siparis->urun_adet);
                $porsiyon_parcala = explode("|", $siparis->porsiyon_id);
                $ekstralar_parcala=explode("|",$siparis->ekstralar);

                $aciklama_parcala = explode("|", $siparis->aciklamalar);

                $masa_getir = $dbh->prepare("SELECT id,masa_adi FROM masa_no WHERE id = ?");
                $masa_getir->execute([$siparis->masa]);
                $masa = $masa_getir->fetch(PDO::FETCH_OBJ);


                                      /*
                                      $ekstraistek=0;
                                      if($siparis->porsiyon_id>0){
                                          $porsyon = $dbh -> prepare("SELECT * FROM porsiyon_secenekleri WHERE id = ?");
                                          $porsyon-> execute(array($siparis->porsiyon_id));
                                          $porsyon = $porsyon->fetch(PDO::FETCH_ASSOC);
                                          $pfiyat = $porsyon["fiyat"];
                                          $ekstraistek+= $pfiyat;
                                       }  

                                      */

                                      ////
                                      //$siparisdetayekstra=implode("|", $siparisdetay["ekstra"]);
                                      ////




                                       ?>


                                       <tr <?php if ($siparis->masa == 0 ){
                                        echo "style='background-color:#d5f0ff'";

                                       }else {
                                        echo "style='background-color:#ffc10717'";
                                       }


                                       ?>>
                                       <th scope="row"><?= $siparis->siparis_id; ?></th>
                                       <td><?= $siparis->adi_soyadi;?></td>
                                       <td><?= $siparis->telefon;?></td>
                                       <!--   <td><?= $masa->masa_adi; ?> </td> -->
                                       <td><?php if ($siparis->masa == 0 ){
                                        echo "Paket Siparişi";

                                       }else {
                                        echo $masa->masa_adi;
                                       }


                                       ?></td>
                                       <!-- Ödeme Tipi -->
                                       <td>
                                        <?php 
                                        if ($siparis->payment==0) {
                                          echo '<button type="button" class=" btn btn-outline-success btn-block mg-b-10" disabled>Masada Ödeme</button>';
                                        }elseif ($siparis->payment==1){
                                          echo '<button type="button" class="btn btn-outline-primary btn-block mg-b-10 " disabled>Kasada Ödeme</button>';
                                        }elseif ($siparis->payment==2){
                                          echo '<button type="button" class="btn btn-outline-success btn-block mg-b-10 " disabled>Kapıda Kredi</button>';
                                        }elseif ($siparis->payment==3){
                                          echo '<button type="button" class="btn btn-outline-primary btn-block mg-b-10" disabled>Kapıda Nakit </button>';
                                        }else {
                                          echo '<button type="button" class="btn btn-outline-dark btn-block mg-b-10" disabled>Online Ödeme</button>';
                                        }
                                        ?>
                                       </td>
                                       <!-- Ödeme Tipi -->
                                       <!-- Ödeme Durumu -->
                                       <?php $odurum=$siparis->odeme_durum; ?>

                                       <td><?php if ($odurum==1) {echo "<a href='' data-toggle='modal' data-target='#m_modal_29".$id."' class='btn btn-success btn-block mg-b-10'>Ödendi</button></a>";}else{echo"<a href=''  data-toggle='modal' data-target='#m_modal_19".$id."'><button class='btn btn-danger btn-block mg-b-10'>Ödenmedi</button></a>";} ?></td>

                                       <!-- Ödeme Durumu -->


                                       <td>
                                        <?php if($siparis->durum == 0){
                                          echo '<font color="#aca500"><b> Beklemede </b></font>';
                                        }else if ($siparis->durum == 1) {
                                          echo '<font color="#575757"><b> Yapılıyor </b></font>';
                                        }else if ($siparis->durum == 2) {
                                          echo '<font color="#00e021"><b> Tamamlandı </b></font>';
                                        }else if ($siparis->durum == 3) {
                                          echo '<font color="#e50000"><b> İptal Edildi </b></font>';
                                        }
                                        ?>
                                       </td>
                                       <!-- İşlem -->
                                       <td>
                                        <?php 
                                        $id=$siparis->siparis_id;
                                        $sipno=$siparis->siparis_id;
                                        ?>
                                        <a href="#" class="btn btn-outline-primary btn-icon mg-r-5" data-toggle="modal" data-target="#m_modal_<?=$id;?>"  data-toggle="tooltip" data-trigger="hover" data-placement="left" title="" data-original-title="<?php echo $dil["detay_goruntule"];?>"><div><i class="fa fa-eye"></i></div></a>
                                        <a href="siparis-sil.php?id=<?=$id;?>" class="btn btn-outline-danger btn-icon mg-r-5" data-toggle="tooltip" data-trigger="hover" data-placement="right" title="" data-original-title="<?php echo $dil["siparis_sil"];?>"><div><i class="fa fa-minus-circle"></i></div></a>
                                       </td>

                                     <!--   <td>
                                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#m_modal_<?=$siparis->siparis_id?>"> Detay</button> 
                                        <a href="#" class="btn btn-danger"> Sil</a>
                                        <a href="siparis-islemleri.php?id=<?= $siparis->siparis_id; ?>&islem=beklemede" class="btn btn-outline-warning"> Beklemede</a> 
                                        <a href="siparis-islemleri.php?id=<?= $siparis->siparis_id; ?>&islem=yapiliyor" class="btn btn-outline-dark"> Yapılıyor</a> 
                                        <a href="siparis-islemleri.php?id=<?= $siparis->siparis_id; ?>&islem=tamamlandi" class="btn btn btn-outline-success"> Tamamlandı</a> 
                                        <a href="siparis-islemleri.php?id=<?= $siparis->siparis_id; ?>&islem=iptal-edildi" class="btn btn-outline-danger"> İptal Edildi</a> </td> -->  
                                       </tr>

                                       <!-- ödendi butonu güncellemesi -->
                                       <div class="modal" id="m_modal_29<?=$id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel_29<?=$id;?>" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel_1<?=$id;?>">Ödeme Durum Güncelleme</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true"><i class="ion-ios-close-empty"></i></span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                              <p>İlgili siparişin ödenme durumunu kolaylıkla güncelleyebilirsiniz.</p><br>
                                              <a class="btn btn-outline-danger btn-block mg-b-10" href="siparis-islemleri.php?id=<?=$id; ?>&islem=odenmedi"><i data-feather="info" height="15px"></i> Ödenmedi</a>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                                            </div>
                                          </div>
                                        </div>
                                       </div>
                                       <!--  modalın bitişi -->
                                       <!-- ödenmedi butonu güncellemesi -->
                                       <div class="modal" id="m_modal_19<?=$id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel_19<?=$id;?>" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel_1<?=$id;?>">Ödeme Durum Güncelleme</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true"><i class="ion-ios-close-empty"></i></span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                              <p>İlgili siparişin ödenme durumunu kolaylıkla güncelleyebilirsiniz.</p><br>
                                              <a class="btn btn-outline-success btn-block mg-b-10" href="siparis-islemleri.php?id=<?=$id; ?>&islem=odendi"><i data-feather="check" height="15px"></i> Ödendi</a>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                                            </div>
                                          </div>
                                        </div>
                                       </div>
                                       <!--  modalın bitişi -->



                                       <div class="modal" id="m_modal_<?=$id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle_1" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLongTitle_1">Sipariş Bilgileri</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true"><i class="ion-ios-close-empty"></i></span>
                                              </button>
                                            </div>
                                            <div class="modal-body section-to-print"> 
                                              <p>
                                                <b>#<?=$sipno;?> / <?=$mysqldate?>.<?=$mysqldatex?>.<?=$mysqldatexx?> - <?=$mysqldatexxx?></b><br>
                                                <b><center>Ödeme Bilgileri;</center>
                                                </b><br>

                                                <?php 
                                                if ($siparis->payment==0) {
                                                  echo '<button type="button" class=" btn btn-outline-success btn-block mg-b-10" disabled>Masada Ödeme</button>';
                                                }elseif ($siparis->payment==1){
                                                  echo '<button type="button" class="btn btn-outline-primary btn-block mg-b-10 " disabled>Kasada Ödeme</button>';
                                                }elseif ($siparis->payment==2){
                                                  echo '<button type="button" class="btn btn-outline-success btn-block mg-b-10 " disabled>Kapıda Kredi</button>';
                                                }elseif ($siparis->payment==3){
                                                  echo '<button type="button" class="btn btn-outline-primary btn-block mg-b-10" disabled>Kapıda Nakit </button>';
                                                }else {
                                                  echo '<button type="button" class="btn btn-outline-dark btn-block mg-b-10" disabled>Online Ödeme</button>';
                                                }
                                                ?>


                                                
                                                <?php if ($payment==1) {echo "<button class='btn btn-success btn-block mg-b-10'>Ödendi</button>";}else{echo"<button class='btn btn-danger btn-block mg-b-10'>Ödenmedi</button>";} ?><br>
                                                <b>İsim Soyisim:</b> <?=$name_surname;?><br>  
                                                <b>telefon:</b> <?=$phone;?><br>
                                                <b>E-posta:</b> <?=$email;?><br>
                                                <b>Adres:</b> <?=$siparis->adres?><br>
                                                <b>Sipariş No:</b> #<?=$sipno;?><br>

                                                <b><center><h6>Siparişler</h6></center></b><br>
                                                <?php
                                                $sayac=0;
                                                $genel_toplam = 0;
                                                foreach ($id_parcala as $uid):
                                                  $urun_getir = $dbh->prepare("SELECT * FROM menu WHERE id = ?");
                                                  $urun_getir->execute([$uid]);
                                                  $urun = $urun_getir ->fetch(PDO::FETCH_OBJ);




                                                  $net_fiyat = $urun->urun_fiyat * $adet_parcala[$sayac];
                                                  $genel_toplam += $net_fiyat;


                                                  $porsiyonadi="";
                                                  if($porsiyon_parcala[$sayac]>0){
                                                    $porsyon = $dbh -> prepare("SELECT * FROM porsiyon_secenekleri WHERE id = ?");
                                                    $porsyon-> execute(array($porsiyon_parcala[$sayac]));
                                                    $porsyon = $porsyon->fetch(PDO::FETCH_ASSOC);
                                                    $pfiyat = $porsyon["fiyat"];
                                                    $porsiyonadi= $porsyon["baslik"];
                                                    $ekstraistek= $pfiyat  *  $adet_parcala[$sayac] ;
                                                  }  

                                                  $genel_toplam+=$ekstraistek;



                                                  $parcaliekstra=str_replace('$', '|', $ekstralar_parcala[$sayac]);


                                                  ?>







                                                  <p>
                                                    <b>Ürün Adı:</b> <?= $urun->urun_adi;?>   <?=$porsiyonadi!=""?"-".$porsiyonadi:""?>     <br><b>Ek Seçenekler:</b> <?=$parcaliekstra!=""?"-".$parcaliekstra:""?> <br><b>Miktar:</b> <?= $adet_parcala[$sayac];?> Adet <br> <b>Toplam Fiyat:</b> <?= ($urun->urun_fiyat * $adet_parcala[$sayac]) + ($ekstraistek ); ?> ₺<br> <b>Açıklama:</b> <?= $aciklama_parcala[$sayac]; ?><br>





                                                  </p>



                                                  <?php 
                                                  $sayac++;

                                                endforeach; ?>
                                                <br>
                                                <b>Toplam Tutar:</b> <?=$genel_toplam;?> TL<br>
                                                <b><h6>Not;</h6></b><?=$note;?>




                                              </p>


                                              <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                              </div>
                                              <div class="ps__rail-y" style="top: 0px; right: 4px;">
                                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>

                                              </div>
                                            </div>
                                            <div class="modal-footer"> 
                                              <div class="btn-group mg-t-10">

                                                
                                                <div class="btn-group">
                                                  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <i data-feather="settings" height="15px"></i> İşlemler</button>
                                                  <div class="dropdown-menu">
                                                    <a class="dropdown-item tx-13" href="siparis-islemleri.php?id=<?=$sipno; ?>&islem=beklemede"><i data-feather="info" height="15px"></i> Bekliyor</a>
                                                    <a class="dropdown-item tx-13" href="siparis-islemleri.php?id=<?=$sipno; ?>&islem=yapiliyor"><i data-feather="refresh-ccw" height="15px"></i> Hazırlanıyor</a>
                                                    <a class="dropdown-item tx-13" href="siparis-islemleri.php?id=<?=$sipno; ?>&islem=tamamlandi"><i data-feather="check" height="15px"></i> Tamamlandı</a>
                                                    <a class="dropdown-item tx-13" href="siparis-islemleri.php?id=<?=$sipno; ?>&islem=iptal-edildi"><i data-feather="x-circle" height="15px"></i> İptal Edildi</a>
                                                  </div>
                                                </div> 
                                                <button type="button" class="btn btn-primary yazdir"> <i data-feather="printer" height="15px"></i> <?php echo $dil["yazdır"];?></button> 
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i data-feather="x" height="15px"></i> <?php echo $dil["kapat"];?></button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                       <?php endforeach; ?>
                             </tbody>

                           </table>

                         </div>

                       </div>

                     </div>

                     <!--/ Hoverable Table End -->  

                     <!--================================-->




                 <br>
                 <!--/ Main Wrapper End -->
                 <!--================================-->
               </div>
             </div>

             <?php include 'inc/footer.php';?>