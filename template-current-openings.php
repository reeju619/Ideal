<?php
/**
* Template Name: Current Openings
**/
get_header();
if(have_posts())
{
    the_post();
}
?>

<!-- main content -->
  <div class="main_content">
    <section class="content_top">
      <div class="about_content">
        <div class="about_left">
          <div id="content-1" class="ab_info">
            <h2><strong><?php the_field('current_opening_heading'); ?></strong></h2>
          <div>
               <?php the_field('sales_and_marketing_details'); ?>
               <p><strong><?php the_field('roles_and_responsiblity_heading_1'); ?></strong></p>
               <ul>
               <?php the_field('roles_and_responsibility_des'); ?>
               </ul>
               <p><strong><?php the_field('perks_and_benefits_heading_1'); ?></strong></p>
               <ul>
               <?php the_field('perks_and_benefits_des'); ?>
               </ul>
               <p><strong><?php the_field('key_skills_heading_1'); ?></strong></p>
               <ul>
                <?php the_field('key_skills_des'); ?>
               </ul>
           </div>
           <div style="margin-top:25px;">
             <?php the_field('back_office_account_executive_details'); ?>
             <p><strong><?php the_field('roles_and_responsiblity_heading_2'); ?></strong></p>
             <ul>
               <?php the_field('roles_and_responsiblity_des_2'); ?>
             </ul>
             <p><strong><?php the_field('perks_and_benefits_heading_2'); ?></strong></p>
             <ul>
                <?php the_field('perks_and_benefits_des_2'); ?>
             </ul>
             <p><strong><?php the_field('key_skills_heading_2'); ?></strong></p>
             <ul>
               <?php the_field('key_skills_des_2'); ?>
             </ul>
           </div>
            </div>
          </div>
       
        <div class="about_right">
          <figure class="about_img">
			<?php 
            $image = get_field('background_image');
            if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                  <?php endif; ?>
			</figure>
        </div>

        <!-- side form start -->
        <div class="side_form_container">
          <span class="q_btn">QUICK QUERY</span>
          <div class="side_form">
            <span class="sf_cross"><img src="<?php bloginfo('template_directory'); ?>/images/close2.png" alt=""></span>
            <div class="sf_inn">
              <?php echo do_shortcode('[contact-form-7 id="743" title="our associates form"]'); ?>
            </div>
          </div>
        </div>
	</div>
    </section>
  </div>
  <!-- main content -->
<?php get_footer(); ?>