<?
include "includes/inc.php";
$u = new User(); 
$m= new ResponseMessage();
if($_POST["_type"]=="login"){
    $login=$u->login($_POST["Username"],$_POST["Password"]);
    if($login){

        $r= $m->success("Giriş Başarılı")->toJson();
        
        $_SESSION["user"]=$login;
        
    }else{
        $r= $m->error("Hatali")->toJson();
    }
}elseif($_POST["_type"]=="register"){
    $register=$u->set("",$_POST["Password"],$_POST["Fullname"],$_POST["Email"],$_POST["Phone"]);

    if(    $register->insert()    ){

        $register->loggedIn=true;
        $r= $m->success("Kayıt Başarılı")->toJson();
        $_SESSION["user"]=$register;
       // header("location:index.php");
    }else{
        $r= $m->error("Prethodno korištena prijava e-pošte ili korisničkog imena nije uspjela")->toJson();

    }
}

echo $r;

?>