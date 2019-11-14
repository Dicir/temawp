<?php get_header(); ?>
<main class="home-main">
  <div class="container">
    <h1>Bem Vindo!</h1>
    
    <?php
    $args = array( 'post_type' => 'imovel' );
    $loop = new WP_Query( $args );
    if( $loop->have_post() ) { ?>
    <ul class="imoveis-listagem">
      <?php while( $loop->have_post() ) {
        $loop->the_post();
      ?>
      
      <li class"imoveis-listagem-item">
      
        <?php the_post_thumbnail(); ?>
        <h2><?php the_title(); ?></h2>
        <div><?php the_content(); ?></div>
