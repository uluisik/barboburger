    <?php include 'includes/header.php';?>


<?php
$paytr_settings = $dbh->query("SELECT * FROM odeme_ayar WHERE id = 1 ", PDO::FETCH_ASSOC);
if ($paytr_settings->rowCount()) {
	foreach ($paytr_settings as $paytr_settings) {
	}
}
?> 
<?php
/*$_SESSION['sipid']*/
$sipno=$_SESSION['sipid'];

$siparis = $dbh -> prepare("SELECT * FROM siparisler WHERE siparis_id = ?");
$siparis-> execute(array($sipno));
$siparis = $siparis->fetch(PDO::FETCH_OBJ);

$id_parcala = explode("|", $siparis->urun_id);
$adet_parcala = explode("|", $siparis->urun_adet);
$porsiyon_parcala = explode("|", $siparis->porsiyon_id);
$ekstralar_parcala=explode("|",$siparis->ekstralar);
$sayac=0;
foreach ($id_parcala as $uid){
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
	$sayac++;

}

if(empty($siparis)){
	//header("location: index.php/");

}

    ## 1. ADIM için örnek kodlar ##

    ####################### DÜZENLEMESİ ZORUNLU ALANLAR #######################
    #
    ## API Entegrasyon Bilgileri - Mağaza paneline giriş yaparak BİLGİ sayfasından alabilirsiniz.
$merchant_id    =  $paytr_settings["merchant_id"];
$merchant_key   =  $paytr_settings["merchant_key"];
$merchant_salt  =  $paytr_settings["merchant_salt"];
    #
