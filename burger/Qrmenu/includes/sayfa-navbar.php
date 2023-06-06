<body id="mobile_wrap">
	<link rel="stylesheet" href="boo.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>


	<div class="panel-overlay"></div>



	<div class="panel panel-left panel-reveal">

		<!-- Slider -->

		<div class="swiper-container-subnav multinav">

			<div class="swiper-wrapper">

				<div class="swiper-slide">		

					<nav class="main_nav_underline">

						<ul>

						
							<li><a href="kategori"><img src="images/icons/white/food.png" alt="" title="" /><span><?php echo $dil["menu"];?></span></a></li>
					

							

							

							

								

								<li><a href="bize-ulasin"><img src="images/icons/white/contact.png" alt="" title="" /><span><?php echo $dil["bize-ulasin"];?></span></a></li>

							

							
								<li><a href="<?=$ayar['instagram'];?>" target="_blank"><img src="images/icons/white/instagram.png" alt="" title="" /><span>Instagram</span></a></li>

								<li><a href="<?=$ayar['facebook'];?>" target="_blank"><img src="images/icons/white/facebook.png" alt="" title="" /><span>Facebook</span></a></li>



							</ul>

						</nav>

					</div>	





				</div>

			</div>

		</div> 
		<div class="panel panel-right panel-reveal">
			<div class="user_login_info">

				<div class="user_thumb">
					<img src="images/page_photo55.jpg" alt="" title="" />
					<div class="user_details">
						<p><?php echo $dil["arad"];?>, <span><?php echo $dil["bulamamak"];?></span></p>
					</div>   
				</div>
				
				<nav class="user-nav">
					<ul>

						<form method="post" action="arama.php" id="searchform" class="search-form" _lpchecked="1">
							<div class="contactform">
								<label><font color="#fff"> <?php echo $dil["urunyaz"];?></font></label><br> 
								<input type="text" name="arama" id="arama" placeholder="örnk: Et Sote" value="" class="form_input required" / required="">
							</div>

							<center> <input type="submit" name="submit" class="form_submit" id="submit" value="<?php echo $dil["ara"];?>" /> </center>
						</form>

					</ul>

				</nav>

				<style type="text/css">


					#dis_bolme { 


						width: 500px; 


						height:250px; 


					}


					.ic_bolme{


						float:left;


						width:60px;


						height:20px; 


						margin-right: 10px;


						margin-left: 4px;


					</style> 

				</div>
			</div> 


			<div class="views">



				<div class="view view-main">



					<div class="pages">

						<div data-page="about" class="page no-toolbar no-navbar">

							<div class="page-content">



								<div class="navbarpages navbarpagesbg">

									<div class="navbar_left">

										<div class="logo_text"><a href="anasayfa"><img src="img/<?=$ayar['foto'];?>" width="40"> </a></div>

									</div>

									<div class="navbar_right navbar_right_menu">

										<a href="#" data-panel="left" class="open-panel"><img src="images/icons/white/menu.png" alt="" title="" /></a>

									</div>		

									<div class="navbar_right">
										<a href="#" data-toggle="modal" data-target="#basicModal" class="open-panel"><img src="images/icons/white/global.png" alt="" title="" /></a>
									</div>	

									<div class="navbar_right">
										<a href="#" data-panel="right" class="open-panel"><img src="images/icons/white/search.png" alt="" title="" /></a>
									</div>	 

										
									<!-- basic modal -->
									<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header"> 
												</button>
											</div>
											<div class="modal-body">
												<h6><?php echo $dil["dilsec"];?></h3>  
													<li class="liste ic_bolme"><a href="dil.php?dil=tr"><img src="<?=$dilicon["tr"]?>" alt="tr"> </a>  </li>
													<li class="liste ic_bolme"><a href="dil.php?dil=en"><img src="<?=$dilicon["en"]?>" alt="en"> </a> </li>
													<li class="liste ic_bolme"><a href="dil.php?dil=ru"><img src="<?=$dilicon["ru"]?>" alt="ru"> </a>  </li>
													<li class="liste ic_bolme"><a href="dil.php?dil=ar"><img src="<?=$dilicon["ar"]?>" alt="ar"> </a>  </li>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $dil["kapat"];?></button> 
												</div>
											</div>
										</div>
									</div>
								</div>

								<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
								<script src='https://unpkg.com/popper.js'></script>
								<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'></script>