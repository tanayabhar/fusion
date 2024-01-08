<?php
$project_args = array(
  'post_type'=>'project', 
  'posts_per_page' => -1,
);
$project_query = new WP_Query( $project_args );
if( $project_query->have_posts() ):
  ?>
<div class="portfolio">
  <div class="single-project-active carousel">
        <div  class="carousel-inner"> 
        <?php
        while( $project_query->have_posts() ):
          $project_query->the_post();
          ?>
          <div class="row-2 group carousel-item">
            <div class="portfolio-wrapper">
            <?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
              <div class="image"><img src="<?php echo $image[0] ; ?>" /></div>
            <?php endif; ?>
              <div class="heading">
                <div class="line-2"></div>
                <?php $get_terms = get_the_terms( $post->ID, 'category' );
    
    ?>
                <p class="category"><?php echo $get_terms[0]->name ;?></p>
                <p class="title"><?php the_title(); ?></p>
              </div>
            </div>
            <div class="links">
              <div class="portfolio-detail group">
                <img class="layer-6" src="<?php echo get_template_directory_uri() ; ?>/images/image_16.png" alt="" width="12" height="8">
                <a href="<?php echo get_the_permalink(); ?>"><p>Project Details</p></a>
              </div>
              <div class="view-slides group">
                <img class="layer-7" src="<?php echo get_template_directory_uri() ; ?>/images/image_17.png" alt="" width="13" height="8">
                <a href="#"><p class="view">View Slides</p></a>
              </div>
              <div class="line-3"></div>
            </div>
          </div>
          <?php
endwhile;
?>
          </div>
          <div class="pagination group">
            <img src="<?php echo get_template_directory_uri() ; ?>/images/normal.png" alt="|" width="30" height="3" title="|">
            <img src="<?php echo get_template_directory_uri() ; ?>/images/normal_2.png" alt="|" width="29" height="3" title="|">
            <img class="active-2" src="<?php echo get_template_directory_uri() ; ?>/images/active.png" alt="|" width="30" height="3" title="|">
            <img src="<?php echo get_template_directory_uri() ; ?>/images/normal.png" alt="|" width="30" height="3" title="|">
            <img class="normal-4" src="<?php echo get_template_directory_uri() ; ?>/images/normal_2.png" alt="|" width="29" height="3" title="|">
          </div>
        </div>
  <div class="carousel-controls">
    <span class="prev"></span>
    <span class="next"></span>
  </div>
  <div class="carousel-indicators"></div>
  </div>
</div>
<?php
endif;
?>