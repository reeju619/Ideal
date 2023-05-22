<?php
/**
 * Template Name: Csrpolicy
 **/
get_header();
?>
<h1 class="d-none">CSR Policy</h1>
<div class="main_content">
  <section class="breadcrumb_sec d-none">
    <div class="breadcrumb">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li>Csr Policy</li>
      </ul>
    </div>
  </section>
  <section class="csr_section">
    <div class="about_content">
      <div class="about_left ">
        <div class="ab_info">

          <h2><?php the_field('ideal_real_estates_heading');?></h2>
          <h3><?php the_field('corporate_social_responsibility_heading');?></h3>
          <div class="table_outer">
            <h2><?php the_field('index_heading');?></h2>
            <?php the_field('index_description');?>
          </div>
          <h5><?php the_field('preamble_heading');?></h5>
          <?php the_field('preamble_description');?>
          <h5><?php the_field('objectives_heading');?></h5>
          <p><?php the_field('objectives_description');?></p>
          <h5><?php the_field('csr_committee_heading');?></h5>
          <?php the_field('csr_committee_description');?>

          <h5><?php the_field('focus_areas_heading');?></h5>
          <?php the_field('focus_areas_description');?>

          <h5><?php the_field('funding_heading');?></h5>
          <p><?php the_field('funding_description');?></p>
          <h5><?php the_field('implementation_heading');?></h5>
          <p><?php the_field('implementation_description');?></p>
          <h5><?php the_field('csr_report_heading');?></h5>
          <p><?php the_field('csr_report_description');?></p>
          <h5><?php the_field('changes_heading');?></h5>
          <p><?php the_field('changes_description');?></p>

          <h2><?php the_field('summary_heading');?></h2>
          <p><?php the_field('summary_description');?></p>
          <h3><?php the_field('csr_vision_heading');?>  </h3>
          <p><?php the_field('csr_vision_description');?></p>
          <h4><?php the_field('objective_heading');?> </h4>
          <?php the_field('objective_description');?>

          <div class="csr_top">
            <h3><?php the_field('composition_of_csr_heading');?></h3>
            <?php the_field('composition_of_csr_description');?>
          </div>
          <p><?php the_field('composition_of_csr_second_description');?></p>
        </div>
      </div>
    </div>
  </section>
</div>

<?php
get_footer();
?>
