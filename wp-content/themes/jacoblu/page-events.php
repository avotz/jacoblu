<?php
 /*
    Template Name: Page Events 
     */


get_header(); ?>
	<section class="banner banner-section">
		<?php if ( has_post_thumbnail() ) :

	  	 	$id = get_post_thumbnail_id($post->ID);
	  	 	$thumb_url = wp_get_attachment_image_src($id,'banner-mobile', true);
				$big_url = wp_get_attachment_image_src($id,'banner-thumb', true);
	  	 	?>
	    	
		
	                  
	          <?php  if(wp_is_mobile()){ ?>
	              <div class="item" style="background-image: url('<?php echo $big_url[0] ?>');">
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
			
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					

				endwhile; // End of the loop.
				?>
			<div class="events-container">
				<?php
		            $args = array(
		              'post_type' => 'event',
		             /*'tax_query' => array(
		                array(
		                  'taxonomy' => 'film-category',
		                  'field' => 'slug',
		                  'terms' => $category_slug
		                )
		              )*/
		              
		            );
		            $events = new WP_Query( $args );
		            if( $events->have_posts() ) {
		              while( $events->have_posts() ) {
		                 $events->the_post();
		                ?>
		                  <div class="events-item">
		                      <?php if ( has_post_thumbnail() ) :

		                          $id = get_post_thumbnail_id($post->ID);
		                          $thumb_url = wp_get_attachment_image_src($id,'large', true);
		                          ?>
		                          
		                        <div class="events-item-img" style="background-image: url('<?php echo $thumb_url[0] ?>');"><a href="<?php the_permalink(); ?>" class="events-item-link"></a></div>
		                              
		                      <?php endif; ?>
		                      <div class="events-item-title">
		                        <h3><a href="<?php /*the_permalink();*/ ?>#"><?php the_title(); ?></a></h3>
		                        <div class="events-item-date">
		                        	<?php echo rwmb_meta( 'rw_event_date' ); ?>
		
		                        </div>
		                      </div>
		                      <div class="events-item-description">
		                       <?php the_excerpt() ?>
		                       
		                      </div>
		                       
		                  </div>
		                  
		                   
		               
		                  
		                <?php
		              }
		            }
		          ?>
			</div>
			
		</div>
	</section>

<?php
/*get_sidebar();*/
get_footer();
