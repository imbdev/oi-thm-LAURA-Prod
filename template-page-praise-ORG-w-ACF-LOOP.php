<?php
/**
 * The template for displaying all pages.
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

get_header('simple'); ?>

<!--========================================
=            TESTIMONIAL HEADER            =
=========================================-->
<style type="text/css" media="screen">


	@media ( min-width: 992px ) {

		#praise-page-header {
			background-image: url(<?php the_field('hero_background_image_desktop') ?>);
			/* background-image: url('/wp-content/uploads/2017/08/praise-page-1920x600.jpg'); */
			background-size: 100%;
			background-repeat: no-repeat;
		}		
	}
	@media ( max-width: 991px ) {

		#praise-page-header {
			background-image: url(<?php the_field('hero_background_image_mobile') ?>);
			/* background-image: url('/wp-content/uploads/2017/08/praise-page-mobile-800x600.jpg'); */
			background-size: 100%;
			background-repeat: no-repeat;
		}		
	}

</style>

<section id="praise-page-header">

	<div class="overlay">
		
		<div class="container">
			
			<div class="col-sm-12 col-md-12 col-lg-8">

				<article class="featured-post">
					
					<h2 class="headline"><?php the_field('hero_headline_text'); ?></h2>
					<!-- <h2 class="headline">Some extraordinary client results.</h2> -->

						<h1 class="post-title">
							<?php the_field('hero_subheadline_text'); ?>
							<!-- Our greatest joy is watching our clients succeed, here’s what they’re saying about us. -->
						</h1>

					<!-- <a class="btn btn-primary btn-lg" href="#">Read More »</a> -->

				</article>
				
			</div>

		</div>

	</div> <!-- END OVERLAY -->

</section>


<!--====  End of TESTIMONIAL HEADER  ====-->

<!--=========================================
=            TOP TEXT INFO BLOCK            =
==========================================-->

<section id="praise-text-info-block">

	<main class="container">
		
		<h1 class="heading text-center">
			<?php the_field('info_headline_text'); ?>
		</h1>


		<div class="flex-container">
			
			<article class="text-box flex-item">
			
				<?php the_field('info_text_box_left'); ?>
			
			</article>

			<article class="text-box flex-item">

				<?php the_field('info_text_box_middle'); ?>
				
			</article>

			<article class="text-box flex-item">

				<?php the_field('info_text_box_right'); ?>
				
			</article>

		</div>


	</main>

</section>

<!--====  End of TOP TEXT INFO BLOCK  ====-->

<!--==============================================
=            PRAISE OPT-IN BLOCK            =
===============================================-->
<section id="praise-page-optin-block">

	<main class="container">
		
		<div class="col-sm-12 col-md-6 col-lg-6">

			<article class="text-block text-center">

				<h3 class="sub-heading"><?php the_field('praise_optin_one_subheadline'); ?></h3>

				<h1 class="heading"><?php the_field('praise_optin_one_headline'); ?></h1>

				<div class="leadbox-embed center-block">

					<?php if( have_rows('testimonial_optin_button_block') ) : ?>

			    		<?php while ( have_rows('testimonial_optin_button_block') ) :  the_row(); ?>

				    		<?php if ( get_row_layout() == 'lead_pages_button' ) : ?>	

								<?php the_sub_field('lead_pages_button_code'); ?>
				    			

							<?php elseif( get_row_layout() == 'normal_button_with_url' ) :  ?>


								<a class="btn btn-primary btn-lg" href="<?php the_sub_field('normal_button_url'); ?>" target="_blank"><?php the_sub_field('normal_button_text'); ?></a>
						      	
							
							<?php endif; ?>

						<?php endwhile; ?>

					<?php endif; ?>		

				</div>			
				
			</article>
			
		</div>
		<div class="col-md-6 col-lg-6 visible-md visible-lg">

			<figure class="image-block">
				
				<img class="optin-right-image img-responsive" src="<?php the_field('praise_optin_one_image'); ?>" alt="">

			</figure>
			
		</div>

	</main>
	
</section>

<!--========================================
=            Normal Praise Loop            =
=========================================-->

<section id="normal-praise-loop" class="container">

	<main class="container">
		
		<div class="flex-container">
			
			<article class="text-box flex-item text-center" v-for="post in posts">
				<figure>
					<img class="img-responsive img-circle center-block" :src="post.acf.client_image" alt="">
					<!-- <img class="img-responsive img-circle center-block" src="/wp-content/uploads/2017/07/Sharee-Moore-150x150.jpg" alt=""> -->
				</figure>
				<h4 class="subheading"> {{ post.acf.client_description }} </h4>
				<h2 class="heading">{{ post.title.rendered }} </h2>
				<!-- <h2 class="heading">Sharee Moore </h2> -->
				<p class="praise-text">
					{{ post.acf.client_content }}
					<!-- Tiana has been my business coach for the past 8 months. She is one of those leaders with the "inside edge" ... she stays current on the latest strategies for growing my list of clientele, increasing sales and delivering high quality customer service. If you're looking for a social media expert who can increase your bottom line - you're in luck! Your search has ended. Thank you Tiana! -->
				</p>
			</article>

		</div>


		<div class="load-more-btn-box row text-center hide">
			<a class="btn btn-success btn-lg" href="#">LOAD MORE</a>
		</div>

	</main>	

</section> <!-- End Container -->	

