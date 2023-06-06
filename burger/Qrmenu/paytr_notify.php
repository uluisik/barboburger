<?php include 'includes/inc.php';?>
<?php


$post 				     = $_POST;
$merchant_key 		 = $siteayar->merchant_key;
$merchant_salt		 = $siteayar->merchant_salt;
$hash 				     = base64_encode( hash_hmac('sha256', $post['merchant_oid'].$merchant_salt.$post['status'].$post['total_amount'], $merchant_key, true) );
if( $hash != $post['hash'] ){
	die('P1');
}
if( $post['status'] == 'success' ) {

		## Ödeme Onaylandı
	$siparis_id 	    = $post['merchant_oid'];
	
	$sipd = $dbh->prepare("SELECT * FROM siparisler where siparis_id=? && odeme_durum='0' ");
	$sipd-> execute(array($siparis_id));
	$sipd= $sipd->fetch(PDO::FETCH_OBJ); 
	
	if ( !empty($sipd) ) {
		$duzenle          	= $dbh->query("UPDATE siparisler SET odeme_durum='1' WHERE siparis_id='$siparis_id' ");

		
	}
	} else { ## Ödemeye Onay Verilmedi
		
	}
	echo "OK";
	exit;
	?>
