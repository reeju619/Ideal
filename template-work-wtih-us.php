<?php
/**
 * Template Name: Work with us
 **/
get_header();
if (have_posts()) {
	the_post();
}
?>
<h1 class="d-none">Job Opportunities & Life at Ideal Group</h1>
<!-- main content -->
<div class="main_content">
  <section class="breadcrumb_sec d-none">
    <div class="breadcrumb">
      <ul>
        <li><a href="#">Home</a></li>
        <li>Careers</li>
      </ul>
    </div>
  </section>
  <section class="content_top">
    <div class="about_content">
      <div class="about_left">
        <div id="content-1" class="ab_info">
          <h2><strong><?php the_field('work_with_us_heading');?></strong></h2>
          <p><?php the_field('work_with_us_des');?></p>
          <h3><?php the_field('opportunities_to_excel_heading');?></h3>
          <p><?php the_field('opportunities_to_excel_des');?></p>
          <div class="about_green">
            <h3><?php the_field('work_culture_heading');?></h3>
            <p><?php the_field('work_culture_des');?></p>
          </div>
          <h3><?php the_field('team_building_heading');?></h3>
          <p><?php the_field('team_building_des');?></p>
          <h3><?php the_field('rewards_&_recognitions_heading');?></h5>
            <p><?php the_field('rewards_&_recognitions_des');?></p>
            <p><?php the_field('rewards_&_recognitions_des_two');?>

          </p>

          <h2><strong><?php the_field('current_opening_heading');?></strong></h2>
          <div>
           <?php the_field('sales_and_marketing_details');?>
           <p><strong><?php the_field('roles_and_responsiblity_heading_1');?></strong></p>
           <ul>
             <?php the_field('roles_and_responsibility_des');?>
           </ul>
           <p><strong><?php the_field('perks_and_benefits_heading_1');?></strong></p>
           <ul>
             <?php the_field('perks_and_benefits_des');?>
           </ul>
           <p><strong><?php the_field('key_skills_heading_1');?></strong></p>
           <ul>
            <?php the_field('key_skills_des');?>
          </ul>
        </div>
        <div style="margin-top:25px;">
         <?php the_field('back_office_account_executive_details');?>
         <p><strong><?php the_field('roles_and_responsiblity_heading_2');?></strong></p>
         <ul>
           <?php the_field('roles_and_responsiblity_des_2');?>
         </ul>
         <p><strong><?php the_field('perks_and_benefits_heading_2');?></strong></p>
         <ul>
          <?php the_field('perks_and_benefits_des_2');?>
        </ul>
        <p><strong><?php the_field('key_skills_heading_2');?></strong></p>
        <ul>
         <?php the_field('key_skills_des_2');?>
       </ul>
     </div>

     <h2><?php the_field('apply_online_heading');?></h2>
     <p><?php the_field('mandatory_heading');?></p>
     <div class="enquery_form">
      <?php echo do_shortcode('[contact-form-7 id="1849" title="Apply Online Form"]'); ?>
    </div>

  </div>
</div>
<div class="about_right">
  <figure class="about_img">
   <?php
$image = get_field('work_with_us_background_img');
if (!empty($image)): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
  <?php endif;?>
</figure>
</div>

<!-- side form start -->
<div class="side_form_container">
  <span class="q_btn"><?php the_field('quick_query');?></span>
  <div class="side_form">
    <span class="sf_cross"><?php
$image = get_field('close_img');
if (!empty($image)): ?>
      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
      <?php endif;?></span>
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