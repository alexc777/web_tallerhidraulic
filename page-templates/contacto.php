<?php
/**
 * Template Name: Contacto
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published
 *
 * @package understrap
 */
get_header(); ?>

<div class="wrapper m50px" id="full-width-page-wrapper">
	<div id="primary" class="col-md-12 spd spi content-area">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="ed-container">
				<div class="ed-item">
					<h1>Listo para cargar formulario de contacto</h1>
				</div>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- #primary -->
</div><!-- Wrapper end -->
<?php get_footer(); ?>