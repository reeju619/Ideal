<?php
/**
 * Template Name: Video Walkthrough
 **/
get_header();

?>
<h1 class="d-none">Ideal Group Project Videos</h1>
<div class="main_content">
  <section class="breadcrumb_sec">
    <div class="breadcrumb">
      <?php the_field('bredcrumb');?>
    </div>
  </section>
  <section class="content_top gallery_top">
    <div class="about_content">
      <div class="about_left">
        <div class="ab_info">
          <h2><?php the_field('heading');?></h2>
          <h3><?php the_field('small_heading');?></h2></h3>
          <p><?php the_field('description');?></p>
          <div class="progress_gallery">
            <?php the_field('photos');?>
          </div>
        </div>
      </div>

      <!-- side form start -->
      <div class="side_form_container">
        <span class="q_btn"><?php the_field('quick_query');?></span>
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

<?php
get_footer();
?>
