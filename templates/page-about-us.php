<?php
/* Template Name: About Us */

get_header();
?>
<main>
	<section class="header-1 cover-black">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12 text-center">
					<h1><?php _e("About Us","levasseur-warren") ?></h1>
				</div>
			</div>
		</div>
	</section>
	<section class="about-us-1">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2><?php _e("Management coaching and corporate training","levasseur-warren") ?></h2>
					<p><?php _e("After some twenty years as a manager and general manager for large communications organizations, Yves Levasseur began his career as a professional business coach and trainer in 2016. He then founded Levasseur Warren Coaching Inc. in 2017 and began with a coaching mandate at Ford as well as several SMEs. He initially worked with business coaching collaborators and corporate trainers. During the development of the company, he realized that the support needs of his clients were vast and varied. As time went by, he added experienced collaborators in different fields such as presentation coaching, financial coaching, executive coaching, sales, marketing and human resources management.<br><br>

The multidisciplinary work of his teammates led to the idea of creating an advisory committees in order to meet the needs of SMEs, that do not have an HR and/or finance director, nor a sales or marketing director and that would not require such salaries on a full-time basis. The approach of this new service is to enable SMEs to be well advised and guided according to their budget and to have periodic access to independent experts to challenge decisions and/or strategic directions to improve their performance by adopting best management practices.<br><br>

Moreover, since the beginning of 2020, Levasseur Warren also operates in the Quebec City area, thanks to a team of certified professional management coaches, consultants and certified trainers who offer the same level of excellence as in Montreal.<br><br>

The firm's objective is to ensure that it provides the right resource(s) to its clients, with the goal of becoming one of Quebec's leaders in coaching and training.","levasseur-warren") ?>
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="about-us-2">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3 class="text-center mb-4"><?php _e("VISION","levasseur-warren") ?></h3>
					<p class="text-center h5 mb-4 pb-4"><?php _e("To be <b>THE</b> reference in business coaching and training in Canada","levasseur-warren") ?></p>
				</div>
				<div class="col-md-6 col-12">
					<img src="<?php echo get_template_directory_uri();?>/resources/mision.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-md-6 col-12">
					<h3 class="mb-4"><?php _e("MISSION","levasseur-warren") ?></h3>
					<p class="h5"><?php _e("To be the go-between of choice between companies and a hand-picked team of professionals to maximize the development of human capital and improve performance through high-level, tailored coaching and training programs.") ?></p>
				</div>	
			</div>
		</div>
	</section>
	<section class="about-us-3">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-12 d-flex align-items-center justify-content-center">
					<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/resources/cpmt-02.png" alt="">
				</div>
				<div class="col-md-4 col-12 d-flex align-items-center justify-content-center">
					<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/resources/ccmm-fr.png" alt="">
				</div>
				<div class="col-md-4 col-12 d-flex align-items-center justify-content-center">
					<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/resources/international-coach-federation.png" alt="">
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer();