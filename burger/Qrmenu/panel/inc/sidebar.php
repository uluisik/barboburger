  <?php

    

    if($blok == "anasayfa")

    {

        $anasayfaOpen = "open active";

    }



     if($blok == "hakkimizda")

    {

        $hakkimizdaOpen = "open active";

    }

    if($blok == "iletisim")

    {

        $iletisimOpen = "open active";

    }

    if($blok == "hesap")

    {

        $hesapOpen = "open active";

    }

    if($blok == "garson")

    {

        $garsonOpen = "open active";

    }

    if($blok == "siparis-liste")

    {

        $siparisOpen = "open active";

    }



    if($blok == "genel-ayar")

    {

        $ayarOpen = "open active";

    }

    if($blok == "odeme-ayar")

    {

        $odemeayarOpen = "open active";

    }


    if($blok == "urun-yonetim")

    {

        $urunOpen = "open active";

        $urunDisplay = "display:block;";

        

        if($sayfa == "kategori-ekle")

            $kategoriActive = "active";

        

        if($sayfa == "kategori-liste")

            $kategorilisteActive = "active";


        if($sayfa == "urun-liste")

            $urunlisteActive = "active";

         if($sayfa == "porsiyon-liste")

            $porsiyonlisteActive = "active";

        if($sayfa == "eksecenek-liste")

            $ekseceneklisteActive = "active";

        

    }

    if($blok == "alerji-yonetim")

    {

        $alerjiOpen = "open active";

        $alerjiDisplay = "display:block;"; 


        if($sayfa == "alerji-ekle")

            $alerjiActive = "active";

        

        if($sayfa == "alerji-liste")

            $alerjilisteActive = "active";

        

    }

    if($blok == "slider-yonetim")

    {

        $sliderOpen = "open active";

        $sliderDisplay = "display:block;";

        

        if($sayfa == "slider-ekle")

            $sliderActive = "active";

        

        if($sayfa == "slider-liste")

            $sliderlisteActive = "active";

        

    }

     if($blok == "masa-yonetim")

    {

        $masaOpen = "open active";

        $masaDisplay = "display:block;";

        

        if($sayfa == "masa-ekle")

            $masaActive = "active";

        

        if($sayfa == "masa-liste")

            $masalisteActive = "active";

        

    }


    if($blok == "yetkili-yonetim")

    {

        $yetkiliOpen = "open active";

        $yetkiliDisplay = "display:block;";

        

        if($sayfa == "yetkili-ekle")

            $yetkiliActive = "active";

        

        if($sayfa == "yetkili-liste")

            $yetkililisteActive = "active";

        

    }

    

    

    

    ?>

   <body>

      <!--================================-->

      <!-- Page Container Start -->

      <!--================================-->

      <div class="page-container">

         <!--================================-->

         <!-- Page Sidebar Start -->

         <!--================================-->

         <div class="page-sidebar">

            <div class="logo">

               <a class="logo-img" href="index.php">		

               <p><h3>E-Menü</h3></p> 

               </a>			

               <i class="ion-ios-close-empty" id="sidebar-toggle-button-close"></i>

            </div>

            <!--================================-->

            <!-- Sidebar Menu Start -->

            <!--================================-->

             <?php

                    $iletisim = $dbh->query("SELECT * FROM iletisim WHERE id ", PDO::FETCH_ASSOC);
                    $hesap = $dbh->query("SELECT * FROM hesap_iste WHERE id ", PDO::FETCH_ASSOC);
                    $garson = $dbh->query("SELECT * FROM garson_cagir WHERE id ", PDO::FETCH_ASSOC);
                    $siparis = $dbh->query("SELECT * FROM siparisler WHERE siparis_id ", PDO::FETCH_ASSOC);


            ?> 

            <div class="page-sidebar-inner">

               <div class="page-sidebar-menu">

                  <ul class="accordion-menu">



                     <li class="menu-divider mg-y-20-force"></li>

                     <li class="mg-20-force menu-others">Sayfalar</li>

                    

                    

                   
                     </li>

                    

                    

                     <li class="<?=$ayarOpen?>">

                        <a href="index.php"><i data-feather="home"></i>

                        <span>Anasayfa</span></a>

                     </li>  

                    

					 <li class="menu-divider mg-y-20-force"></li>

                     <li class="mg-20-force menu-others">Yönetim</li>


                      <li class="<?=$urunOpen?>">

                        <a href="#"><i data-feather="layers"></i>

                        <span>Menü Yönetimi</span><i class="accordion-icon fa fa-angle-left"></i></a>

                        <ul class="sub-menu" style="<?=$urunDisplay?>">

                           <li class="<?=$kategorilisteActive?>"><a href="kategori-liste.php">Kategori İşlemleri</a></li> 

                           <li class="<?=$urunlisteActive?>"><a href="urun-liste.php">Ürün İşlemleri</a></li>

                           <li class="<?=$porsiyonlisteActive?>"><a href="porsiyon-liste.php">Seçenek İşlemleri</a></li>

                            <li class="<?=$ekseceneklisteActive?>"><a href="eksecenek-liste.php">Ek Seçenek İşlemleri</a></li>

                        </ul>

                     </li>


                     <li class="<?=$sliderOpen?>">

                        <a href="#"><i data-feather="move"></i>

                        <span>Slider Yönetimi</span><i class="accordion-icon fa fa-angle-left"></i></a>

                        <ul class="sub-menu" style="<?=$sliderDisplay?>">

                           <li class="<?=$sliderActive?>"><a href="slider-ekle.php">Slider Ekle</a></li>

                           <li class="<?=$sliderlisteActive?>"><a href="slider-liste.php">Slider Liste</a></li>

                        </ul>

                     </li>


                     


                   

                     <li class="<?=$yetkiliOpen?>">

                        <a href="#"><i data-feather="cloud-lightning"></i>

                        <span>Yetkili Yönetimi</span><i class="accordion-icon fa fa-angle-left"></i></a>

                        <ul class="sub-menu" style="<?=$yetkiliDisplay?>">

                           <li class="<?=$yetkiliActive?>"><a href="yetkili-ekle.php">Yetkili Ekle</a></li>

                           <li class="<?=$yetkililisteActive?>"><a href="yetkili-listesi.php">Yetkili Liste</a></li>

                        </ul>
                         <li class="<?=$iletisimOpen?>">

                        <a href="iletisim-liste.php"><i data-feather="message-circle"></i>

                        <span>İletişim Talepleri</span>      <span class="nav-unread badge badge-primary  badge-pill"> <?=$iletisim->rowCount()?> Bildiri</span>
                    </a>

                     </li>
                     </li>

                  </ul>

               </div>

            </div>

            <!--/ Sidebar Menu End -->

            <!--================================-->

            <!-- Sidebar Footer Start -->

            <!--================================-->

            <div class="sidebar-footer">	 	 

               <a class="pull-left" href="inc/logout.php" data-toggle="tooltip" data-placement="top" data-original-title="Oturumu Kapat">

               <i data-feather="log-out" class="ht-15"></i></a>

            </div>

            <!--/ Sidebar Footer End -->

         </div>

         <!--/ Page Sidebar End -->

         <!--================================-->