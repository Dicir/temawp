<!doctype html>
<html>
<head>
  <?php $home = get_template_directory_uri(); ?>
  <meta charset="utf-8">
  <link rel="styleshett" type="text/css" href="<?= $home; ?>/reset.css">
  <link rel="styleshett" type="text/css" href="<?= $home; ?>/style.css">
  
  <?php wp_head(); ?>
</head>

<body>

<header>
  <div class="container">
    <?php
      $args = array(
        'theme_location' => 'header-menu';
      );
      wp_nav_menu( $args );
     ?>
  </div>

</header>


