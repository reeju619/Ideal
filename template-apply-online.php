<?php
/**
* Template Name: Apply Online
**/
get_header();

?>


<div class="main_content">
    <section class="content_top">
      <div class="about_content">
        <div class="about_left">
          <div id="content-1" class="ab_info app_online_form">
            <h2><?php the_field('apply_online_heading'); ?></h2>
            <p><?php the_field('mandatory_heading'); ?></p>
            <div class="enquery_form">
              <?php echo do_shortcode('[contact-form-7 id="1849" title="Apply Online Form"]'); ?>
            </div>
          </div>
        </div>
        <div class="about_right">
          <figure class="about_img"><img src="<?php bloginfo('template_directory'); ?>/images/apply-online-pic.jpg" alt=""></figure>
        </div>

        <!-- side form start -->
        <div class="side_form_container">
          <span class="q_btn">QUICK QUERY</span>
          <div class="side_form">
            <span class="sf_cross"><img src="<?php bloginfo('template_directory'); ?>/images/close2.png" alt=""></span>
            <div class="sf_inn">
		<?php echo do_shortcode('[contact-form-7 id="743" title="quick query form"]'); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<?php
get_footer();
?>
