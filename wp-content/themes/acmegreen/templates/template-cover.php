<?php
/**
 * Template Name: Cover Template
 */

get_header();
?>

<main id="site-content" role="main">

	<?php
		if ( have_posts() ) {

			while ( have_posts() ) {
				the_post();

				get_template_part( 'template-parts/content-cover' );
			}
		}
	?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
