<div class="testimonial__container">
  <section class="testimonial">
  <?php
$args = array(
  'pagename' => 'testimonials'
);
$query = new WP_Query( $args );

if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();
      ?>
      <h2><?php the_title() ?></h2>
      <?php the_content(); ?>
    <?php  }
}
?>

<?php
  $args = array(
    'post_type' => 'testimonial',
    'post_per_page' => -1,
    'order' => "ASC"
  );
  $testimonial = new WP_Query($args);

  if($testimonial->have_posts()){
    while($testimonial -> have_posts()){
    $testimonial->the_post();
    ?>
    <div class="testimonial__card">
          <?php the_content(); ?>
    </div>
    <?php }
  }
  ?>


  </section>

</div>