<?php
/*
Template Name: About Me Page
*/
get_header(); ?>

<!-- Get Hero -->
<?php get_template_part('template-parts/project-hero') ?>


<!-- Get Featured Section -->
 <?php if( have_rows('featured_project_one') ): 

  while( have_rows('featured_project_one') ): the_row(); 
    
    // vars
    $image = get_sub_field('featured_image_one');
    $headline = get_sub_field('featured_headline');
    $blurb = get_sub_field('featured_blurb');
    $cta = get_sub_field('featured_cta');
    $cta_uri = get_sub_field('featured_cta_uri');
    
    ?>
<div class="featured-content-section">
    <div class="featured-content-section-img">
      <?php if( !empty($image) ): ?>
        <img src=" <?php echo $image['url']; ?> " alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>
    </div>
    <div class="featured-content-section-block">
        <h3 class="featured-content-section-block-header"> <?php echo $headline; ?> </h3>
        <p class="featured-content-section-block-subheader subheader"> <?php echo $blurb; ?> </p>
    </div>
  </div>
  <?php endwhile; ?>
  
<?php endif; ?>

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
