<?php
 /*
    Template Name: Page Contact 
     */


get_header(); ?>
	<section class="banner banner-section">
		<?php if ( has_post_thumbnail() ) :

	  	 	$id = get_post_thumbnail_id($post->ID);
	  	 	$thumb_url = wp_get_attachment_image_src($id,'banner-mobile', true);
				$big_url = wp_get_attachment_image_src($id,'banner-thumb', true);
	  	 	?>
	    	
		
	                  
	          <?php  if(wp_is_mobile()){ ?>
	              <div class="item" style="background-image: url('<?php echo $thumb_url[0] ?>');">
										<div class="inner">
											<div class="item-info">
												<span ><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></span>
												
												
											</div>
											
											
										</div>
									</div>

					<?php  }else{ ?>
								<div class="item" style="background-image: url('<?php echo $big_url[0] ?>');">
									<div class="inner">
										<div class="item-info">
											<span ><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></span>
											
											
										</div>
										
										
									</div>
								</div>
	          <?php } ?>
		
		<?php else : ?>

			<div class="item" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/section-banner.jpg');">
	  	  		<div class="inner">
		  	  		<div class="item-info">
		  	  			<span ><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></span>
		  	  			
		  	  			
		  	  		</div>
		  	  		
		  	  		
		  	  	</div>
	  	  	</div>

		<?php endif; ?>


		
	  	  
	  	  	  
		
		<div id="scroll-down">
			<a href="#main" class="anchor"><i class="fa fa-angle-down"></i></a>
		</div>
	</section>
	<section id="main" class="main">
		<div class="inner">
			<div class="contact-container">	
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					

				endwhile; // End of the loop.
				?>
				<div class="contact-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7867.442792398253!2d-84.633683!3d9.61924!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4e02a7f5316d7942!2sJac%C3%B3+Blu+Beach+Club!5e0!3m2!1ses-419!2sus!4v1485205762145" width="600" height="380" frameborder="0" style="border:0" allowfullscreen ></iframe>
					<div class="address">	
						<!-- Del Parque Central de Jaco, 100m N, 100m O.<br>
						Tel: 506-2643-4372, e-mail: info@jacoblu.com <br> -->
						Schedule: Monday to Sunday 10:00 AM – 24:00 Midnight<br>
						<!--  <a href="waze://?q=Jacó+Blu+Beach+Club&amp;navigate=yes"  target="_blank" class="btn btn btn-app"><i class="fa fa-map-marker"></i> <strong>Abrir en Waze</strong></a>

              			<a href="http://maps.google.com/?saddr=Current+Location&daddr=Jacó+Blu+Beach+Club" target="_blank" class="btn btn btn-app"><i class="fa fa-map-marker"></i> <strong>Abir en Google Maps</strong></a> -->
					</div>
				</div>
			</div>
			
		</div>
	</section>

<?php
/*get_sidebar();*/
get_footer();
