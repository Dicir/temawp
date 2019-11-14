<?php

add_theme_suport('post-thumbnails');

function cadastrando_post_type_imoveis() {
  $nomeSingular = 'Imóvel';
  $nomePlural = 'Imóveis';
  $description = "Imóveis da imobiliária Malura'
  
  $labels = array(
    'name' => $nomePlural,
    'name_singular' => $nomeSingular,
    'add_new_item' => 'Adicionar novo ' . $nomeSingular,
    'edit_item' => 'Editar ' . $nomeSingular
   );
   
   $supports = array(
     'title',
     'editor',
     'thubmail'
   );
   
   $args = array(
     'lalels' => $labels,
     'public' => true,
     'description' => $description,
     'menu_icon => 'dashicons-admin-home',
     'supports' => $supports
   );
   
