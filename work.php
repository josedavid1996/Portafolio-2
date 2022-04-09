<div class="work__container">
  <section class="work" id="work">
  
  <?php
$args = array(
  'pagename' => 'work'
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
    'post_type' => 'work',
    'post_per_page' => -1,
    'order' => "ASC"
  );
  $work = new WP_Query($args);

  if($work->have_posts()){
    while($work -> have_posts()){
    $work->the_post();
    ?>
    <div class="work__items">
      <div class="items__text">
        <h4><?php the_title() ?></h4>
        <p>
          <?php the_content(); ?>
        </p>
      </div>
      <div class="items__image">
        <figure >
          <?php the_post_thumbnail( 'large' ); ?>
        </figure>
      </div>   
    </div>
    <?php }
  }
  ?>
</section>
</div>