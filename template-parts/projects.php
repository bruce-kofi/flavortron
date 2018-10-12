<!-- Project Loop -->

<?php 
$args = array(
    'post_type' => 'project' // Get only posts
);
$the_query = new WP_Query ( $args ); // build query
$count = $the_query->post_count; // Check number of posts


while ( $the_query -> have_posts() ) : $the_query -> the_post();
$post_index = $the_query->current_post + 1; // $current_post = gets the post index in loop

$thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
    $thumb_url = $thumb_url_array[0];
?>   

<?php 
if ( $post_index % 3 == 1 ) { // Open div if post is odd
     echo '<section class="row large-unstack projects-wrapper">';
}
if ( $post_index % 2 != 0) { // If post is odd 
?>

	<div class="columns card-article-hover card">
	  <a class="card-featured-image" href="<?php the_permalink(); ?>">
	    <img src="<?php echo $thumb_url; ?>">
	  </a>
	  <div class="card-section">
	    <!-- <p class="meta-data article-subtext">GARDENING | 10 MIN READ</p> -->
	    <a href="<?php the_permalink(); ?>">
	      <h3 class="article-title"><?php the_title(); ?></h3>
	    </a>
	    <!-- <p class="article-desc"> <?php the_excerpt(); ?> </p> -->
	  </div>
	  <!-- <div class="card-divider flex-container align-middle">
	    <img class="avatar" src="https://placehold.it/50x50" alt="avatar">
	    <a href="" class="author"> <?php the_author(); ?> </a>
	  </div> -->
	  <div class="hover-border">
	  </div>
	</div>
<?php
} else {
?>
<div class="columns card-article-hover card">
  <a class="card-featured-image" href="<?php the_permalink(); ?>">
    <img src="<?php echo $thumb_url; ?>">
  </a>
  <div class="card-section">
    <!-- <p class="meta-data article-subtext">GARDENING | 10 MIN READ</p> -->
    <a href="<?php the_permalink(); ?>">
      <h3 class="article-title"><?php the_title(); ?></h3>
    </a>
    <!-- <p class="article-desc"> <?php the_excerpt(); ?> </p> -->
  </div>
<!--   <div class="card-divider flex-container align-middle">
    <img class="avatar" src="https://placehold.it/50x50" alt="avatar">
    <a href="" class="author"> <?php the_author(); ?> </a>
  </div> -->
  <div class="hover-border">
  </div>
</div>

<?php } // End if ( $post_index % 2 != 0)

  if ( $post_index % 3 == 0 ) { // Close div if post is even
      echo "</section>";
  }   
?>
               

	    <?php endwhile; wp_reset_postdata(); ?>


