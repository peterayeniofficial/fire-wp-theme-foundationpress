<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer>

<section class="footer--main">
	<div class="footer--about">
		<h5>About</h5>
		<p>Lc egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie augue sit.</p>
		<a class="button" href="#">Learn More</a>
	</div>

<div class="quickMenu">
	<h5>Quick Menu</h5>
	<ul class="menu vertical">
	<li><a href="#">One</a></li>
	<li><a href="#">Two</a></li>
	<li><a href="#">Three</a></li>
	<li><a href="#">Four</a></li>
	</ul>
</div>

<div class="insurance">
	<h5>Insurance</h5>
	<ul class="menu vertical">
		<li><a href="#">One</a></li>
		<li><a href="#">Two</a></li>
		<li><a href="#">Three</a></li>
		<li><a href="#">Four</a></li>
	</ul>
</div>

<div class="socialmedia">
	<h5>We are Social</h5>
	<ul class="menu vertical">
		<li><a href="#">One</a></li>
		<li><a href="#">Two</a></li>
		<li><a href="#">Three</a></li>
		<li><a href="#">Four</a></li>
	</ul>
</div

</section>

<div class="footer-grid">
		<?php dynamic_sidebar( 'footer-widgets' ); ?>
	</div>

</footer>



<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
