<!doctype html>
<?php 
  if ( ! isset($_GET['page'])){
		$_GET['page'] = 1;
  }   
 ?>
<html lang="en">
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Title -->
		<title>Audio - Padmapress</title>

		<!-- App favicon -->
		<link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/images/padma_logo_tab.png" />

		<link rel="stylesheet" href="<?php echo base_url() .'assets/css/bootstrap.min.css'; ?>">
		<link rel="stylesheet" href="<?php echo base_url() .'assets/style.css'; ?>">
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:400,700%7CMontserrat:300,400,600,700">
		
		<link rel="stylesheet" href="<?php echo base_url() .'assets/icons/fontawesome/css/fontawesome-all.min.css'; ?>"><!-- FontAwesome Icons -->
		<link rel="stylesheet" href="<?php echo base_url() .'assets/icons/Iconsmind__Ultimate_Pack/Line%20icons/styles.min.css'; ?>"><!-- iconsmind.com Icons -->
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>	
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.0/lity.min.css">
		
		<style>
			#overlay-wa { position: fixed; bottom:10px; right:10px; z-index:100;}
		</style>
	</head>
	<body>
	<div id="overlay-wa">
		<a href="https://wa.me/6287878785856"><img class="img img-fluid" style="max-width: 70px;" src="<?php echo base_url() .'assets/images/wa.png'?>" class alt="" srcset="">
		</a>
	</div>
		<div id="sidebar-bg">
			
      <header id="videohead-pro" class="sticky-header">
			<div id="video-logo-background"><a href="<?= base_url() ?>"><img src="<?php echo base_url().'assets/padma_logo.png' ?>" alt="Logo"></a></div>
			
			<div id="mobile-bars-icon-pro" class="noselect"><i class="fas fa-bars"></i></div>
			
			
			
			<div class="clearfix"></div>
			
			<?php $data['nav']='audio'; ?>
		
			<?php $this->load->view('padma/mobile-nav',$data) ?>
			
      </header>
		
		
	  <?php $data['nav']='audio'; ?>
		
		<?php $this->load->view('padma/sidebar-nav',$data) ?>
	
		<main id="col-main">
			
			
			
			<div class="flexslider progression-studios-dashboard-slider" id="katalogslide" style="background-color: #fff;">
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
												<h2><a href="<?php echo base_url().'welcome/detail_video/'.$head->slug ?>"><?= $head->judul ?></a></h2>
												<p class="progression-studios-slider-description"><?= $head->deskripsi ?></p>
												<a class="btn btn-green-pro btn-slider-pro" href="<?= $head->url ?>" data-lity><i class="fas fa-play"></i> Watch Video
												</a>
												
												<div class="clearfix"></div>      
												
											</div><!-- close .progression-studios-slider-caption-align -->
										</div><!-- close .progression-studios-slider-caption-width -->
									
									</div><!-- close .container -->
								
								</div><!-- close .progression-studios-slider-vertical-align -->
							</div><!-- close .progression-studios-slider-display-table-teskomen -->
						
							<div class="progression-studios-slider-mobile-background-cover"></div>
						</div><!-- close .progression-studios-slider-image-background -->
					</li>
					<?php endforeach ?>
					<?php foreach($headline as $head): ?>
					<li class="progression_studios_animate_left banner_mobile">
						<div class="progression-studios-slider-dashboard-image-background" style="background-image:url('https://server.padmapress.com/<?= $head->banner_mobile ?>');">
							<div class="progression-studios-slider-display-table">
								<div class="progression-studios-slider-vertical-align">
								
									<div class="container">
										<div class="progression-studios-slider-dashboard-caption-width">
											<div class="progression-studios-slider-caption-align">
												<h2><a href="<?php echo base_url().'welcome/detail_video/'.$head->slug ?>"><?= $head->judul ?></a></h2>
												<p class="progression-studios-slider-description"><?= $head->deskripsi ?></p>
												<a class="btn btn-green-pro btn-slider-pro" href="<?= $head->url ?>" data-lity><i class="fas fa-play"></i> Watch Video
												</a>
												
												<div class="clearfix"></div>      
												
											</div><!-- close .progression-studios-slider-caption-align -->
										</div><!-- close .progression-studios-slider-caption-width -->
									
									</div><!-- close .container -->
								
								</div><!-- close .progression-studios-slider-vertical-align -->
							</div><!-- close .progression-studios-slider-display-table-teskomen -->
						
							<div class="progression-studios-slider-mobile-background-cover"></div>
						</div><!-- close .progression-studios-slider-image-background -->
					</li>
					<?php endforeach ?>
			  <?php }else{ ?>
				<?php $head=$this->my_query->query('SELECT * FROM `audios` order by id desc limit 1')->row(); ?>
				<li class="progression_studios_animate_left banner_desktop">
						<div class="progression-studios-slider-dashboard-image-background" style="background-image:url('https://server.padmapress.com/<?= $head->banner_desktop ?>');">
							<div class="progression-studios-slider-display-table">
								<div class="progression-studios-slider-vertical-align">
								
									<div class="container">
										<div class="progression-studios-slider-dashboard-caption-width">
											<div class="progression-studios-slider-caption-align">
												<h2><a href="<?php echo base_url().'welcome/detail_video/'.$head->slug ?>"><?= $head->judul ?></a></h2>
												<p class="progression-studios-slider-description"><?= $head->deskripsi ?></p>
												<a class="btn btn-green-pro btn-slider-pro" href="<?= $head->url ?>" data-lity><i class="fas fa-play"></i> Watch Video
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
				    <li class="progression_studios_animate_left banner_mobile">
						<div class="progression-studios-slider-dashboard-image-background" style="background-image:url('https://server.padmapress.com/<?= $head->banner_mobile ?>');">
							<div class="progression-studios-slider-display-table">
								<div class="progression-studios-slider-vertical-align">
								
									<div class="container">
										<div class="progression-studios-slider-dashboard-caption-width">
											<div class="progression-studios-slider-caption-align">
												<h2><a href="<?php echo base_url().'welcome/detail_video/'.$head->slug ?>"><?= $head->judul ?></a></h2>
												<p class="progression-studios-slider-description"><?= $head->deskripsi ?></p>
												<a class="btn btn-green-pro btn-slider-pro" href="<?= $head->url ?>" data-lity><i class="fas fa-play"></i> Watch Video</a>
												
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
					<a href="<?= base_url('welcome/audio?isu_id=').$issues->id ?>">
					<h6><?= $issues->isu ?></h6>
					</a>
				</li>
				<?php endforeach ?>
			</div>
			</ul>
			
			<div class="clearfix"></div>
			
				<div class="dashboard-container">
				<?php $isu =  $this->my_query->get_data('*' , 'isu' , ['id' => $isu_id ])->row(); ?>
				
				<h4 class="heading-extra-margin-bottom"> <?php echo $isu->isu ?></h4>
				<div class="row">
				<?php if(count($audio)){ ?> 
				<?php foreach ($audio as $vid): ?>
				<div class="col-12 col-md-6 col-lg-4 col-xl-6">
					<div class="item-listing-container-skrn">
						<a href=" <?php echo base_url().'welcome/detail_audio/'.$vid->slug ?>">
							<iframe width="100%" height="280" src="https://www.youtube.com/embed/<?= explode("?v=",$vid->url)[1] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</a>
						<div class="item-listing-text-skrn">
							<div class="item-listing-text-skrn-vertical-align"><h6><a href="<?php echo base_url().'welcome/detail_audio/'.$vid->slug ?>"><?= $vid->judul ?></a></h6>
					
							</div><!-- close .item-listing-text-skrn-vertical-align -->
						</div><!-- close .item-listing-text-skrn -->
					</div><!-- close .item-listing-container-skrn -->
				</div><!-- close .col -->
				<?php endforeach ?>
					
				</div><!-- close .row -->
				
				
				<ul class="page-numbers">
					<?php if ($_GET['page'] != 1){ ?>
					<li><a class="previous page-numbers" href="<?= base_url() .'welcome/video?isu_id='.$_GET['isu_id'].'&page='.($_GET['page'] - 1) ?>"><i class="fas fa-chevron-left"></i></a></li> <!-- //prev -->
					<?php }  ?>
					<!-- <li><span class="page-numbers current">1</span></li> -->
					<?php for ($i=1; $i<=$pages ; $i++){ ?>
					<li><a class="page-numbers <?php echo ($_GET['page'] == $i) ? 'current' : ''; ?>" href="<?= base_url() .'welcome/video?isu_id='.$_GET['isu_id'].'&page='.$i ?>"><?= $i ?></a></li>
					<?php } ?>
					
					<?php if ($_GET['page'] != $pages){ ?>
					<li><a class="next page-numbers" href="<?= base_url() .'welcome/video?isu_id='.$_GET['isu_id'].'&page='.($_GET['page'] + 1) ?>"><i class="fas fa-chevron-right"></i></a></li> <!-- next -->
					<?php }  ?>
				</ul>
				<?php } else { ?>
					
					<div class="top">
						<h3>Maaf tidak ada Audio yang terkait</h3>
					</div>
					
					
				<?php } ?>
						
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
		<script src="<?php echo base_url() .'assets/js/script.js'; ?>" defer></script><!-- Custom Document Ready JS -->
		<script src="<?php echo base_url() .'assets/js/script-dashboard.js'; ?>" defer></script>
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
			$('#issue-next').on('click',function(){
				$('.issue-class').slick('slickNext');
			});
			$('#issue-prev').on('click',function(){
				$('.issue-class').slick('slickPrev');
			});
		</script>
	</body>
</html>