$email =  $siparis->mail;
    #
    ## Tahsil edilecek tutar.
    $payment_amount =$genel_toplam*100; //9.99 için 9.99 * 100 = 999 gönderilmelidir.
    #
    ## Sipariş numarası: Her işlemde benzersiz olmalıdır!! Bu bilgi bildirim sayfanıza yapılacak bildirimde geri gönderilir.
    $merchant_oid = $sipno;
   // echo  $merchant_oid ;
    #
    ## Müşterinizin sitenizde kayıtlı veya form aracılığıyla aldığınız ad ve soyad bilgisi
    $user_name =  $siparis->adi_soyadi;
    #
    ## Müşterinizin sitenizde kayıtlı veya form aracılığıyla aldığınız adres bilgisi
    $user_address =  $siparis->adres;
    #
    ## Müşterinizin sitenizde kayıtlı veya form aracılığıyla aldığınız telefon bilgisi
    $user_phone = $siparis->telefon;
    #
    ## Başarılı ödeme sonrası müşterinizin yönlendirileceği sayfa
    ## !!! Bu sayfa siparişi onaylayacağınız sayfa değildir! Yalnızca müşterinizi bilgilendireceğiniz sayfadır!
    ## !!! Siparişi onaylayacağız sayfa "Bildirim URL" sayfasıdır (Bakınız: 2.ADIM Klasörü).
    $merchant_ok_url =  $paytr_settings["web_url"]."odeme-tamam.php";
    #
    ## Ödeme sürecinde beklenmedik bir hata oluşması durumunda müşterinizin yönlendirileceği sayfa
    ## !!! Bu sayfa siparişi iptal edeceğiniz sayfa değildir! Yalnızca müşterinizi bilgilendireceğiniz sayfadır!
    ## !!! Siparişi iptal edeceğiniz sayfa "Bildirim URL" sayfasıdır (Bakınız: 2.ADIM Klasörü).
    $merchant_fail_url = $paytr_settings["web_url"]."odeme-hata.php";
    #
    ## Müşterinin sepet/sipariş içeriği
    $user_basket = base64_encode(json_encode(array(
        array("Sipariş", $siparis->amount , 1), // 1. ürün (Ürün Ad - Birim Fiyat - Adet )

    )));
    #
    /* ÖRNEK $user_basket oluşturma - Ürün adedine göre array'leri çoğaltabilirsiniz
    $user_basket = base64_encode(json_encode(array(
        array("Örnek ürün 1", "18.00", 1), // 1. ürün (Ürün Ad - Birim Fiyat - Adet )
        array("Örnek ürün 2", "33.25", 2), // 2. ürün (Ürün Ad - Birim Fiyat - Adet )
        array("Örnek ürün 3", "45.42", 1)  // 3. ürün (Ürün Ad - Birim Fiyat - Adet )
    )));
    */
    ############################################################################################

    ## Kullanıcının IP adresi
    if( isset( $_SERVER["HTTP_CLIENT_IP"] ) ) {
    	$ip = $_SERVER["HTTP_CLIENT_IP"];
    } elseif( isset( $_SERVER["HTTP_X_FORWARDED_FOR"] ) ) {
    	$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
    } else {
    	$ip = $_SERVER["REMOTE_ADDR"];
    }

    ## !!! Eğer bu örnek kodu sunucuda değil local makinanızda çalıştırıyorsanız
    ## buraya dış ip adresinizi (https://www.whatismyip.com/) yazmalısınız. Aksi halde geçersiz paytr_token hatası alırsınız.
    $user_ip=$ip;
    ##

    ## İşlem zaman aşımı süresi - dakika cinsinden
    $timeout_limit = "30";

    ## Hata mesajlarının ekrana basılması için entegrasyon ve test sürecinde 1 olarak bırakın. Daha sonra 0 yapabilirsiniz.
    $debug_on = 1;

    ## Mağaza canlı modda iken test işlem yapmak için 1 olarak gönderilebilir.
    $test_mode = 1;

    $no_installment = 0; // Taksit yapılmasını istemiyorsanız, sadece tek çekim sunacaksanız 1 yapın

    ## Sayfada görüntülenecek taksit adedini sınırlamak istiyorsanız uygun şekilde değiştirin.
    ## Sıfır (0) gönderilmesi durumunda yürürlükteki en fazla izin verilen taksit geçerli olur.
    $max_installment = 0;

    $currency = "TL";
    
    ####### Bu kısımda herhangi bir değişiklik yapmanıza gerek yoktur. #######
    $hash_str = $merchant_id .$user_ip .$merchant_oid .$email .$payment_amount .$user_basket.$no_installment.$max_installment.$currency.$test_mode;
    $paytr_token=base64_encode(hash_hmac('sha256',$hash_str.$merchant_salt,$merchant_key,true));
    $post_vals=array(
    	'merchant_id'=>$merchant_id,
    	'user_ip'=>$user_ip,
    	'merchant_oid'=>$merchant_oid,
    	'email'=>$email,
    	'payment_amount'=>$payment_amount,
    	'paytr_token'=>$paytr_token,
    	'user_basket'=>$user_basket,
    	'debug_on'=>$debug_on,
    	'no_installment'=>$no_installment,
    	'max_installment'=>$max_installment,
    	'user_name'=>$user_name,
    	'user_address'=>$user_address,
    	'user_phone'=>$user_phone,
    	'merchant_ok_url'=>$merchant_ok_url,
    	'merchant_fail_url'=>$merchant_fail_url,
    	'timeout_limit'=>$timeout_limit,
    	'currency'=>$currency,
    	'test_mode'=>$test_mode
    );
    
    $ch=curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://www.paytr.com/odeme/api/get-token");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1) ;
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_vals);
    curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);


    $result = @curl_exec($ch);

    if(curl_errno($ch))
    	die("PAYTR IFRAME connection error. err:".curl_error($ch));

    curl_close($ch);

    $result=json_decode($result,1);

    if($result['status']=='success'){

    	$token=$result['token'];
    }
    else{
    	header("location:index.php");
    	
    	die("PAYTR IFRAME failed. reason:".$result['reason']);
    }
    #########################################################################

    ?>

    <title>Ödemeyi Tamamla..</title>
    <?php include 'includes/sayfa-navbar.php';

// $_SESSION["sepet"]=[];
//session_destroy();
    ?>



    <div id="pages_maincontent">
    	<!-- <div class="page_single layout_fullwidth_padding">

    		<div class="success_message">

    			<span><?php echo $dil["tesekkur"];?></span>

    			<img src="images/icons/black/rocket.png" alt="" title="" />

    			<p><?php echo $dil["sip-alindi"];?> </p>    
    			<p>#<?= $_SESSION['sipid']?> kodunuz ile sipariş durumunu kontrol edebilirsiniz.</p>        

    		</div>

    	</div> -->

    	<!-- Ödeme formunun açılması için gereken HTML kodlar / Başlangıç -->
    	<script src="https://www.paytr.com/js/iframeResizer.min.js"></script>
    	<iframe src="https://www.paytr.com/odeme/guvenli/<?php echo $token;?>" id="paytriframe" frameborder="0" scrolling="no" style="width: 100%;"></iframe>
    	<script>iFrameResize({},'#paytriframe');</script>
    	<!-- Ödeme formunun açılması için gereken HTML kodlar / Bitiş -->



    	<a href="anasayfa" class="button_full btyellow"><?php echo $dil["anasayfa-don"];?></a>     

    </div>





</div>

</div>

</div>



</div>

</div>


<?php include 'includes/footer.php';?>