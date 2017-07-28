<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jacoblu
 */

?>
<?php /*if ( !is_home() && ! is_front_page() ) :*/ ?>
	

<!-- <section class="section-contact">
		<div class="inner">
			<a href="#" class="btn">Discover Us</a>
		</div>
	</section> -->
	<footer class="footer">
		<div class="inner">
			<div class="footer-items">	
				<div class="footer-social">
					<h3>Follow Us</h3>
					<a href="#" class="footer-social-item"><i class="icon-facebook"></i></a>
					<a href="#" class="footer-social-item"><i class="icon-twitter"></i></a>
					<a href="#" class="footer-social-item"><i class="fa fa-google-plus"></i></a>
					<a href="#" class="footer-social-item"><i class="fa fa-instagram"></i></a>
					<a href="#" class="footer-social-item"><i class="fa fa-tripadvisor"></i></a>
					<address>
					<i class="icon-phone"></i> (506) 2643-4372<br>
					<i class="fa fa-envelope-o"></i> info@jacoblu.com
					</address>
					
					
				</div>
				<div class="footer-address">
					<h3>Location</h3>
					<address>
						
						Del Parque Central de Jaco, 100m N, 100m O.<br>
						Jaco, Costa Rica
					</address>
					<a href="waze://?q=Jacó+Blu+Beach+Club&amp;navigate=yes"  target="_blank" class="btn-app"><i class="fa fa-map-marker"></i> <strong>Abrir en Waze</strong></a>

              		<a href="http://maps.google.com/?saddr=Current+Location&daddr=Jacó+Blu+Beach+Club" target="_blank" class="btn-app"><i class="fa fa-map-marker"></i> <strong>Abir en Google Maps</strong></a>
				</div>
				<div class="footer-copyright">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo"><img src="<?php echo get_template_directory_uri();  ?>/img/logo.png" alt="Jaco blu" /></a>
					<span>Copyright &copy; 2017. Avotz</span>
				</div>
			
			</div>
		</div>

	</footer>
<?php /*endif */ ?>
	<!-- <div class="float-form">
		<div class="float-form-header">
			<div class="float-form-header-bg"></div>
			 <div class="title">
			 	Lorem ipsum dolor sit <i class="fa fa-angle-up"></i>
			 </div>
		</div>
		<div class="float-form-featured">
			<h4>Lorem ipsum</h4>
			<div class="price">
				$269
			</div>
			<ul class="featured-list">
				<li>Free Unlimited Wi-Fi</li>
				<li>Free Unlimited Wi-Fi</li>
				<li>Free Unlimited Wi-Fi</li>
			</ul>
			<small>DATE 07/02/2017 - 08/02/2017</small>
			<small>Subject to availability, terms and conditions.</small>
		</div>
		<div class="float-form-content">
			<ul class="content-list">
				<li>Lorem ipsum dolor <span>$274</span></li>
				<li>Lorem ipsum dolor <span>$274</span></li>
				<li>Lorem ipsum dolor <span>$274</span></li>
			</ul>
		</div>
		<div class="float-form-email">
			<p>Subscribe and stay updated, unlock your personalised loyalty promo code and receive exclusive offers.</p>
			<input type="email" placeholder="Your Email address">
			<button class="btn btn-float-form">Unlock Promo Code</button>
		</div>
		
	</div> -->

	

<?php wp_footer(); ?>

</body>
</html>
