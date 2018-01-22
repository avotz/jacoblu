<?php
 /*
    Template Name: Page Offer 
     */
$url_parse = wp_parse_url($_SERVER['REQUEST_URI']);

$segments = explode('/', $url_parse['path']);
//var_dump($segments[2]);
$code = $segments[2];

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
		
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					

				endwhile; // End of the loop.
				?>
				
			
			
		</div>
	</section>


<script>
    var el = document.querySelector("input[name='promos']");
    el.value = '<?php echo $code; ?>';

</script>
<?php
/*get_sidebar();*/
get_footer();

