<!doctype html>
<html lang="en">
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="<?php echo base_url() .'assets/css/bootstrap.min.css'; ?>">
		<link rel="stylesheet" href="<?php echo base_url() .'assets/style.css'; ?>">
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:400,700%7CMontserrat:300,400,600,700">
		
		<link rel="stylesheet" href="<?php echo base_url() .'assets/icons/fontawesome/css/fontawesome-all.min.css'; ?>"><!-- FontAwesome Icons -->
		<link rel="stylesheet" href="<?php echo base_url() .'assets/icons/Iconsmind__Ultimate_Pack/Line%20icons/styles.min.css'; ?>"><!-- iconsmind.com Icons -->
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>	
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.0/lity.min.css">
		<style>
			#overlay-wa { position: fixed; bottom:10px; right:10px; z-index:100;}
			@media (max-width: 768px) { 
				.desktop-view{
					display: none;
				}
				.mobile-view{
					display: block;
				}
			}
			@media (min-width: 769px) { 
				.desktop-view{
					display: block;
				}
				.mobile-view{
					display: none;
				}
			}
		</style>
		<title>Padmapress</title>
	</head>
	<body>
	<div id="overlay-wa">
		<a href="https://wa.me/6287878785856"><img class="img img-fluid" style="max-width: 70px;" src="<?php echo base_url() .'assets/images/wa.png'?>" class alt="" srcset="">
		</a>
	</div>
		<div id="sidebar-bg">
			
      <header id="videohead-pro" class="sticky-header">
			<div id="video-logo-background"><a href="<?= base_url() .'welcome/index' ?>"><img src=" <?php echo base_url().'assets/padma_logo.png' ?>" alt="Logo"></a></div>
			
			<div id="video-search-header">
				<form action="<?= base_url() ?>Welcome/search" method="GET">
					<input name="s" type="text" placeholder="Cari Kebutuhan anda  disini" aria-label="Search">
				</form>
			</div>
			<div id="mobile-bars-icon-pro" class="noselect"><i class="fas fa-bars"></i></div>
			
			
			
			<div class="clearfix"></div>
			
			<?php $data['nav']='home'; ?>
		
			<?php $this->load->view('padma/mobile-nav',$data) ?>
			
      </header>
		
		
	  <?php $data['nav']='home'; ?>
		
		<?php $this->load->view('padma/sidebar-nav',$data) ?>

		<main id="col-main">
			<div class="flexslider progression-studios-dashboard-slider">
		      <ul class="slides">
			  <?php if(count($headline)){ ?>  
			  <?php foreach($headline as $head): ?>
					<li class="progression_studios_animate_left banner_desktop">
						<div class="progression-studios-slider-dashboard-image-background" style="background-image:url('https://server.padmapress.com/<?= $head->banner_desktop ?>');">
							<div class="progression-studios-slider-display-table">
								<div class="progression-studios-slider-vertical-align">
								
									<div class="container">
										<div class="progression-studios-slider-dashboard-caption-width">
											<div class="progression-studios-slider-caption-align">
												<!--<h2><a href="<?php echo base_url().'welcome/detail_video/'.$head->slug ?>"><?= $head->judul ?></a></h2>-->
												<!--<p class="progression-studios-slider-description"><?= $head->deskripsi ?></p>-->
												<center><a style="margin-top:-190px" class="btn btn-green-pro btn-slider-pro btn-shadow-pro afterglow btn-watch" href="<?= $head->url ?>" data-lity><i class="fas fa-play"></i> Tonton</a></center>
												
												<div class="clearfix"></div>      
												
											</div><!-- close .progression-studios-slider-caption-align -->
										</div><!-- close .progression-studios-slider-caption-width -->
									
									</div><!-- close .container -->
								
								</div><!-- close .progression-studios-slider-vertical-align -->
							</div><!-- close .progression-studios-slider-display-table -->
						
							<div class="progression-studios-slider-mobile-background-cover"></div>
						</div><!-- close .progression-studios-slider-image-background -->
					</li>
					<?php endforeach ?>
					<?php foreach($headline as $head): ?>
					<li class="progression_studios_animate_left banner_mobile">
						<div class="progression-studios-slider-dashboard-image-background" style="background-image:url('https://server.padmapress.com/<?= $head->banner_mobile ?>');">
							<div class="progression-studios-slider-display-table">
								<div class="progression-studios-slider-vertical-align">
								
									<div class="container text-right">
										<div class="progression-studios-slider-dashboard-caption-width">
											<div class="progression-studios-slider-caption-align">
												<!--<h2><a href="<?php echo base_url().'welcome/detail_video/'.$head->slug ?>"><?= $head->judul ?></a></h2>-->
												<!--<p class="progression-studios-slider-description"><?= $head->deskripsi ?></p>-->
												<a class="btn btn-green-pro btn-slider-pro btn-shadow-pro afterglow btn-watch-mobile" href="<?= $head->url ?>" data-lity><i class="fas fa-play"></i> Tonton
												</a>
												
												<div class="clearfix"></div>      
												
											</div><!-- close .progression-studios-slider-caption-align -->
										</div><!-- close .progression-studios-slider-caption-width -->
									
									</div><!-- close .container -->
								
								</div><!-- close .progression-studios-slider-vertical-align -->
							</div><!-- close .progression-studios-slider-display-table -->
						
							<div class="progression-studios-slider-mobile-background-cover"></div>
						</div><!-- close .progression-studios-slider-image-background -->
					</li>
					<?php endforeach ?>
			  <?php }else{ ?>
				<?php $head=$this->my_query->query('SELECT * FROM `video` order by id desc limit 1')->row(); ?>
				<li class="progression_studios_animate_left banner_desktop">
						<div class="progression-studios-slider-dashboard-image-background" style="background-image:url('https://server.padmapress.com/<?= $head->banner_desktop ?>');">
							<div class="progression-studios-slider-display-table">
								<div class="progression-studios-slider-vertical-align">
								
									<div class="container">
										<div class="progression-studios-slider-dashboard-caption-width">
											<div class="progression-studios-slider-caption-align">
												<h2><a href="<?php echo base_url().'welcome/detail_video/'.$head->slug ?>"><?= $head->judul ?></a></h2>
												<p class="progression-studios-slider-description"><?= $head->deskripsi ?></p>
												<a class="btn btn-green-pro btn-slider-pro btn-shadow-pro afterglow" href="<?= $head->url ?>" data-lity><i class="fas fa-play"></i> Watch Video
												</a>
												
												<div class="clearfix"></div>      
												
											</div><!-- close .progression-studios-slider-caption-align -->
										</div><!-- close .progression-studios-slider-caption-width -->
									
									</div><!-- close .container -->
								
								</div><!-- close .progression-studios-slider-vertical-align -->
							</div><!-- close .progression-studios-slider-display-table -->
						
							<div class="progression-studios-slider-mobile-background-cover"></div>
						</div><!-- close .progression-studios-slider-image-background -->
					</li>
				<?php ?>
				<?php $head=$this->my_query->query('SELECT * FROM `video` order by id desc limit 1')->row(); ?>
				<li class="progression_studios_animate_left banner_mobile">
						<div class="progression-studios-slider-dashboard-image-background" style="background-image:url('https://server.padmapress.com/<?= $head->banner_mobile ?>');">
							<div class="progression-studios-slider-display-table">
								<div class="progression-studios-slider-vertical-align">
								
									<div class="container">
										<div class="progression-studios-slider-dashboard-caption-width">
											<div class="progression-studios-slider-caption-align">
												<h2><a href="<?php echo base_url().'welcome/detail_video/'.$head->slug ?>"><?= $head->judul ?></a></h2>
												<p class="progression-studios-slider-description"><?= $head->deskripsi ?></p>
												<a class="btn btn-green-pro btn-slider-pro btn-shadow-pro afterglow" href="<?= $head->url ?>" data-lity><i class="fas fa-play"></i> Watch Video
												</a>
												
												<div class="clearfix"></div>      
												
											</div><!-- close .progression-studios-slider-caption-align -->
										</div><!-- close .progression-studios-slider-caption-width -->
									
									</div><!-- close .container -->
								
								</div><!-- close .progression-studios-slider-vertical-align -->
							</div><!-- close .progression-studios-slider-display-table -->
						
							<div class="progression-studios-slider-mobile-background-cover"></div>
						</div><!-- close .progression-studios-slider-image-background -->
					</li>
				<?php } ?>
				</ul>
			</div><!-- close .progression-studios-slider - See /js/script.js file for options -->
			
			<ul class="dashboard-genres-pro row">
				<div id="issue-prev" class="col-md-1 col-sm-1 col-3 col float-left"><button class="btn btn-info"><</button></div>
				<div id="issue-next" class="col-md-1 col-sm-1 col-3 float-right"><button class="btn btn-info">></button></div>
				<div class="col-md-10 col-sm-10 col-6 float-left issue-class">
				<?php foreach($isu as $issues): ?>
				<li class=" <?php echo ($issues->id == $_GET['isu_id']) ? 'active' : ''; ?> ">
					<a href="<?= base_url('welcome/index?isu_id=').$issues->id ?>">
					<h6><?= $issues->isu ?></h6>
					</a>
				</li>
				<?php endforeach ?>
				<!-- <li class="active">
					
					<h6>Issue 2</h6>
				</li> -->
				
			</div>
			</ul>
			
			<div class="clearfix"></div>
			
			<div class="dashboard-container">
				<?php $isu =  $this->my_query->get_data('*' , 'isu' , ['id' => $isu_id ])->row(); ?>
				
				<h4 class="heading-extra-margin-bottom"> <?php echo $isu->isu ?></h4>
				<div class="row">
					<?php if(count($video)){ ?> 
					<button class="btn btn-info float-left col-md-1 mb-4 video-prev desktop-view">Prev</button>
					<button class="btn btn-info col-md-1 col-6 mb-4 video-prev mobile-view">Prev</button>
					<button class="btn btn-info col-md-1 col-6 mb-4 video-next mobile-view">Next</button>
					<div class="col-md-10">
						<div class="row video-class">
							
							<?php foreach($video as $vid){ ?>
							<div class="col-12 col-md-12 col-lg-12 col-xl-12">
								<div class="item-listing-container-skrn">
									<a href="<?php echo base_url().'welcome/detail_video/'.$vid->slug ?>"><iframe width="100%" height="250" src="https://www.youtube.com/embed/<?= explode("?v=",$vid->url)[1] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class="video-list-frame" allowfullscreen></iframe>
										<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/DxVegfe1V2Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
									</a>
									<div class="item-listing-text-skrn">
										<div class="item-listing-text-skrn-vertical-align"><h6><a href="<?php echo base_url().'welcome/detail_video/'.$vid->slug ?>"><?= $vid->judul ?></a></h6>
										
										</div><!-- close .item-listing-text-skrn-vertical-align -->
									</div><!-- close .item-listing-text-skrn -->
								</div><!-- close .item-listing-container-skrn -->
							</div><!-- close .col -->
							<?php } ?>
						</div>
					</div>
					<button class="btn btn-info float-right col-md-1 mb-4 video-next desktop-view">Next</button>
					<?php } ?>
				</div>
				<div class="row">
					<?php if(count($book)){ ?> 
					<button class="btn btn-info float-left col-md-1 mb-4 katalog-prev desktop-view">Prev</button>
					<button class="btn btn-info col-md-1 mb-4 col-6 katalog-prev mobile-view">Prev</button>
					<button class="btn btn-info col-md-1 mb-4 col-6 katalog-next mobile-view">Next</button>
					<div class="col-md-10">
						<div class="row katalog-class">
							<?php foreach($book as $buku){ ?>
							<div class="col-12 col-md-12 col-lg-12 col-xl-12">
								<div class="row">
									<div class="item-listing-container-skrn col-md-12 pt-3">
										<div class="row">
											<div class="col-md-6">
												<a href="<?php echo base_url().'welcome/detail_katalog/'.$buku->slug ?>"><img src="https://server.padmapress.com/<?= $buku->banner_desktop ?>" alt="Listing"></a>
												<div class="item-listing-text-skrn">
													<div class="item-listing-text-skrn-vertical-align"><h6><a href="<?php echo base_url().'welcome/detail_katalog/'.$buku->slug ?>"><?= $buku->judul ?></a></h6>
													</div><!-- close .item-listing-text-skrn-vertical-align -->
												</div><!-- close .item-listing-text-skrn -->
											</div><!-- close .col -->
											<div class="col-md-6">
												<div class="item-listing-text-skrn">
													<div class="item-listing-text-skrn-vertical-align">
														<h6>
														    
														        <?php
														            $desc = $buku->deskripsi;
														             if (str_word_count($desc, 0) > 12) {
                                                                          $words = str_word_count($desc, 2);
                                                                          $pos = array_keys($words);
                                                                          $desc = substr($desc, 0, $pos[12]) . '... <br>';
                                                                      }
														            echo $desc;
														            echo "<a href='".base_url()."welcome/detail_katalog/".$buku->slug."' class='rm-oren'> Read More</a>"
														        ?>
														    
																<!--?= //$buku->deskripsi;
																    $string     =  $buku->deskripsi;
                                                                    $string     =  strip_tags($string);
                                                                    
                                                                    if (strlen($string) > 5) {
                                                                    
                                                                        // truncate string
                                                                    
                                                                        $stringCut = substr($string, 0, 5);
                                                                    
                                                                        $endPoint = strrpos($stringCut, ' ');
                                                                    
                                                                        //if the string doesn't contain any space then it will cut without word basis.
                                                                    
                                                                        $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                                                    
                                                                        $string .= "<a href='".base_url()."welcome/detail_katalog/".$buku->slug."' > Read More ...</a>";
                                                                    
                                                                    }
                                                                    
                                                                    echo $string;
																?-->
																
														</h6> 
													</div><!-- close .item-listing-text-skrn-vertical-align -->
												</div><!-- close .item-listing-text-skrn -->
											</div><!-- close .item-listing-container-skrn -->
										</div>
									</div>
								</div><!-- close .col -->
							</div>
							<?php } ?>
							
						</div>
					</div>
					<button class="btn btn-info float-right col-md-1 mb-4 katalog-next desktop-view">Next</button>
					<?php } ?>
				</div>
				</div><!-- close .row -->
			</div><!-- close .dashboard-container -->
		</main>
		
		
		</div><!-- close #sidebar-bg-->
		
		<!-- Required Framework JavaScript -->
		<script src="<?php echo base_url() .'assets/js/libs/jquery-3.3.1.min.js'; ?>"></script><!-- jQuery -->
		<script src="<?php echo base_url() .'assets/js/libs/popper.min.js'; ?>" defer></script><!-- Bootstrap Popper/Extras JS -->
		<script src="<?php echo base_url() .'assets/js/libs/bootstrap.min.js'; ?>" defer></script><!-- Bootstrap Main JS -->
		<!-- All JavaScript in Footer -->
		
		<!-- Additional Plugins and JavaScript -->
		<script src="<?php echo base_url() .'assets/js/navigation.js'; ?>" defer></script><!-- Header Navigation JS Plugin -->
		<script src="<?php echo base_url() .'assets/js/jquery.flexslider-min.js'; ?>" defer></script><!-- FlexSlider JS Plugin -->
		<script src="<?php echo base_url() .'assets/js/jquery-asRange.min.js'; ?>" defer></script><!-- Range Slider JS Plugin -->
		<script src="<?php echo base_url() .'assets/js/circle-progress.min.js'; ?>" defer></script><!-- Circle Progress JS Plugin -->
		<script src="<?php echo base_url() .'assets/js/afterglow.min.js'; ?>" defer></script><!-- Video Player JS Plugin -->
		<script src="<?php echo base_url() .'assets/js/script.js'; ?>" defer></script><!-- Custom Document Ready JS -->
		<script src="<?php echo base_url() .'assets/js/script-dashboard.js'; ?>" defer></script><!-- Custom Document Ready for Dashboard Only JS -->
		<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.0/lity.min.js"></script>
		<script>
		    $( document ).ready(function() {
                if (window.matchMedia('(max-width: 768px)').matches) {
                    $('.banner_desktop').remove();
                } else {
                    $('.banner_mobile').remove();
                }
            });
			$('.issue-class').slick({
  				autoplaySpeed: 5000,
				slidesToShow: 8,
				slidesToScroll: 1,
				prevArrow:'<button class="slick-prev  d-none"> < </button>',
				nextArrow:'<button class="slick-next d-none"> > </button>',
				responsive: [
					{
					breakpoint: 1024,
					settings: {
						slidesToShow: 6,
						slidesToScroll: 1,
					}
					},
					{
					breakpoint: 600,
					settings: {
						slidesToShow: 4,
						slidesToScroll: 1
					}
					},
					{
					breakpoint: 480,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1
					}
					}
					// You can unslick at a given breakpoint now by adding:
					// settings: "unslick"
					// instead of a settings object
				]
			});
			$('.video-class').slick({
  				autoplaySpeed: 5000,
				slidesToShow: 2,
				slidesToScroll: 1,
				prevArrow:'<button class="slick-prev  d-none"> < </button>',
				nextArrow:'<button class="slick-next d-none"> > </button>',
				responsive: [
					{
					breakpoint: 1024,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
					}
					},
					{
					breakpoint: 600,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
					},
					{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
					}
					// You can unslick at a given breakpoint now by adding:
					// settings: "unslick"
					// instead of a settings object
				]
			});
			$('.katalog-class').slick({
  				autoplaySpeed: 5000,
				slidesToShow: 2,
				slidesToScroll: 1,
				prevArrow:'<button class="slick-prev  d-none"> < </button>',
				nextArrow:'<button class="slick-next d-none"> > </button>',
				responsive: [
					{
					breakpoint: 1024,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
					}
					},
					{
					breakpoint: 600,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
					},
					{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
					}
					// You can unslick at a given breakpoint now by adding:
					// settings: "unslick"
					// instead of a settings object
				]
			});
			$('#issue-next').on('click',function(){
				$('.issue-class').slick('slickNext');
			});
			$('#issue-prev').on('click',function(){
				$('.issue-class').slick('slickPrev');
			});
			$('.video-next').on('click',function(){
				$('.video-class').slick('slickNext');
			});
			$('.video-prev').on('click',function(){
				$('.video-class').slick('slickPrev');
			});
			$('.katalog-next').on('click',function(){
				$('.katalog-class').slick('slickNext');
			});
			$('.katalog-prev').on('click',function(){
				$('.katalog-class').slick('slickPrev');
			});
		</script>
	</body>
</html>