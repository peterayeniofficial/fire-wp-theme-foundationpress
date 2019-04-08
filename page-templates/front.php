<?php
/*
Template Name: Front
*/
get_header(); ?>

<header class="front-hero" role="banner">

<div class="orbit" role="region" aria-label="Small Business Insurance Company" data-orbit>
	<ul class="orbit-container">
		<button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
		<button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
		<li class="orbit-slide is-active">
			<div class="marketing">
				<div class="tagline">
					<h1>Small Business <br> Insurance Agency</h1>
					<h4 class="subheader">AN INSURANCE COMPANY</h4>
				</div>
			</div>
		</li>
		<li class="orbit-slide">
		<div class="marketing">
				<div class="tagline">
					<h1>Small Business <br> Insurance Agency</h1>
					<h4 class="subheader">AN INSURANCE COMPANY</h4>
				</div>
			</div>
		</li>
	</ul>
</div>

</header>



<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="intro" role="main">
	<div class="fp-intro">

		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php
					wp_link_pages(
						array(
							'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
							'after'  => '</p></nav>',
						)
					);
				?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</div>

	</div>

</section>
<?php endwhile; ?>
<?php do_action( 'foundationpress_after_content' ); ?>

<div class="section-divider">
</div>

<section class="products">
	<header class="main-header">
		<p>Product & Services</p>
		<h2>Insurance Coverage</h2>
	</header>
</section>

	<div class="orbit" role="region" aria-label="Our Services and Products" data-orbit>
	<ul class="orbit-container">
		<button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
		<button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
		<li class="orbit-slide is-active">

		<div class="products">
		<div class="travel">
					<div class="card">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/travel-insurance.jpg" alt="Travel Insurance">
						<div class="card-content">
							<h4>Travel Insurance</h4>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In placeat modi ab voluptatem suscipit. Deleniti.</p>
							<a class="button" href="#">Learn More</a>
						</div>
					</div>
				</div>

				<div class="home">
					<div class="card">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/home-insurance.jpg" alt="Home Insurance">
						<div class="card-content">
							<h4>Home Insurance</h4>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In placeat modi ab voluptatem suscipit. Deleniti.</p>
							<a class="button" href="#">Learn More</a>
						</div>
					</div>
				</div>

				<div class="auto">
					<div class="card">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/auto-insurance.jpg" alt="Auto Insurance">
						<div class="card-content">
							<h4>Auto Insurance</h4>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In placeat modi ab voluptatem suscipit. Deleniti.</p>
							<a class="button" href="#">Learn More</a>
						</div>
					</div>
				</div>
		</div>
				</li>
				<li class="orbit-slide">
				<div class="products">
		<div class="travel">
					<div class="card">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/travel-insurance.jpg" alt="Travel Insurance">
						<div class="card-content">
							<h4>Travel Insurance</h4>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In placeat modi ab voluptatem suscipit. Deleniti.</p>
							<a class="button" href="#">Learn More</a>
						</div>
					</div>
				</div>

				<div class="home">
					<div class="card">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/home-insurance.jpg" alt="Home Insurance">
						<div class="card-content">
							<h4>Home Insurance</h4>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In placeat modi ab voluptatem suscipit. Deleniti.</p>
							<a class="button" href="#">Learn More</a>
						</div>
					</div>
				</div>

				<div class="auto">
					<div class="card">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/auto-insurance.jpg" alt="Auto Insurance">
						<div class="card-content">
							<h4>Auto Insurance</h4>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In placeat modi ab voluptatem suscipit. Deleniti.</p>
							<a class="button" href="#">Learn More</a>
						</div>
					</div>
				</div>
		</div>
				</li>
			</ul>
			<nav class="orbit-bullets">
        	<button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
					<button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
				</nav
</div>

<div class="section-divider">
</div>

<section class="about">
	<header>
		<h2>
			We are trusted Agency Company
		</h2>
	</header>

	<div class="about--image">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/about--image.jpg" alt="Image of people's hands">
	</div>
		<div class="about--content grid-x grid-padding-x align-right">
		<p class="cell small-4">Eenim dolorem vero id doloribus reiciendis voluptates pariatur repellat blanditiis veritatis quasi possimus quod. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime vel labore asperiores hic odit, ipsum quidem doloribus inventore sit exercitationem sint illo rem ex nisi porro eos fugit necessitatibus provident!</p>
		<p class="cell small-4">sequi ratione reiciendis laborum blanditiis nesciunt ex in, ut voluptates laudantium quisquam tenetur animi voluptatibus atque?</p>
	</div>
</section>

<div class="section-divider">
</div>

