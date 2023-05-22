<?php
/**
 * Template Name: Photos
 **/
get_header();

?>
<h1 class="d-none">Ideal Group Project Image Gallery</h1>
<!-- main content -->
<div class="main_content">
  <section class="breadcrumb_sec d-none">
    <div class="breadcrumb">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Gallery</a></li>
        <li>Project Image Gallery</li>
      </ul>
    </div>
  </section>
  <div class="gallery_container">
    <div class="gallery_inner">
      <div class="top_gallery">
        <p><?php the_field('heading_content');?></p>
      </div>
      <div class="gallery_box">
        <h2><?php the_field('residential_project_gallery_heading');?></h2>
        <ul>

         <?php

// Check rows exists.
if (have_rows('residential_project_gallery_repeater')):

	// Loop through rows.
	while (have_rows('residential_project_gallery_repeater')): the_row();
		?>


		            <li>
		              <a data-fancybox="gallery" href="<?php echo get_sub_field('image_href'); ?>">
		                <?php
		$deskimage = get_sub_field('pic');
		if (!empty($deskimage)): ?>
		                  <img src="<?php echo esc_url($deskimage['url']); ?>" alt="<?php echo esc_attr($deskimage['alt']); ?>" />
		                <?php endif;?>
	                <span><?php echo get_sub_field('image_name'); ?></span>
	              </a>
	            </li>

	            <?php
	// End loop.

endwhile;
endif;

?>

        <li>
          <a data-fancybox="gallery" href="https://youtu.be/WSHIl3riIAQ">
            <img src="<?php bloginfo('template_directory');?>/images/r_gallery_img_2.jpg" alt="">
            <span>Ideal </span>
          </a>
        </li>
            <!--<li>
              <a data-fancybox="gallery" href="<?php bloginfo('template_directory');?>/images/r_gallery_img_3.jpg">
                <img src="<?php bloginfo('template_directory');?>/images/r_gallery_img_3.jpg" alt="">
                <span>Lorem ipsum</span>
              </a>
            </li>
            <li>
              <a data-fancybox="gallery" href="<?php bloginfo('template_directory');?>/images/r_gallery_img_4.jpg">
                <img src="<?php bloginfo('template_directory');?>/images/r_gallery_img_4.jpg" alt="">
                <span>Lorem ipsum</span>
              </a>
            </li> -->
            <li>
              <a data-fancybox="gallery" href="https://youtu.be/WSHIl3riIAQ">
                <img src="<?php bloginfo('template_directory');?>/images/r_gallery_img_5.jpg" alt="">
                <span>Ideal Villas</span>
              </a>
            </li>
            <!--<li>
              <a data-fancybox="gallery" href="<?php bloginfo('template_directory');?>/images/r_gallery_img_6.jpg">
                <img src="<?php bloginfo('template_directory');?>/images/r_gallery_img_6.jpg" alt="">
                <span>Lorem ipsum</span>
              </a>
            </li>
            <li>
              <a data-fancybox="gallery" href="<?php bloginfo('template_directory');?>/images/r_gallery_img_7.jpg">
                <img src="<?php bloginfo('template_directory');?>/images/r_gallery_img_7.jpg" alt="">
                <span>Lorem ipsum</span>
              </a>
            </li>
            <li>
              <a data-fancybox="gallery" href="<?php bloginfo('template_directory');?>/images/r_gallery_img_8.jpg">
                <img src="<?php bloginfo('template_directory');?>/images/r_gallery_img_8.jpg" alt="">
                <span>Lorem ipsum</span>
              </a>
            </li>
            <li>
              <a data-fancybox="gallery" href="https://youtu.be/WSHIl3riIAQ">
                <img src="<?php bloginfo('template_directory');?>/images/r_gallery_img_9.jpg" alt="">
                <span>Lorem ipsum</span>
              </a>
            </li>
            <li>
              <a data-fancybox="gallery" href="<?php bloginfo('template_directory');?>/images/r_gallery_img_10.jpg">
                <img src="<?php bloginfo('template_directory');?>/images/r_gallery_img_10.jpg" alt="">
                <span>Lorem ipsum</span>
              </a>
            </li>
            <li>
              <a data-fancybox="gallery" href="<?php bloginfo('template_directory');?>/images/r_gallery_img_11.jpg">
                <img src="<?php bloginfo('template_directory');?>/images/r_gallery_img_11.jpg" alt="">
                <span>Lorem ipsum</span>
              </a>
            </li> -->
            <li>
              <a data-fancybox="gallery" href="https://youtu.be/TFau8RGtVDI">
                <img src="<?php bloginfo('template_directory');?>/images/r_gallery_img_12.jpg" alt="">
                <span>Ideal Tower</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="gallery_box">
          <h2><?php the_field('commercial_project_gallery_heading');?></h2>
          <ul>
            <li>
              <a data-fancybox="gallery1" href="https://youtu.be/ujphqwhveN4">
                <img src="<?php bloginfo('template_directory');?>/images/c_gallery_img_2.jpg" alt="">
                <span>Ideal Unique Centre</span>
              </a>
            </li>
            <li>
              <a data-fancybox="gallery1" href="<?php the_field('commercial_project_first_url');?>">
                <?php
$image = get_field('commercial_project_first_image');
if ($image): ?>
                  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                <?php endif;?>
                <span><?php the_field('commercial_project_first_image_text_');?></span>
              </a>
            </li>
            <li>
              <a data-fancybox="gallery1" href="<?php the_field('commercial_project_second_url');?>">
                <?php
$imagetwo = get_field('commercial_project_second_image');
if ($imagetwo): ?>
                  <img src="<?php echo esc_url($imagetwo['url']); ?>" alt="<?php echo esc_attr($imagetwo['alt']); ?>">
                <?php endif;?>
                <span><?php the_field('commercial_project_second_image_text');?></span>
              </a>
            </li>
			  <!--<li>
              <a data-fancybox="gallery1" href="<?php bloginfo('template_directory');?>/images/c_gallery_img_1.jpg">
                <img src="<?php bloginfo('template_directory');?>/images/c_gallery_img_1.jpg" alt="">
                <span>Lorem ipsum</span>
              </a>
            </li>-->
           <!-- <li>
              <a data-fancybox="gallery1" href="https://youtu.be/ujphqwhveN4">
                <img src="<?php bloginfo('template_directory');?>/images/c_gallery_img_2.jpg" alt="">
                <span>Ideal Unique Centre</span>
              </a>
            </li>-->
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- main content -->


  <?php
get_footer();
?>
