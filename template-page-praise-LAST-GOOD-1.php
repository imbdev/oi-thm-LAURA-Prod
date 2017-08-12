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
					<?php the_field('praise_optin_one_leadpages_code'); ?>
					
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

				<h3 class="sub-heading">JOIN OVER 200,000 SUBSCRIBERS</h3>

				<h1 class="heading">GET FREE UPDATES</h1>

				<div class="leadbox-embed center-block">
					<script src="//static.leadpages.net/leadboxes/current/embed.js" async defer></script> <button data-leadbox-popup="14e99a133f72a2:142918c46b46dc" style="background: rgb(67, 72, 117);border-color: rgb(67, 72, 117);border-radius: 20px;color: #FFFFFF;display: inline-block;vertical-align: middle;padding: 16px 32px;min-width: 192px;border: 1px solid rgb(67, 72, 117);font-size: 1rem;font-family: Helvetica, Arial, sans-serif;text-align: center;outline: 0;line-height: 1;cursor: pointer;-webkit-transition: background 0.3s, color 0.3s, border 0.3s;transition: background 0.3s, color 0.3s, border 0.3s;  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.6);">CLICK HERE TO SUBSCRIBE</button> 									
				</div>			
				
			</article>
			
		</div>
		<div class="col-md-6 col-lg-6 visible-md visible-lg">

			<figure class="image-block">
				
				<img class="optin-right-image img-responsive" src="/wp-content/uploads/2017/08/mical-praise-OPT-IN-350x350.png" alt="">

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

				    	<?php if( have_rows('choose_video_type') ) : ?>

				    		<?php while ( have_rows('choose_video_type') ) :  the_row(); ?>

					    		<?php if ( get_row_layout() == 'wistia_video' ) : ?>	

					    			<?php the_sub_field('wistia_video_code'); ?>

							        <div class="embed-responsive embed-responsive-16by9">

										
										<script src="https://fast.wistia.com/embed/medias/qbk5zsvwii.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:50.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_qbk5zsvwii videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div>

							        </div>

								<?php elseif( get_row_layout() == 'youtube_video' ) :  ?>

					    			<?php the_sub_field('youtube_video_id_only'); ?>


							        <div class="embed-responsive embed-responsive-16by9">

							            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/eJnWPhSQjPs?wmode=opaque&autoplay=0&loop=1&controls=1&showinfo=0&rel=0"></iframe>

							        </div>
								
								<?php endif; ?>

							<?php endwhile; ?>

						<?php endif; ?>		

				    </div>

				</figure>	

				<h4 class="subheading">{{ post.acf.client_description }}</h4>
				<h2 class="heading">{{ post.title.rendered }}</h2>
				<p class="praise-text">
					{{ post.acf.client_content }}
				</p>
			</article>
			
			<!-- <article class="text-box flex-item text-center">
				<figure class="video-box">

				    <div class="video">

				        <div class="embed-responsive embed-responsive-16by9">
							
							<script src="https://fast.wistia.com/embed/medias/qbk5zsvwii.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:50.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_qbk5zsvwii videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div>

				        </div>

				    </div>

				</figure>				
				<h4 class="subheading">Singer & Song Writer</h4>
				<h2 class="heading">Cathy Heller</h2>
				<p class="praise-text">
					Cathy is the owner of Catch The Moon Music, a leading Ad Agency and TV/Film Music Placement company in Los Angeles, California. Since implementing Bullseye Funnels, Cathy closed $85,000 in sales in 2 weeks with the Bullseye funnel system as well as added over 1200 new leads in 30 days !
				</p>
			</article>
			
			<article class="text-box flex-item text-center">
				<figure class="video-box">

				    <div class="video">

				        <div class="embed-responsive embed-responsive-16by9">

							<script src="https://fast.wistia.com/embed/medias/encvlvsx52.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_encvlvsx52 videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div>
				        
				        </div>

				    </div>

				</figure>				
				<h4 class="subheading">Musician & Entrepreneur</h4>
				<h2 class="heading">Glenn Allen</h2>
				<p class="praise-text">
					Glenn is the owner of I Am An Orchestra, a leading Music Theory and Songwriting company. Since implementing Bullseye Funnels, Glenn finally pieced together his entire online marketing funnel for new leads and sales.
				</p>
			</article>

			<article class="text-box flex-item text-center">
				<figure class="video-box">

				    <div class="video">

				        <div class="embed-responsive embed-responsive-16by9">

				            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/eJnWPhSQjPs?wmode=opaque&autoplay=0&loop=1&controls=1&showinfo=0&rel=0"></iframe>

				        </div>

				    </div>

				</figure>				
				<h4 class="subheading">Publicity & Visibility</h4>
				<h2 class="heading">"My Income Goal Trippled"</h2>
				<p class="praise-text">
					consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. 
				</p>
			</article> -->

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

				<h3 class="sub-heading">JOIN OVER 200,000 SUBSCRIBERS</h3>

				<h1 class="heading">GET FREE UPDATES</h1>

				<div class="leadbox-embed center-block">
					<script src="//static.leadpages.net/leadboxes/current/embed.js" async defer></script> <button data-leadbox-popup="14e99a133f72a2:142918c46b46dc" style="background: rgb(67, 72, 117);border-color: rgb(67, 72, 117);border-radius: 20px;color: #FFFFFF;display: inline-block;vertical-align: middle;padding: 16px 32px;min-width: 192px;border: 1px solid rgb(67, 72, 117);font-size: 1rem;font-family: Helvetica, Arial, sans-serif;text-align: center;outline: 0;line-height: 1;cursor: pointer;-webkit-transition: background 0.3s, color 0.3s, border 0.3s;transition: background 0.3s, color 0.3s, border 0.3s;  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.6);">CLICK HERE TO SUBSCRIBE</button> 									
				</div>			
				
			</article>
			
		</div>
		<div class="col-md-6 col-lg-6 visible-md visible-lg">

			<figure class="image-block">
				
				<img class="optin-right-image img-responsive" src="/wp-content/uploads/2017/08/mical-praise-OPT-IN-350x350.png" alt="">

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
