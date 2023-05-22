<?php
/**
 * Template Name: Address
 **/
get_header();

?>
<h1 class="d-none">Contact Us</h1>
<div class="main_content">
  <section class="breadcrumb_sec d-none">
    <div class="breadcrumb">
      <ul>
        <li><a href="#">Home</a></li>
        <li>Contact</li>
      </ul>
    </div>
  </section>
  <section class="content_top">
    <div class="about_content">
      <div class="about_left">
        <div id="content-1" class="ab_info">
          <h2><?php the_field('address_heading');?></h2>
          <div class="address_row">
            <div class="addr_block">
              <h4><?php the_field('ideal_real_estate_heading');?></h4>
              <?php the_field('address_bar');?>
            </div>
            <div class="addr_block">
              <h4><?php the_field('sales_heading');?></h4>
              <div class="add_cont">
                <span class="cont_row">Tel: <a href="tel:<?php the_field('tel_url');?>"><?php the_field('tel_text');?></a></span>
                <span class="cont_row email_row">Email: <a href="mailto:<?php the_field('mail_url');?>"><?php the_field('mail_text');?></a></span>
              </div>
            </div>
          </div>
          <h2><?php the_field('enquire_now_heading');?></h2>
          <p><?php the_field('mandatory_heading');?></p>
          <div class="enquery_form">
            <?php echo do_shortcode('[contact-form-7 id="1803" title="Enquiry Page"]'); ?>
          </div>
        </div>
      </div>
      <div class="about_right">
        <figure class="about_img addr_map">
          <?php echo str_replace(['<p>', '</p>'], '', get_field('map')); ?>
        </figure>
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

<?php
get_footer();
?>
