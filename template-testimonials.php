<?php
/**
* Template Name: Testimonials
**/
get_header();

?>
<!-- main content -->
  <div class="main_content">
    <section class="breadcrumb_sec">
      <div class="breadcrumb">
        <?php the_field('breadcrumbs'); ?>
      </div>
    </section>
	  <div class="testimonial_container">
		  
		  <?php

// Check rows exists.
    if( have_rows('testimonials_repeater') ):

    // Loop through rows.
    while( have_rows('testimonials_repeater') ) : the_row();
?>
		  
		  	   <div class="testimo_row">
        <div class="testimonial_img">
          <?php
   $deskimage = get_sub_field('photo');
      if( !empty( $deskimage ) ): ?>
          <img src="<?php echo esc_url($deskimage['url']); ?>" alt="<?php echo esc_attr($deskimage['alt']); ?>" />
      <?php endif; ?>	
          <span class="play modal_btn modalbtnvideo" data-id="mdl1" data-videocode='<?php echo get_sub_field('youtube_video'); ?>'><i class="fas fa-play-circle"></i></span>
        </div>
        <div class="testimonial_info">
          <h2><strong><?php echo get_sub_field('heading'); ?></strong></h2>
          <p><?php echo get_sub_field('description'); ?></p>
          <h6><?php echo get_sub_field('author'); ?></h6>
          <a href="javascript:void(0)" class="input_btn modal_btn modalbtnvideo" data-id="mdl1" data-videocode='<?php echo get_sub_field('youtube_video'); ?>'><?php echo get_sub_field('video_testimonials_button'); ?><i class="fas fa-play-circle"></i></a>
        </div>
      </div>
		  
		  <?php
    // End loop.

        endwhile;
        endif;

    ?>
		  
      <!--<div class="testimo_row">
        <div class="testimonial_img">
          <img src="<?php bloginfo('template_url'); ?>/images/ideal-paradiso-banner2-1.jpg" alt="">
          <span class="play modal_btn" data-id="mdl2"><i class="fas fa-play-circle"></i></span>
        </div>
        <div class="testimonial_info">
          <h2><strong>Lorem ipsum dolor sit amet</strong></h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pretium libero mi, ac malesuada erat tempus ac. Phasellus ligula dolor, vestibulum posuere nibh nec, tempor vestibulum orci. Pellentesque ligula nibh, tempor vitae viverra nec, pretium ut leo. Donec mollis dolor finibus est cursus, vulputate viverra ex dignissim. Nulla nulla nulla, eleifend vitae consequat sed, rhoncus nec ipsum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer in efficitur quam. Cras non orci vel lacus pulvinar imperdiet. Integer posuere quam vitae placerat volutpat. Pellentesque venenatis varius urna, vel finibus nisi tincidunt in. Morbi et enim tellus. Pellentesque purus felis, tincidunt at ligula in, tincidunt convallis erat. Morbi hendrerit eleifend justo, non blandit enim. Pellentesque eleifend tellus magna.</p>
          <h6>Mr. Lorem ipsum</h6>
          <a href="javascript:void(0)" class="input_btn modal_btn" data-id="mdl2">Video Testimonials <i class="fas fa-play-circle"></i></a>
        </div>
      </div>
      <div class="testimo_row">
        <div class="testimonial_img">
          <img src="<?php bloginfo('template_url'); ?>/images/ideal-plaza-banner1.jpg" alt="">
          <span class="play modal_btn" data-id="mdl3"><i class="fas fa-play-circle"></i></span>
        </div>
        <div class="testimonial_info">
          <h2><strong>Lorem ipsum dolor sit amet</strong></h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pretium libero mi, ac malesuada erat tempus ac. Phasellus ligula dolor, vestibulum posuere nibh nec, tempor vestibulum orci. Pellentesque ligula nibh, tempor vitae viverra nec, pretium ut leo. Donec mollis dolor finibus est cursus, vulputate viverra ex dignissim. Nulla nulla nulla, eleifend vitae consequat sed, rhoncus nec ipsum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer in efficitur quam. Cras non orci vel lacus pulvinar imperdiet. Integer posuere quam vitae placerat volutpat. Pellentesque venenatis varius urna, vel finibus nisi tincidunt in. Morbi et enim tellus. Pellentesque purus felis, tincidunt at ligula in, tincidunt convallis erat. Morbi hendrerit eleifend justo, non blandit enim. Pellentesque eleifend tellus magna.</p>
          <h6>Mr. Lorem ipsum</h6>
          <a href="javascript:void(0)" class="input_btn modal_btn" data-id="mdl3">Video Testimonials <i class="fas fa-play-circle"></i></a>
        </div>
      </div>
      <div class="testimo_row">
        <div class="testimonial_img">
          <img src="<?php bloginfo('template_url'); ?>/images/ideal-enclave-banner1.jpg" alt="">
          <span class="play modal_btn" data-id="mdl4"><i class="fas fa-play-circle"></i></span>
        </div>
        <div class="testimonial_info">
          <h2><strong>Lorem ipsum dolor sit amet</strong></h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pretium libero mi, ac malesuada erat tempus ac. Phasellus ligula dolor, vestibulum posuere nibh nec, tempor vestibulum orci. Pellentesque ligula nibh, tempor vitae viverra nec, pretium ut leo. Donec mollis dolor finibus est cursus, vulputate viverra ex dignissim. Nulla nulla nulla, eleifend vitae consequat sed, rhoncus nec ipsum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer in efficitur quam. Cras non orci vel lacus pulvinar imperdiet. Integer posuere quam vitae placerat volutpat. Pellentesque venenatis varius urna, vel finibus nisi tincidunt in. Morbi et enim tellus. Pellentesque purus felis, tincidunt at ligula in, tincidunt convallis erat. Morbi hendrerit eleifend justo, non blandit enim. Pellentesque eleifend tellus magna.</p>
          <h6>Mr. Lorem ipsum</h6>
          <a href="javascript:void(0)" class="input_btn modal_btn" data-id="mdl4">Video Testimonials <i class="fas fa-play-circle"></i></a>
        </div>
      </div> -->
    </div>
  </div>
  <!-- main content -->
<?php
get_footer();
?>

