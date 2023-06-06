<?

require_once("panel/inc/vt.php");


if($_POST["qtyset"]){
    if($_POST["qty"]==0){
        unset($_SESSION["sepet"]["urunler"][$_POST["qty"]]);
    }else{
        $_SESSION["sepet"]["urunler"][$_POST["urunid"]]["qty"] = $_POST["qty"];
        $_SESSION["sepet"]["urunler"][$_POST["urunid"]]["id"] = $_POST["urunid"];
        $_SESSION["sepet"]["toplam"]=0;
        sepethesapla();
    }
}
elseif($_POST["urunid"]){

    $_SESSION["sepet"]["urunler"][$_POST["urunid"]]["qty"] += $_POST["qty"];
    $_SESSION["sepet"]["urunler"][$_POST["urunid"]]["id"] = $_POST["urunid"];
    $_SESSION["sepet"]["toplam"]=0; 
    sepethesapla();

}elseif($_GET["urunsil"]){

    unset($_SESSION["sepet"]["urunler"][$_GET["urunsil"]]);
    sepethesapla();
    header("location:sepet.php");
    exit();
}

function sepethesapla(){
    global $dbh;
    foreach ($_SESSION["sepet"]["urunler"] as &$urun) {
        $urunb = $dbh->prepare("select * from prod where id=:id");
        $urunb->execute(array("id"=>$urun["id"]));
        $urunb = $urunb->fetch(PDO::FETCH_ASSOC);
        $urun["urun_adi"]=$urunb["urun_adi"];
        $urun["foto"]=$urunb["foto"];
        $urun["urun_fiyat"]=$urunb["urun_fiyat"];
        $urun["urun_fiyat_toplam"]=str_replace( ",",".",$urunb["urun_fiyat"]) * $urun["qty"];
        $_SESSION["sepet"]["toplam"] +=  str_replace( ",",".",$urunb["urun_fiyat"]) * $urun["qty"];
    } 
    $_SESSION["sepet"]["urunsayi"] = count($_SESSION["sepet"]["urunler"]);
} 


echo json_encode($_SESSION["sepet"]);

?>