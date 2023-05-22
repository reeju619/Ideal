<?php
/**
 * Template Name: our associates
 **/
get_header();

?>

<h1 class="d-none">Ideal Group Associates and Partners</h1>
<div class="main_content">
  <section class="breadcrumb_sec d-none">
    <div class="breadcrumb">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li>Our Associates</li>
      </ul>
    </div>
  </section>
  <section class="content_top">
    <div class="about_content">
      <div class="about_left">
        <div id="content-1" class="ab_info mCustomScrollbar">
          <h2><strong><?php the_field('our_associates_heading');?></strong></h2>
          <?php
// Check rows exists.
if (have_rows('our_associates')):

	// Loop through rows.
	while (have_rows('our_associates')): the_row();
		?>
				            <div class="associates_block">
				              <h3><?php echo get_sub_field('sub_heading'); ?></h3>
				              <?php echo get_sub_field('description'); ?>
				            </div>
				            <?php
	endwhile;
endif;
?>
            <?php /*<div class="associates_block">
<h3>Landscape Architects</h3>
<ul>
<li>Site Concepts International Pte. Ltd., Singapore - Portfolio includes some of the most beautiful resorts in South East Asia.</li>
<li>LSG Landscape Architecture, USA (Landscape Consultants)</li>
</ul>
</div> */?>
<div class="associates_block">
  <h3><?php the_field('consultants_heading_');?></h3>
  <div class="asst_row">
    <?php
// Check rows exists.
if (have_rows('consultants')):

	// Loop through rows.
	while (have_rows('consultants')): the_row();
		?>
				      <div class="asst_block">
				        <figure><?php
		$image = get_sub_field('image');
		if (!empty($image)): ?>
				          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				          <?php endif;?></figure>
		          <figcaption><?php echo get_sub_field('description_two'); ?></figcaption>
		        </div>
		        <?php
endwhile;
endif;
?>
                <?php /*<div class="asst_block">
<figure><img src="images/mer.jpg" alt=""></figure>
<figcaption>MEP Consulting Engineers (Mechanical, Electrical & Plumbing Services Consultants)</figcaption>
</div>
<div class="asst_block">
<figure><img src="images/bes.jpg" alt=""></figure>
<figcaption>BES (Structural Consultants)</figcaption>
</div>
<div class="asst_block">
<figure><img src="images/en.jpg" alt=""></figure>
<figcaption>En3 (Green Building Consultants)</figcaption>
</div>
<div class="asst_block">
<figure><img src="images/sn.jpg" alt=""></figure>
<figcaption>M/s S.N. Joshi Consultants Pvt. Ltd., Pune (Mechanical, Electrical & Plumbing Services Consultants), Mr. Sutanu Ghosh of M/s Ghosh & Bose Pvt. Ltd., Kolkata (Environment Impact Assessment Study)</figcaption>
</div>
<div class="asst_block">
<figure><img src="images/studiodra.jpg" alt=""></figure>
<figcaption>Studio Dra, UK (Consultants for Interiors)</figcaption>
</div>*/?>
</div>
</div>
<div class="associates_block">
  <h3><?php the_field('solicitors_heading');?></h3>
  <ul>
    <?php
// Check rows exists.
if (have_rows('solicitors')):

	// Loop through rows.
	while (have_rows('solicitors')): the_row();
		?>
				      <li><?php echo get_sub_field('name'); ?></li>
								               <?php /* <li>Utpal Majumdar</li>
		<li>R. Ginodia & Co.</li>
		<li>Fox Mandal</li>*/?>

				    <?php
	endwhile;
endif;
?>
</ul>
</div>
</div>
</div>
<div class="about_right">
  <figure class="about_img"><img src="<?php the_field('about_ideal_image');?>" alt=""></figure>
  <a class="c_pdf" href="<?php the_field('pdf_link');?>" target="_blank"><span><img src="<?php the_field('pdf_image');?>" alt=""></span><?php the_field('download_corporate_brochure');?></a>
</div>
<!-- side form start -->
<div class="side_form_container">
  <span class="q_btn"><?php the_field('quick_query_heading');?></span>
  <div class="side_form">
    <span class="sf_cross"><img src="<?php the_field('side_form_image');?>" alt=""></span>
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