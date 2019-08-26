<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">
				<p>
					© FireFly Employee Directory 2019
			</p>
			<div id="footer-social">
				<span class="social">
					<a target="_blank" rel="nofollow" href="http://www.facebook.com/pages/FireFly-Computers/166599886736220"><i class="fab fa-facebook-f fa-2x"></i></a>
					</span> 
				<span class="social">
					<a target="_blank" rel="nofollow" href="http://twitter.com/#!/FireFlyComputer"><i class="fab fa-twitter fa-2x"></i></a></span> 
				<span class="social">
					<a target="_blank" rel="nofollow" href="http://www.linkedin.com/company/firefly-computers"><i class="fab fa-linkedin-in fa-2x"></i></a></span>
			</div>
			
			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 * do_action( 'storefront_footer' );
			 */
			
			?>
<!--
			<div id="contact-slideout">
	    <div id="slideout-inner">
	      <div id="slideout-phone">Phone: <a href="tel:+16125644088">612-564-4088</a><br>Toll Free: <a href="tel:+18669508868">1-866-950-8868</a></div>
	      <div id="slideout-email"><a href="https://ffcompdev.wpengine.com/contact1/" class="caps">Email Us</a></div>
	    </div>
</div>
-->
		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->


<?php wp_footer(); ?>
<!-- 		<script>
			
var j = jQuery.noConflict();
			j(function(ready){
		j(".swatch").click(function() {
		if(j("span").hasClass("swatch-black selected") && j("span").hasClass("swatch-orange selected")){
                 alert("ere");
            j("div.woocommerce-variation.single_variation").after("Some text after ");	
             }  else if(j("span").hasClass("swatch-black ") && j("span").hasClass("swatch-orange")){
	            alert("ere");
            j("div.woocommerce-variation.single_variation").after("Some text after ASDasd ");
			 }		
         });	
				});	
</script> -->



<script>
var j = jQuery.noConflict();
j(function(ready){
j(".out-of-stock").html("something");
});	
</script>

</body>
</html>
