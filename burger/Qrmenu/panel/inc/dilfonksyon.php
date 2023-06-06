<?
 function dilhash( $lang,$table,$col,$recordid ){
    return md5($table.$col.$recordid.$lang); 
 }
 
 
 function dilguncelle($dil,$table,$recordid,$col,$value){
    global $dbh;
    $hash=dilhash($dil,$table,$col,$recordid);
    
    $sorgu = $dbh->prepare(" REPLACE INTO dil_icerik SET dil = :dil, kayithash = :kayithash, icerik = :icerik");
    $sorgu->execute(array(
        "dil"=> $dil,
        "kayithash"=> $hash, 
        "icerik"=> $value
    ));
 }



function cevir( $tablo,$kayit,$dil){
    global $dbh;
    $id=$kayit["id"];
    foreach($kayit as $hucreanahtar=>$hucreveri){
        $hash=dilhash($dil,$tablo,$hucreanahtar,$id);
        $sorgu = $dbh->prepare("SELECT * FROM dil_icerik Where kayithash=:id");
        $sorgu->execute(array(
            "id"=> $hash
        )); 
        $sonuc = $sorgu->fetch();
        if(isset($sonuc["icerik"])){
            $kayit[$hucreanahtar]=$sonuc["icerik"];
        }
    }
    return $kayit;
 
    
}