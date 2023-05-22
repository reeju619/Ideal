<?php
/**
 * Template Name: our promoters
 **/
get_header();

?>
<h1 class="d-none">Ideal Group Promoters</h1>
<div class="main_content">
  <section class="breadcrumb_sec d-none">
    <div class="breadcrumb">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li>Our Promoters</li>
      </ul>
    </div>
  </section>
  <section class="content_top">
    <div class="about_content">
      <div class="about_left">
        <div id="content-1" class="ab_info">
          <h2><strong><?php the_field('promoters_heading');?></strong></h2>
          <h3><?php the_field('team_ideal_heading');?></h3>
          <p><?php the_field('team_description');?></p>

          <?php

// Check rows exists.
if (have_rows('promoters')):

	// Loop through rows.
	while (have_rows('promoters')): the_row();
		?>
		            <div class="promoters_block">
		              <div class="promoters_img"><?php
		$deskimage = get_sub_field('image');
		if (!empty($deskimage)): ?>
		                <img src="<?php echo esc_url($deskimage['url']); ?>" alt="<?php echo esc_attr($deskimage['alt']); ?>" />
		                <?php endif;?></div>
	                <div class="promoters_info">
	                  <h4><?php echo get_sub_field('name'); ?><em><?php echo get_sub_field('designation'); ?></em></h4>
	                  <p><?php echo get_sub_field('description'); ?></p>
	                </div>
	              </div>
	              <?php
	// End loop.

endwhile;

// No value.
// else :
// Do something...
endif;

?>
           <!-- <div class="promoters_block">
              <div class="promoters_img"><img src="<?php bloginfo('template_directory');?>/images/nakul-himatsingka.jpg" alt=""></div>
              <div class="promoters_info">
                <h4>Nakul Himatsingka<em>Managing Director, Ideal Group</em></h4>
                <p>Mr. Nakul Himatsingka’s professional expertise and industry knowledge have played a pivotal role in the success story of Ideal Group. A graduate from the prestigious Stern School of Business, New York University, Mr. Himatsingka brings to the business his proficiency and experience in architecture and design. His keen eye for detail and active involvement in every sphere of the business, starting from regular site visits to taking key strategic decisions, have taken the Group to new heights.</p>
              </div>
            </div>-->
          </div>
        </div>
        <div class="about_right">
          <figure class="about_img"><img src="<?php bloginfo('template_directory');?>/images/about-ideal-pic.jpg" alt=""></figure>
          <a class="c_pdf" href="<?php the_field('pdf_link');?>" target="_blank"><span><img src="<?php bloginfo('template_directory');?>/images/pdf.png" alt=""></span><?php the_field('pdf_text');?></a>
        </div>

        <!-- side form start -->
        <div class="side_form_container">
          <span class="q_btn"><?php the_field('quick_query_heading');?></span>
          <div class="side_form">
            <span class="sf_cross"><img src="<?php bloginfo('template_directory');?>/images/close2.png" alt=""></span>
            <div class="sf_inn">
             <?php echo do_shortcode('[contact-form-7 id="743" title="quick query form"]'); ?>
           </div>
         </div>
       </div>
       <!-- side form end -->
     </div>
   </section>
 </div>

 <?php get_footer();?>
