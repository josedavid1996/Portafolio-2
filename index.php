<?php get_header()  ?>
<div class="hero">
<?php
$args = array(
  'pagename' => 'home'
);
$query = new WP_Query( $args );
if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();
      ?>
        <?php the_content(); ?>
    <?php  }
}
?>
</div>
<?php include 'about.php'; ?>
<?php include 'skills.php'; ?>
<?php include 'work.php'; ?>
<?php include 'testimonial.php'; ?>
<?php include 'contact.php'; ?>


<?php get_footer()  ?>