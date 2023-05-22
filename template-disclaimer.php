<?php
/**
* Template Name: Disclaimer
**/
get_header();

?>


<!-- main content -->
  <div class="main_content">
    <section class="content_top">
      <div class="about_content">
        <div class="about_left">
          <div id="content-1" class="ab_info">
           <h3><?php the_field('page_heading'); ?></h3>
          <p><?php the_field('para_1'); ?></p>
	      <p><?php the_field('para_2'); ?></p>
	     <p><?php the_field('para_3'); ?></p>
		<p><?php the_field('para_4'); ?></p>
	   <p><?php the_field('para_5'); ?></p>
	   <p><?php the_field('para_6'); ?></p>
	 <p><?php the_field('para_7'); ?></p>
	<p><?php the_field('para_8'); ?></p>
			    
          </div>
        </div>
        <div class="about_right">
          <figure class="about_img">
			<?php 
            $image = get_field('background_img');
            if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                  <?php endif; ?>
			</figure>
        </div>

        <!-- side form start -->
       
        <!-- side form end -->
      </div>
    </section>
  </div>
  <!-- main content -->

<?php get_footer(); ?>