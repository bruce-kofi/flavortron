<?php
/**

 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

$title = get_field('project_title');
$blurb = get_field('project_blurb');
$medium = get_field('project_medium');
$date = get_field('project_date');

get_header(); ?>

<!-- Get Hero -->
<?php get_template_part('template-parts/project-hero') ?>

<?php 

 ?>
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

<div class="main-container">
	<div class="main-grid">
		<main class="main-content">
			
			<div class="slick">
				<?php while ( have_rows('project_gallery') ) : the_row(); 
				// vars
				$gallery_image = get_sub_field('project_image');
				$description = get_sub_field('project_image_description');
				?>
			  <div>
			  	<img src=" <?php echo $gallery_image['url']; ?> " alt=" <?php echo $gallery_image['alt']; ?> ">
			  	<!-- <div><p> <?php echo $description; ?> </p></div> -->
			  </div>
			<?php endwhile; ?>
			</div>


			
					
		</main>
	</div>
	<div class="row recent-posts-wrapper">
		<div class="columns medium-4">
			<h4>Recent Shoots</h4>
		</div>
	</div>
	<?php get_template_part('template-parts/projects') ?>
</div>
<?php get_footer();
