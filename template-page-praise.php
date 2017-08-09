<?php
/**
 * The template for displaying all pages.
 * Template Name: Praise Page Template
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

<!-- 			<article class="text-box flex-item text-center">
				<figure>
					<img class="img-responsive img-circle center-block" src="/wp-content/uploads/2017/07/kelly-soto-150x150.jpg" alt="">
				</figure>
				<h4 class="subheading">Consultant and Network Marketer</h4>
				<h2 class="heading">Kelly Soto</h2>
				<p class="praise-text">
					Tiana is the real deal. We are in the early stages of my project but I'm so confident that I made the choice to work with her! In our very first session, she has already impressed me beyond belief. Tiana is honest and caring and she can see your vision before you can even see it! My super rough draft already feels like me! 
				</p>
			</article>

			<article class="text-box flex-item text-center">
				<figure>
					<img class="img-responsive img-circle center-block" src="/wp-content/uploads/2017/07/Jenny-Giblin-150x150.jpg" alt="">
				</figure>
				<h4 class="subheading">Yogi and Entrepreneur</h4>
				<h2 class="heading">Jenny Giblin</h2>
				<p class="praise-text">
					I am so lucky to have connected with Tiana! Her advice was exactly what I Needed both personally and professionally. Talking to her is like talking to an old friend who also happens to be an expert at what she does! I highly, highly recommend her!
				</p>
			</article>

			<article class="text-box flex-item text-center">
				<figure>
					<img class="img-responsive img-circle center-block" src="/wp-content/uploads/2017/07/Barry-Johnson-150x150.jpg" alt="">
				</figure>
				<h4 class="subheading">Author and Consultant</h4>
				<h2 class="heading"> Barry John Johnson</h2>
				<p class="praise-text">
					Tiana has provided me with website development services. She offers more than simply tech skills. She is creative & process oriented so that your project evolves and is further defined making for a better product than planned. In the end, she wants to make sure that you are completely happy without feeling like you have been nickel and dimed for each small change or interaction. HIGHLY RECOMMENDED.
				</p>
			</article>

			<article class="text-box flex-item text-center">
				<figure>
					<img class="img-responsive img-circle center-block" src="/wp-content/uploads/2017/07/Charlene-Reed-150x150.jpg" alt="">
				</figure>
				<h4 class="subheading">Interior Design Professor at Orange Coast College, Huntington Beach, CA</h4>
				<h2 class="heading">Charlene Reed</h2>
				<p class="praise-text">
					I’ve worked with Firefly Media Services remotely on a website set-up and various consultations for social media marketing. Tiana is professional and knowledgeable about WordPress, graphics and social media marketing.
					I’m thankful to have found someone who can accommodate a variety of services in whatever capacity I’m in need of, from full-service website and graphic design to hourly consultative phone calls about marketing strategies. Easy to work with remotely, I highly recommend this company.
				</p>
			</article>

			<article class="text-box flex-item text-center">
				<figure>
					<img class="img-responsive img-circle center-block" src="/wp-content/uploads/2017/07/Donna-Heinbach-150x150.jpg" alt="">
				</figure>
				<h4 class="subheading">Business Coaching</h4>
				<h2 class="heading">Consultant and Nurse</h2>
				<p class="praise-text">
					Tiana has been so helpful in the development of my website and so so wonderful with explaining this process that I understand. She has the passion of helping others and is A+ in this. She truly loves what she does and shares with you all the steps needed to be successful. I am glad I invested in myself with her guidance.
				</p>
			</article> -->

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
			
			<article class="text-box flex-item text-center">
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

			<!-- <article class="text-box flex-item text-center">
				<figure class="video-box">

				    <div class="video">

				        <div class="embed-responsive embed-responsive-16by9">

				            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ChbghzEJQL8"></iframe>

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

		<div class="load-more-btn-box row text-center hide">
			<a class="btn btn-success btn-lg" href="#">LOAD MORE</a>
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

<script type="text/javascript">

new Vue ({
  el: '#normal-praise-loop',
  data: {
    videoTitle:     'VIDEOS',  
    news:           'LATEST NEWS',  
    ajax:           '<?php echo get_site_url(); ?>',
    posts:          '',
    vids:           '',
    singlePost:     [''],
    show:           false,
    id:             '' 
  },  
  created: function() {

    this.getNews();
    // this.getVids();

    this.getSingle(758);
    // this.getSingleVid(3310);
  },
  methods: {
     getNews: function() {

        var app = this;

         // axios.get( app.ajax + '/wp-json/wp/v2/posts?categories=5&per_page=100')
         // axios.get( app.ajax + '/wp-json/wp/v2/posts?per_page=100')
         axios.get( app.ajax + '/wp-json/wp/v2/testimonials-api?per_page=100')
          .then(function(response) {
            app.posts = response.data;
            app.id = app.posts[0].id;

            console.log(app.posts);

            return app.posts;
        })
         .catch(function(error){
           console.log(error);
         });

     },
     
     getSingle: function(id, show) {

        var app = this;

        console.log("this is id: " + id);

         axios.get( app.ajax + '/wp-json/wp/v2/posts/' + id)
          .then(function(response) {
            // app.singlePostData = response.data;
            // console.log(response.data.title.rendered);
            // console.log(response.data);
            

            app.show = true;

            app.singlePost = {


              id:             response.data.id,
              title:          response.data.title.rendered,
              content:        response.data.content.rendered,
              featured_full:  response.data.featured_full 
            }

            // console.log( app.singlePost );

            return app.singlePost;

            app.show = false;
        })
         .catch(function(error){
           console.log(error);
         })
     },


     getSingleNews: function(id, show) {

        var app = this;

        console.log("this is id: " + id);

         axios.get( app.ajax + '/wp-json/wp/v2/posts/' + id)
          .then(function(response) {
            // app.singlePostData = response.data;
            // console.log(response.data.title.rendered);
            // console.log(response.data);
            

            app.show = true;

            app.singlePost = {


              id:             response.data.id,
              title:          response.data.title.rendered,
              content:        response.data.content.rendered,
              featured_full:  response.data.featured_full 
            }

            // console.log( app.singlePost );

            return app.singlePost;

            app.show = false;
        })
         .catch(function(error){
           console.log(error);
         })
     },


         
  }

});


// new Vue ({
//   el: '#app',
//   data: {
//     message:  'Vue 2.0 is Working',
//     ajax:     'Posts Should Display Here',
//     posts:    ''
//   },
//   methods: {
//     selectFruit(post) {
//       this.message = post;
//     }
//   },
//   created: function() {
//     // console.log('created ran');
//     this.$http.get('http://dmol.local/wp-json/wp/v2/posts/')
//       .then(function(response){
//           console.log(response);

//           this.posts = response.data;
//       });
//   }
// });




// new Vue ({
//   el: '#app',
//   data: {
//     message: 'Hello Vue 2.0',
//     fruits: [ 'apple', 'Microsoft', 'VMware', 'OSx' ]
//   },
//   methods: {
//     selectFruit(fruit) {
//       this.message = fruit;
//     }
//   }
// });  
</script>

<?php
get_footer();
