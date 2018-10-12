<?php
/*
Template Name: Home Page
*/
get_header(); ?>

<!-- Get Hero -->
<?php get_template_part('template-parts/hero') ?>

<!-- Get Featured Section -->
<?php get_template_part('template-parts/featured') ?>

<!-- Get Featured Section -->

<div id="main-content-section" data-magellan-target="main-content-section">
<div class="row">
	<h2>Recent Projects</h2>
</div>
<?php get_template_part('template-parts/projects') ?>
</div>

<?php get_template_part('template-parts/contact-form') ?>
<!-- <div class="main-container">
	<div class="main-grid">
		<main class="main-content-full-width">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php comments_template(); ?>
			<?php endwhile; ?>
		</main>
	</div>
</div> -->
<?php get_footer();
