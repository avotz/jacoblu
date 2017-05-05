<?php
 /*
    Template Name: Page Home
     */

get_header(); ?>

	<section class="banner">
		<div class="owl-carousel ">
	  	  <div class="item" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner1.jpg');">
	  	  		<div class="inner">
		  	  		<div class="item-info">
		  	  			<span >Blu Lifestyle</span>
		  	  			<p>un lugar  ideal para los amantes del Sol y viajeros activos, con playas de arena volcánica color canela, frondosas selvas tropicales verdes y montañas con vegetación.</p>
		  	  			
		  	  		</div>
		  	  		
		  	  		
		  	  	</div>
	  	  </div>
	  	  <div class="item" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner-sun.jpg');">
	  	  		<div class="inner">
		  	  		<div class="item-info">
		  	  			<span >Sun</span>
		  	  			
		  	  			
		  	  		</div>
		  	  		
		  	  		
		  	  	</div>
	  	  </div>
	  	  <div class="item" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner-fun.jpg');">
	  	  		<div class="inner">
		  	  		<div class="item-info">
		  	  			<span >Fun</span>
		  	  			
		  	  			
		  	  		</div>
		  	  		
		  	  		
		  	  	</div>
	  	  </div>
	  	  <div class="item" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner-food.jpg');">
	  	  		<div class="inner">
		  	  		<div class="item-info">
		  	  			<span >Food</span>
		  	  		
		  	  			
		  	  		</div>
		  	  		
		  	  		
		  	  	</div>
	  	  </div>
	  	  
	  	  	  
		</div>
		<!-- <div id="scroll-down">
			<a href="#main" class="anchor"><i class="fa fa-angle-down"></i></a>
		</div> -->
	</section>
	<!-- <section id="main" class="main">
		<div class="inner">
			<?php/*
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				

			endwhile;*/ // End of the loop.
			?>


		</div>
	</section> -->
	<!-- <section class="boxes-top">
		
		<div class="boxes-top-container">
			<div class="boxes-top-item">
				<div class="bg">
					<h2>Day Pass</h2>
					<div class="info">
						<p>Acceso a un día de disfrute en nuestras instalaciones. Obtienes el $10 en consumo en nuestro Bar o Restaurante. Prueba la experiencia Blu
						</p>
						<a href="<?php echo esc_url( home_url( '/day-pass' ) ); ?>" class="btn more">More</a>
					</div>
					
					<div class="boxes-top-item-header"></div>
					<img src="<?php echo get_template_directory_uri();  ?>/img/box-daily.jpg" alt="Daily Pass">
				</div>
				
			</div>
			<div class="boxes-top-item">
				<div class="bg">
					<h2>Events</h2>
					<div class="info">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore maxime, sapiente fugiat molestias. Tempora, voluptatum repudiandae dignissimos, dicta voluptate placeat a. Ipsum quaerat quasi, quia deserunt enim dicta, doloribus in.
						</p>
						<a href="<?php echo esc_url( home_url( '/events' ) ); ?>" class="btn more">More</a>
					</div>
					
					
					<div class="boxes-top-item-header"></div>
					<img src="<?php echo get_template_directory_uri();  ?>/img/box-events.jpg" alt="Events">
				</div>
				
			</div>
			<div class="boxes-top-item">
				<div class="bg">
					<h2>Restaurant</h2>
					<div class="info">
						<p>Restaurante creado con el concepto de la cocina fusión, con toques de originalidad en cada uno de nuestros platillos.
						</p>
						<a href="#" class="btn more">More</a>
					</div>
					
					<div class="boxes-top-item-header"></div>
					<img src="<?php echo get_template_directory_uri();  ?>/img/box-restaurant.jpg" alt="restaurant">
				</div>
				
			</div>
			<div class="boxes-top-item">
				<div class="bg">
					<h2>Spa</h2>
					<div class="info">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore maxime, sapiente fugiat molestias. Tempora, voluptatum repudiandae dignissimos, dicta voluptate placeat a. Ipsum quaerat quasi, quia deserunt enim dicta, doloribus in.
						</p>
						<a href="#" class="btn more">More</a>
					</div>
					
					<div class="boxes-top-item-header"></div>
					<img src="<?php echo get_template_directory_uri();  ?>/img/box-spa.jpg" alt="spa">
				</div>
				
			</div>
			
		</div>
		
		
	</section>
	<section class="boxes-bottom">
		<div class="boxes-bottom-container">
			<div class="boxes-bottom-item">
				<div class="bg">
					<div class="info">
						<a href="#" class="btn more">Beneficios</a>
					</div>
			
					<img src="<?php echo get_template_directory_uri();  ?>/img/box-beneficios.jpg" alt="Beneficios">
				</div>
				
			</div>
			<div class="boxes-bottom-item">
				<div class="bg">
					<div class="info">
						<a href="#" class="btn more">Gallery</a>
					</div>
			
					<img src="<?php echo get_template_directory_uri();  ?>/img/box-gallery.jpg" alt="Gallery">
				</div>
				
			</div>
			<div class="boxes-bottom-item">
				<div class="bg">
					<div class="info">
						<a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="btn more">Contac Us</a>
					</div>
			
					<img src="<?php echo get_template_directory_uri();  ?>/img/box-contact.jpg" alt="Contac Us">
				</div>
				
			</div>
		</div>

	</section>
	<section class="testimonials">
		<div class="inner">
			<h2 class="feedback-title">Testimonials</h2>    
            <div id="testimonials" class="owl-carousel">
                
                  <div class="feedback-item">
                       
                        <div class="feedback-item-text">
                        	<i class="fa fa-quote-left"></i>

                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero praesentium sequi sit quos dolores, fugiat, commodi nemo nobis dignissimos accusamus ratione minima aliquid, consectetur dolorem quasi corrupti! Quo, fugit commodi.
                        </div> 
                        
                   </div>
                   <div class="feedback-item">
                        
                        
                        <div class="feedback-item-text">
                        	<i class="fa fa-quote-left"></i>
                            Vero praesentium sequi sit quos dolores, fugiat, commodi nemo nobis dignissimos accusamus ratione minima aliquid, consectetur dolorem quasi corrupti! Quo, fugit commodi.
                        </div> 
                        
                   </div>
                      
                  
                

            </div>
		</div>
	</section> -->
	

<?php

get_footer();
