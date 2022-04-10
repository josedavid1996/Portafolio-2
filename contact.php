<div class="contact__container">
<section class="contact">
  <?php
  $args = array(
    'pagename' => 'contact'
  );

  $query = new WP_Query( $args );

  if($query -> have_posts()){
    while($query->have_posts()){
      $query ->the_post();
      ?>
      <h2><?php the_title() ?></h2>
      <?php the_content(); ?>
      <?php }
  }
  ?>
  <div class="contact__section">
    <form action="" class="contact__form">
      <input type="text" name="name" placeholder="Name">
      <input type="email" name="email" placeholder="Email">
      <textarea name="message" placeholder="Message" ></textarea>
      <input class="btn" type="submit" value="Send Email">
    </form>
    <div class="contact__text">
      <p>Feeling social? Find me on these online spaces too!</p>
    </div>
  </div>

</section>
</div>