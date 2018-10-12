<?php 
$hero_img_id = get_post_thumbnail_id();
$hero_img_url_array = wp_get_attachment_image_src($hero_img_id, 'thumbnail-size', true);
$hero_img_url = $hero_img_url_array[0];
$id = get_the_ID();

 ?>
 
<div class="hero-full-screen" style="background: url('<?php echo $hero_img_url; ?>'); background-size: cover; background-attachment: fixed; ">

  <div class="top-content-section">
  </div>

  <div class="middle-content-section">
    <h1><?php echo esc_html( get_the_title() ); ?></h1>
  </div>

  <div class="bottom-content-section" data-magellan data-threshold="0">
    <a href="#post-<?php echo $id; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 12c0-6.627-5.373-12-12-12s-12 5.373-12 12 5.373 12 12 12 12-5.373 12-12zm-18.005-1.568l1.415-1.414 4.59 4.574 4.579-4.574 1.416 1.414-5.995 5.988-6.005-5.988z"/></svg></a>
  </div>

</div>