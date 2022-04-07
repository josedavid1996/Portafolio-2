<?php get_header()  ?>
<section class="hero">
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
</section>
<?php include 'about.php'; ?>
<?php include 'skills.php'; ?>


<?php get_footer()  ?>