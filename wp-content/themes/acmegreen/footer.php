<?php
/**
 * The template for displaying the footer
 *
 */
?>
		
	<section class="money-back-wrap">
		<div class="container">
			<div class="money-inner-wrap">
				<div class="row">
					<div class="col-md-2">
						<p><img src="<?php echo get_template_directory_uri();?>/img/logo-money-back.png" alt="" /></p>
					</div>    
					<div class="col-md-10">
						<p class="we-all-know">We know you’ll love our products, but if for any reason you dont, we’ll provide a full refund</p>
					</div> 					
				</div>    
			</div>
		</div>
	</section><!--ready-wrap-->
	
	<footer class="footer-wrap">
		<div class="container">
			<div class="narrow-inner-wrap">
				<div class="row">
					<div class="col-md-5">
						<h3>Mailing List</h3>
						<div class="newsletter">
							<form class="form-inline" action="#">
							  <div class="form-group">
								<input type="email" class="form-control" placeholder="Your Email" id="email">
							  </div>
							  <button type="submit" class="btn btn-submit">Sign up</button>
							</form>
						</div>
						<p class="newsletter-desc">Sign up to get the latest on new products and more…</p>
					</div>
					<div class="col-md-4">
						<h3>Main Menu</h3>
						<ul class="footer-main-menu">
							<li><a href="#">SHOP</a></li>
							<li><a href="#">Our History</a></li>
							<li><a href="#">Impact</a></li>
							<li><a href="#">Blog</a></li>	
							<li><a href="#">Help</a></li>
							<li><a href="#">My Account</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<h3>More Info</h3>
						<ul class="more-info">
							<li><a href="#">Shipping Information</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Support</a></li>
							<li><a href="#">Join The Team</a></li>
						</ul>
					</div>
				</div>
			</div>	
		</div>
		<p class="copyright text-center">&copy; 2020 acme<span class="green">Green</span></p>
	</footer>

		<?php wp_footer(); ?>
		<script src="<?php echo get_template_directory_uri();?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>		
		<script>
			jQuery(document).ready(function() { 							
				//mobile menu
				jQuery("#mobileNav .icon").on("click", function(e) {
					e.preventDefault();
					if(jQuery("#mobileMenu").hasClass('shownav')) {					
						jQuery("#mobileMenu").removeClass('shownav');	
					}else {
						jQuery("#mobileMenu").addClass('shownav');
					}
				});
			});				
		</script>

	</body>
</html>
