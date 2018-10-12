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
        <a href=" <?php echo $cta_uri ?> " class="button featured-btn"> <?php echo $cta; ?> </a>
    </div>
  </div>
  <?php endwhile; ?>
  
<?php endif; ?>

<section class="featured-three-up">
  <h2 class="featured-three-up-headline">Furry, Reliable, Cuddly</h2>
  <div class="row medium-unstack">
    <div class="columns">
      <i class="fa fa-gg" aria-hidden="true"></i>
      <h4 class="featured-three-up-title">Keyless Entry</h4>
      <p class="featured-three-up-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi sint, voluptatibus eaque natus ad eius.</p>
    </div>
    <div class="columns">
      <i class="fa fa-user-o" aria-hidden="true"></i>
      <h4 class="featured-three-up-title">Invincible Igloo</h4>
      <p class="featured-three-up-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi sint, voluptatibus eaque natus ad eius.</p>
    </div>
    <div class="columns">
      <i class="fa fa-check-square-o" aria-hidden="true"></i>
      <h4 class="featured-three-up-title">Stereo System</h4>
      <p class="featured-three-up-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi sint, voluptatibus eaque natus ad eius.</p>
    </div>
  </div>
</section>



<?php if( have_rows('featured_project_two') ): 

 while( have_rows('featured_project_two') ): the_row();
 // vars
 $image_2 = get_sub_field('featured_image_two');
 $headline_2 = get_sub_field('featured_headline_two');
 $blurb_2 = get_sub_field('featured_blurb_two');
 $cta_2 = get_sub_field('featured_cta_two');
 $cta_uri_2 = get_sub_field('featured_cta_uri_two'); 
  ?>
  <div class="featured-content-section">

  <div class="featured-content-section-block">
      <h3 class="featured-content-section-block-header"> <?php echo $headline_2; ?> </h3>
      <p class="featured-content-section-block-subheader subheader"> <?php echo $blurb_2; ?> </p>
      <a href=" <?php echo $cta_uri_2 ?> " class="button featured-btn"> <?php echo $cta_2; ?> </a>
  </div>
  <div class="featured-content-section-img">
    <?php if( !empty($image_2) ): ?>
      <img src=" <?php echo $image_2['url']; ?> " alt="<?php echo $image_2['alt']; ?>" />
    <?php endif; ?>
  </div>
</div>
  <?php endwhile; ?>

<?php endif; ?>
    