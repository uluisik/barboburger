<?php



if ($_GET) {



    include("inc/vt.php"); 

$id = $_GET['id'];
$islem = $_GET['islem'];


switch ($islem) {
	case 'sil':
		
			$siparis_sil = $dbh->prepare("DELETE FROM siparisler WHERE siparis_id = ?");
			$siparis_sil->execute([$id]);
			    if ($siparis_sil) {
			        header("location:siparis-liste.php");
			    }
			

		break;

		case "beklemede":
			$guncelle = $dbh -> prepare("UPDATE siparisler SET durum = ? WHERE siparis_id = ?");
			$guncelle->execute([0, $id]);
			if ($guncelle) {
			        header("location:siparis-liste.php");
			    }
		break;

		case "yapiliyor":
			$guncelle = $dbh -> prepare("UPDATE siparisler SET durum = ? WHERE siparis_id = ?");
			$guncelle->execute([1, $id]);
			if ($guncelle) {
			        header("location:siparis-liste.php");
			    }
		break;

		case "tamamlandi":
			$guncelle = $dbh -> prepare("UPDATE siparisler SET durum = ? WHERE siparis_id = ?");
			$guncelle->execute([2, $id]);
			if ($guncelle) {
			        header("location:siparis-liste.php");
			    }
		break;

		case "iptal-edildi":
			$guncelle = $dbh -> prepare("UPDATE siparisler SET durum = ? WHERE siparis_id = ?");
			$guncelle->execute([3, $id]);
			if ($guncelle) {
			        header("location:siparis-liste.php");
			    }
		break;


		case "odendi":
			$guncelle = $dbh -> prepare("UPDATE siparisler SET odeme_durum = ?  WHERE siparis_id = ?");
			$guncelle->execute([1, $id]);
			if ($guncelle) {
			        header("location:siparis-liste.php");
			    }else{
			    	echo "string";
			    }
		break;

		case "odenmedi":
			$guncelle = $dbh -> prepare("UPDATE siparisler SET odeme_durum = ? WHERE siparis_id = ?");
			$guncelle->execute([0, $id]);
			if ($guncelle) {
			        header("location:siparis-liste.php");
			    }
		break;

	
}
}

?>