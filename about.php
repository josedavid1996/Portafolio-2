<section class="about" id="about">
  
  <?php
$args = array(
  'pagename' => 'about'
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
</section>