<section class="whyChoseUs">
<div class="grid-x grid-padding-x">
  <div class="small-12 medium-6 cell">	<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/why-choose-us-2.jpg" alt="Image of people's hands"></div>
  <div class="small-12 medium-6 cell align-center-middle align-self-middle">
	<div class="whyChoseUs-content">
	<header class="content-heading">
		<p>Out Standing Services</p>
		<h2>Why Choose Us</h2>
	</header>
	<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio magni, provident quam id, inventore officia quis ipsa voluptatem maiores sint
		tempore perspiciatis obcaecati ipsam excepturi dolores cumque qui saepe esse. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed porro, sit doloribus, commodi incidunt molestiae animi voluptatum veritatis, modi repudiandae voluptatem. Vero aut, soluta veniam voluptate esse quam fugiat? Cum.</p>
	<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium, doloremque sapiente placeat ullam error nam repudiandae reiciendis magnam doloribus nulla esse ipsa ratione. Incidunt, molestias debitis unde fugiat minima necessitatibus.</p>
	</div>
				</div>
</div>
<div class="grid-x grid-padding-x">
  <div class="small-12 medium-6 cell align-center-middle align-self-middle">
	<div class="whyChoseUs-content">
	<div class="content-heading">
		<p>Out Standing Services</p>
		<h2>Why Choose Us</h2>
	</div>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, obcaecati minus. Et voluptates ducimus a esse ab soluta rerum blanditiis, quis iste explicabo praesentium debitis culpa eum earum sequi perspiciatis.
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos expedita numquam voluptatum quia labore minima, accusamus dolor! Cumque qui fugiat reprehenderit error modi sequi, expedita rem unde culpa dolor mollitia.
		</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, delectus. Vel dolor asperiores molestiae doloribus cumque culpa rem. Officia optio eum reprehenderit exercitationem, laborum at molestias sed voluptate delectus suscipit.</p>
		</div>
	</div>
  <div class="small-12 medium-6 cell">	<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/why-choose-us.jpg" alt="Image of people's hands"></div>
</div>
</section>

<div class="section-divider">
</div>

<section class="benefits">
	<header>
		<p>Out Standing Services</p>
		<h2>Why Choose Us</h2>

	</header>

	<div class="support">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/icon-2.jpg" alt="24/7 Support">
		<h3>24/7 Support</h3>
		<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis neque eos rem facere eaque nulla?</p>
	</div>

	<div class="trusted">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/icon-1.jpg" alt="Trusted People">
		<h3>Trusted People</h3>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt exercitationem numquam similique, harum magni corporis.</p>

	</div>

	<div class="experience">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/icon-3.jpg" alt="12 Years Experience">
		<h3>12 Years Experience</h3>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea voluptas sint, at voluptatibus repellat omnis.</p>

	</div>

	<div class="joinUs">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/icon-4.jpg" alt="Join with Us">
		<h3>Join with Us</h3>
		<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis, voluptas eligendi deleniti exercitationem sapiente vel.</p>
	</div

</section>

<div class="section-divider">
</div>

<section class="insureNow equalizer">
	<div class="insureNow-image">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/home-insurance.jpg" alt="Home Insurance">
	</div>

	<div class="insureNow-content">
	<header>
		<h2>Out Standing Services</h2>
	</header>
		<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere tenetur rerum, blanditiis soluta qui eos perspiciatis similique deleniti obcaecati odio accusamus porro temporibus excepturi quia quibusdam mollitia ipsam aliquid quas.</p>
		<a class="button" href="#">Learn More</a>
	</div>

</section>

<div class="section-divider">
</div>

<section class="founders">

	<header>
		<h2>Our Founders</h2>
	</header>
	<?php

		$args = array(
			'post_type' => 'staff',
			'posts_per_page' => 2,
		);

		$staffposts = new WP_Query($args);

		while ($staffposts->have_posts()) {
			$staffposts->the_post();

	?>
	<div class="ceo">
	<img src="<?php echo get_the_post_thumbnail_url( get_the_ID() );?>" alt="<?php echo get_the_post_thumbnail_caption( get_the_ID() );?>">
	<header>
		<h3><?php the_title(); ?></h3>
		<p><?php the_field('designation'); ?></p>
	</header>
		<p><?php the_content(); ?></p>
	</div>
	<?php
	}
	wp_reset_query();
		?>


</section>

<div class="section-divider">
</div>

<section class="testimonials">
	<header>
		<h2>Testimonies</h2>
	</header>
		<?php

$args = array(
	'post_type' => 'testimonial',
	'posts_per_page' => 1,
);

$testimonialposts = new WP_Query($args);

while ($testimonialposts->have_posts()) {
	$testimonialposts->the_post();

?>

	<div class="testimony">
	<img src="<?php echo get_the_post_thumbnail_url( get_the_ID() );?>" alt="<?php echo get_the_post_thumbnail_caption( get_the_ID() );?>">
		<h3><?php the_title(); ?></h3>
		<blockquote><?php the_content(); ?></blockquote>
	</div>

	<?php
	}
	wp_reset_query();
		?>


</section>


<?php get_footer();
