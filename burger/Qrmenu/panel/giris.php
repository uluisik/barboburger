
<!DOCTYPE html>
<html lang="zxx">

<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="keyword" content="">
      <meta name="author"  content=""/>
      <!-- Page Title -->
      <title>Yönetici Paneli </title>
      <!-- Main CSS -->     
      <link type="text/css" rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css"/>
      <link type="text/css" rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css"/>
      <link type="text/css" rel="stylesheet" href="assets/plugins/flag-icon/flag-icon.min.css"/>
      <link type="text/css" rel="stylesheet" href="assets/plugins/simple-line-icons/css/simple-line-icons.css">
      <link type="text/css" rel="stylesheet" href="assets/plugins/ionicons/css/ionicons.css">
      <link type="text/css" rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">
      <link type="text/css" rel="stylesheet" href="assets/plugins/jquery-ui/jquery-ui.css">
      <link type="text/css" rel="stylesheet" href="assets/plugins/datatables/jquery.dataTables.min.css">
      <link type="text/css" rel="stylesheet" href="assets/plugins/chartist/chartist.css">
      <link type="text/css" rel="stylesheet" href="assets/plugins/datatables/extensions/dataTables.jqueryui.min.css">
      <link type="text/css" rel="stylesheet" href="assets/plugins/apex-chart/apexcharts.css">
      <link type="text/css" rel="stylesheet" href="assets/css/app.min.css"/>
      <link type="text/css" rel="stylesheet" href="assets/plugins/fullcalendar/fullcalendar.min.css"/>
      <link type="text/css" rel="stylesheet" href="assets/plugins/fullcalendar/fullcalendar.print.min.css" media="print">
      <link type="text/css" rel="stylesheet" href="assets/css/style.min.css"/>
      <link type="text/css" rel="stylesheet" href="assets/plugins/dropify/css/dropify.min.css">
      <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/4.4.95/css/materialdesignicons.min.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js" integrity="sha256-8zyeSXm+yTvzUN1VgAOinFgaVFEFTyYzWShOy9w7WoQ=" crossorigin="anonymous"></script>
        <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js" integrity="sha256-8zyeSXm+yTvzUN1VgAOinFgaVFEFTyYzWShOy9w7WoQ=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/gh/emn178/chartjs-plugin-labels/src/chartjs-plugin-labels.js"></script>


      <link type="text/css" rel="stylesheet" href="assets/themify-icons.css">
      <link type="text/css" rel="stylesheet" href="assets/css/datepicker.min.css">
      <!-- Favicon -->  
      <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn"t work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
<?php include 'inc/vt.php';?>
<?php
    
    if($_SESSION['musteri'] != ''){
        header("location: index.php");
    }
    
    if(!empty($_POST)){
        $kullanici = $_POST['kullanici'];
        $sifre = $_POST['sifre'];

        $sorgu = $baglanti->prepare("SELECT * FROM yetkili WHERE kullanici =:kullanici AND sifre =:sifre ");
        $sorgu->execute(array(
           "kullanici"=>$kullanici,
           "sifre" =>$sifre
        ));
        if($sorgu->rowCount()){
            foreach($sorgu as $sonuc){}
            
            ob_start();
            session_start();
            
            $_SESSION['musteri'] = $sonuc['id'];
            $_SESSION['musteriadi'] = $sonuc['kullanici'];
            $_SESSION["b"] = array(
               "isim"=>$sonuc["isim"],
               "soyisim"=>$sonuc["soyisim"]
            );

            header("location: index.php");
        }
        else {
            $hata = "* Giriş bilgileri hatalı";
        }
    }
    
    
    
?>

<body class="  pace-done"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>

      <div class="ht-100v d-flex">
         <div class="card shadow-none pd-20 mx-auto wd-300 text-center bd-1 align-self-center">
            <div class="text-center">
              <p>E-Menü Yönetici Paneli</p>
            </div>
            <div class="clearfix">
               <form method="post">
                  <p class="tx-center">Hesabınız varsa lütfen giriş yapınız.</p>
                  <div class="form-group input-group">
                     <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-user"></i></div>
                     </div>
                     <input type="text" class="form-control form-control-sm pwd" placeholder="Kullanıcı Adı" name="kullanici" required="">
                  </div>
                  <div class="form-group input-group">
                     <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-lock"></i></div>
                     </div>
                     <input type="password" class="form-control form-control-sm pwd" placeholder="Şifre" name="sifre" required="">
                  </div>
                  <div class="input-group mg-y-20">
                     <input type="submit" value="Giriş Yap" class="btn btn-custom-primary w-100 tx-13">
                  </div>
                
                        <?php
                    
                        if($hata!=""){
                            echo '<p class="tx-center" style="color:red;">'.$hata.'</p>';
                        }
                        
                        ?>

               </form>
            </div>
         </div>
      </div>
     
      <!--/ User Singin End -->
      <!--================================-->
      <!-- Footer Script -->
      <!--================================--> 
      <script src="assets/plugins/jquery/jquery.min.js"></script>
      <script src="assets/plugins/jquery-ui/jquery-ui.js"></script>
      <script src="assets/plugins/popper/popper.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/plugins/pace/pace.min.js"></script>
      <script src="assets/js/jquery.slimscroll.min.js"></script>
      <script src="assets/js/custom.js"></script>
   </body>
 
</html>