<!--====  End of Normal Praise Loop  ====-->
<!--==============================================
=            PRAISE OPT-IN BLOCK            =
===============================================-->
<section id="praise-page-optin-block">

	<main class="container">
		
		<div class="col-sm-12 col-md-6 col-lg-6">

			<article class="text-block text-center">

				<h3 class="sub-heading"><?php the_field('praise_optin_one_subheadline'); ?></h3>

				<h1 class="heading"><?php the_field('praise_optin_one_headline'); ?></h1>

				<div class="leadbox-embed center-block">

					<?php if( have_rows('testimonial_optin_button_block') ) : ?>

			    		<?php while ( have_rows('testimonial_optin_button_block') ) :  the_row(); ?>

				    		<?php if ( get_row_layout() == 'lead_pages_button' ) : ?>	

								<?php the_sub_field('lead_pages_button_code'); ?>
				    			

							<?php elseif( get_row_layout() == 'normal_button_with_url' ) :  ?>


								<a class="btn btn-primary btn-lg" href="<?php the_sub_field('normal_button_url'); ?>" target="_blank"><?php the_sub_field('normal_button_text'); ?></a>
						      	
							
							<?php endif; ?>

						<?php endwhile; ?>

					<?php endif; ?>		

				</div>			
				
			</article>
			
		</div>
		<div class="col-md-6 col-lg-6 visible-md visible-lg">

			<figure class="image-block">
				
				<img class="optin-right-image img-responsive" src="<?php the_field('praise_optin_one_image'); ?>" alt="">

			</figure>
			
		</div>

	</main>
	
</section>

<!--==========================================
=            VIDEO PRAISE SECTION            =
===========================================-->
<section id="video-praise-loop" class="container">

	<main class="container">
		
		<div class="flex-container">

			<article class="text-box flex-item text-center" v-for="post in posts">

				<figure class="video-box">

				    <div class="video">

				        <div class="embed-responsive embed-responsive-16by9" v-if="post.acf.choose_video_type[0].acf_fc_layout === wistia">

				        	<div v-html="post.acf.choose_video_type[0].wistia_video_code "></div>  		

							<!-- // <script src="https://fast.wistia.com/embed/medias/qbk5zsvwii.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:50.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_qbk5zsvwii videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div> -->

				        </div>

				        <div class="embed-responsive embed-responsive-16by9" v-else-if="post.acf.choose_video_type[0].acf_fc_layout === youtube">
								
				            <iframe class="embed-responsive-item" :src="url_1+post.acf.choose_video_type[0].youtube_video_id_only+url_2"></iframe>

				        </div>
					
				    </div>

				</figure>	

				<h4 class="subheading">{{ post.acf.client_description }}</h4>
				<h2 class="heading">{{ post.title.rendered }}</h2>
				<p class="praise-text">
					{{ post.acf.client_content }}
				</p>

			</article>
			

		</div>

	</main>	

</section> <!-- End Container -->	


<!--====  End of VIDEO PRAISE SECTION  ====-->
<!--==============================================
=            PRAISE OPT-IN BLOCK            =
===============================================-->
<section id="praise-page-optin-block">

	<main class="container">
		
		<div class="col-sm-12 col-md-6 col-lg-6">

			<article class="text-block text-center">

				<h3 class="sub-heading"><?php the_field('praise_optin_one_subheadline'); ?></h3>

				<h1 class="heading"><?php the_field('praise_optin_one_headline'); ?></h1>

				<div class="leadbox-embed center-block">

					<?php if( have_rows('testimonial_optin_button_block') ) : ?>

			    		<?php while ( have_rows('testimonial_optin_button_block') ) :  the_row(); ?>

				    		<?php if ( get_row_layout() == 'lead_pages_button' ) : ?>	

								<?php the_sub_field('lead_pages_button_code'); ?>
				    			

							<?php elseif( get_row_layout() == 'normal_button_with_url' ) :  ?>


								<a class="btn btn-primary btn-lg" href="<?php the_sub_field('normal_button_url'); ?>" target="_blank"><?php the_sub_field('normal_button_text'); ?></a>
						      	
							
							<?php endif; ?>

						<?php endwhile; ?>

					<?php endif; ?>		

				</div>			
				
			</article>
			
		</div>
		<div class="col-md-6 col-lg-6 visible-md visible-lg">

			<figure class="image-block">
				
				<img class="optin-right-image img-responsive" src="<?php the_field('praise_optin_one_image'); ?>" alt="">

			</figure>
			
		</div> 

	</main>
	
</section>

<!--=================================================================
=            Vue JS Code For Praise & Video Praise Loops            =
==================================================================-->

<script type="text/javascript">

new Vue ({
  el: '#normal-praise-loop',
  data: {

    ajax:           '<?php echo get_site_url(); ?>',
    posts:          '',

  },  
  created: function() {

    this.getNews();

  },
  methods: {
     getNews: function() {

        var app = this;

         // axios.get( app.ajax + '/wp-json/wp/v2/posts?categories=5&per_page=100')
         // axios.get( app.ajax + '/wp-json/wp/v2/posts?per_page=100')
         axios.get( app.ajax + '/wp-json/wp/v2/testimonials-api?per_page=100')
          .then(function(response) {
            app.posts = response.data;

            return app.posts;
        })
         .catch(function(error){
           console.log(error);
         });

     },
  }

});

new Vue ({
  el: '#video-praise-loop',
  data(){

  	return {

    	ajax:       '<?php echo get_site_url(); ?>',
    	posts:      '',
    	youtube: 	'youtube_video',
    	wistia: 	'wistia_video',
    	url_1: 		'https://www.youtube.com/embed/',
    	url_2: 		'?wmode=opaque&autoplay=0&loop=1&controls=1&showinfo=0&rel=0'
	}

  },  
  created: function() {

    this.getNews();

  },
  methods: {
     getNews: function() {

        var app = this;

         axios.get( app.ajax + '/wp-json/wp/v2/video-testimonials-api?per_page=100')
          .then(function(response) {
            app.posts = response.data;

            return app.posts;
        })
         .catch(function(error){
           console.log(error);
         });

     },
  }

});


</script>

<?php
get_footer();
