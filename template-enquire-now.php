<?php
/**
* Template Name: Enquire Now
**/
get_header();

?>


<div class="main_content">
    <section class="content_top">
      <div class="about_content">
        <div class="about_left">
          <div id="content-1" class="ab_info">
            <h2><?php the_field('enquire_now_heading'); ?></h2>
            <p><?php the_field('mandatory_heading'); ?></p>
            <div class="enquery_form">
              <?php echo do_shortcode('[contact-form-7 id="1803" title="Enquiry Page"]'); ?>
            </div>
          </div>
        </div>
        <div class="about_right">
          <figure class="about_img"><img src="<?php bloginfo('template_directory'); ?>/images/enquire-now-pic_n.jpg" alt=""></figure>
        </div>

        <!-- side form start -->
        <!--<div class="side_form_container">
          <span class="q_btn">QUICK QUERY</span>
          <div class="side_form">
            <span class="sf_cross"><img src="images/close2.png" alt=""></span>
            <div class="sf_inn">
              <form>
                <h6>All fields are mandatory</h6>
                <input type="text" name="" placeholder="Name" class="sf_text_field">
                <input type="text" name="" placeholder="Email" class="sf_text_field">
                <input type="text" name="" placeholder="Mobile" class="sf_text_field">
                <textarea name="" placeholder="Query" class="sf_text_field"></textarea>
                <input type="submit" name="" value="Submit" class="submit">
              </form>
            </div>
          </div>
        </div>-->
        <!-- side form end --> 
      </div>
    </section>
  </div>

<?php
get_footer();
?>
