<?php
/**
* Template Name: Csrdetails
**/
get_header();
?>

<div class="main_content">
    <section class="csr_section">
      <div class="about_content">
        <div class="about_left ">
          <div class="ab_info">
            <h2><?php the_field('summary_heading'); ?></h2>
            <p><?php the_field('summary_description'); ?></p>
            <h3><?php the_field('csr_vision_heading'); ?>  </h3>
            <p><?php the_field('csr_vision_description'); ?></p>
            <h4><?php the_field('objective_heading'); ?> </h4>
            <?php the_field('objective_description'); ?>
            
            <div class="csr_top">
              <h3><?php the_field('composition_of_csr_heading'); ?></h3>
              <?php the_field('composition_of_csr_description'); ?>
            </div>
            <p><?php the_field('composition_of_csr_second_description'); ?></p>
          </div>
        </div>
      </div>
    </section>
  </div>


<?php 
get_footer();
?>
