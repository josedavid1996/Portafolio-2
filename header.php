<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Portafolio</title>
<?php wp_head(  )?>
</head>
<!-- <style>
  html{
    margin: 0 !important;

  }
</style> -->
<body>
  <header class="header">
    <nav class="header__nav is-active" >
          <?php wp_nav_menu(
            array (
              'theme_location' => 'top-menu',
              'menu_class' => 'header__list',
              'container' => 'container-menu'
            )
            );
        
          ?>
        </nav>
        <span class="header__icon" >
          <i class="fa-solid fa-bars" id="menu__show"></i>
        </span>

  </header>
