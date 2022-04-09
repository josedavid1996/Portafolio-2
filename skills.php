<div class="skills__container">
  <section class="skills" id="skills">
    
    <?php
  $args = array(
    'pagename' => 'skills-tools'
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
  
</div>