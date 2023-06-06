<?php include 'includes/header.php';?>
<title>Hesap İsteyin</title>
<?php include 'includes/sayfa-navbar.php';?>
<link rel="stylesheet" href="./selectstyle.css">
 <?php
        if ($_POST) {  

            $masa_adi = $_POST['masa_adi'];

            $isim_soyisim = strip_tags($_POST['isim_soyisim']);

            $telefon = strip_tags($_POST['telefon']);

           if ($masa_adi <> "" && $isim_soyisim <> "" && $telefon <> "" ) {

                                $satir = [
                                	'masa_adi' => $masa_adi,
                                    'isim_soyisim' => $isim_soyisim,
                                    'telefon' => $telefon,
                                ];

                                $sql = "INSERT INTO hesap_iste SET masa_adi=:masa_adi, isim_soyisim=:isim_soyisim, telefon=:telefon;";

                                $durum = $dbh->prepare($sql)->execute($satir);

                                if ($durum) {

                                    $sonId = $dbh->lastInsertId();

                                    echo '<script language="javascript">
alert("Talebiniz Başarı İle Alınmıştır. ")
</script> ';

                                    

                                }



                            }

                        }



        ?>

     <div id="pages_maincontent">

      

      <h2 class="page_title"><center><?php echo $dil["hesap-iste"];?></center></h2>

	  

     <div class="page_single layout_fullwidth_padding">	  



            <h2 id="Note"></h2>

            <div class="contactform">

            <form method="post" class="" id="ContactForm">

            <label><?php echo $dil["isim-soyisim"];?>:</label>

            <input type="text" name="isim_soyisim" id="isim_soyisim" value="" class="form_input required" / required="">

            <label><?php echo $dil["dogrulama"];?>:</label>

            <input type="number" name="telefon" id="telefon" value="" class="form_input required email" / required="">

            <label><?php echo $dil["masa-no"];?>:
            <? if(!isset($_SESSION["masa_no"])){ ?>
           <a   href="qrsayfa.php" style=" background-color: #000; /* Green */
                    border: none;
                    float:right;
                    color: white;
                    padding: 5px 23px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;"><?php echo $dil["qrokut"];?></a> 
                    <? } ?>
             </label>
          

            <?
            
            if($_SESSION["masa_no"]){ 
                $sth = $dbh->prepare("select * from masa_no where id=".$_SESSION["masa_no"]);
                $sth->execute();
                $masa_ = $sth->fetch(PDO::FETCH_ASSOC);
                echo $masa_["masa_adi"];
                    ?>
                    <input type="hidden" name="masa_adi" value="<?=$_SESSION["masa_no"];?>">
                    
         <?}else{?>
           
             <p><font color="red"> <?php echo $dil["masaqrkodgerekli"];?></font></p>
       
        <?}?> 

          
        <?
                if($_SESSION["masa_no"]){ 
                  ?>
                      <input type="submit" name="submit" class="form_submit" id="submit" value="<?php echo $dil["gonder"];?>" /> 
                  <?
                }else{
                  ?>
                 
                  <?
                }?>
          

            <label id="loader" style="display:none;"><img src="images/loader.gif" alt="Loading..." id="LoadingGraphic" /></label>

            </form>

            </div>

             <blockquote>
            <center><?php echo $dil["hesap-aciklama"];?></center>
      </blockquote> 

      </div>

      

      </div>

    </div>

  </div>

</div>



         </div>

    </div>

 <script  src="./selectscript.js"></script>
 <?php include 'includes/footer.php';?>