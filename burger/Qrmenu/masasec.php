<?
include "includes/siniflar/phpqrcode/qrlib.php";

if($_POST["masa"]){




 // how to configure pixel "zoom" factor
    
 ob_start();
QRCode::png("https://". $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF'])."/index.php?masa=".md5($_POST["masa"]), null, QR_ECLEVEL_L, 20);
$imageString = base64_encode( ob_get_contents() );
ob_end_clean();?>
<center>
    <img   src="data:image/png;base64,<?=$imageString?>" />
</center> 
<? }else{ ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">    
    <form method="post">
    <? 
    for ($x=0; $x <5 ; $x++) { 
        ?>
        <div class="row">
        <?
        for ($i=0; $i <6; $i++) { 
            ++$c;
            ?>
               <button type="submit" name="masa" value="<?=$c?>" class="btn btn-primary col-md-2"><?=$c?></button>                
            <?
        }
        ?>
      
        </div>
        <?
     # code...
    }
    ?>
        </form>
     
    
<?}?>
