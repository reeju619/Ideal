<?php
/**
 * Template Name: About Ideal
 **/
get_header();
if (have_posts()) {
	the_post();
}
?>
<h1 class="d-none">Real Estate Construction Company in Kolkata</h1>
<!-- main content -->
<div class="main_content">
  <section class="content_top">
    <div class="about_content">
      <div class="about_left">
        <div id="content-1" class="ab_info">
          <h2><strong><?php the_field('about_ideal_heading');?></strong><?php the_field('about_ideal_heading_2');?></h2>
          <h3><?php the_field('happy_families');?></h3>
          <p><?php the_field('description_1');?></p>
          <h4><?php the_field('pillars_of_trust');?><em><?php the_field('pillars_of_trust_subheading');?></em></h4>
          <p><?php the_field('pillars_of_trust_des');?></p>
          <div class="about_green">
            <h4><?php the_field('going_green_heading');?><span><?php the_field('going_green_subheading');?></span></h4>
            <p><?php the_field('going_green_des');?></p>
          </div>
          <h3><?php the_field('group_businesses_heading');?></h3>
          <h5><?php the_field('logistics_service_heading');?></h5>
          <p><?php the_field('logistics_service_subheading');?></p>
          <ul>
           <?php the_field('logistics_service_des');?>
         </ul>
         <h5><?php the_field('equipment_rentals_heading');?></h5>
         <p><?php the_field('equipment_rentals_subheading');?></p>
         <ul>
           <?php the_field('equipment_rentals_des');?>
         </ul>
         <h5><?php the_field('automotive_dealership_heading');?></h5>
         <p><?php the_field('automotive_dealership_subheading');?></p>
         <ul>
           <?php the_field('automotive_dealership_des');?>
         </ul>
         <h5><?php the_field('alloys_heading');?></h5>
         <p><?php the_field('alloys_subheading');?></p>
         <ul>
           <?php the_field('alloys_des');?>
         </ul>
         <h5><?php the_field('skulpt_ideal_gymnasium_heading');?></h5>
         <p><?php the_field('skulpt_ideal_gymnasium_subheading');?></p>
         <a href="#" class="knowmore"><?php the_field('know_more_btn');?></a><br><br>
         <!-- <h2><?php the_field('heading');?></h2> -->
         <h3><?php the_field('small_heading');?></h3>
         <p><?php the_field('description');?></p>
         <div class="progress_gallery">
          <?php the_field('photos');?>
        </div>
      </div>
    </div>
    <div class="about_right">
      <figure class="about_img">
       <?php
$image = get_field('about_ideal_background_img');
if (!empty($image)): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
      <?php endif;?>
    </figure>
    <a class="c_pdf" href="<?php the_field('pdf_link');?>" target="_blank">
     <span>
       <?php
$image = get_field('corporate_brochure_img');
if (!empty($image)): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
      <?php endif;?>
    </span><?php the_field('corporate_brochure_text');?></a>
  </div>

  <!-- side form start -->
  <div class="side_form_container">
    <span class="q_btn">QUICK QUERY</span>
    <div class="side_form">
      <span class="sf_cross"><img src="<?php bloginfo('template_url');?>/images/close2.png" alt=""></span>
      <div class="sf_inn">
        <?php echo do_shortcode('[contact-form-7 id="743" title="our associates form"]'); ?>
      </div>
    </div>
  </div>
  <!-- side form end -->
</div>
</section>
</div>
<!-- main content -->
<?php get_footer();?>