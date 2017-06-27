<?php
 return array (
  'index' => 
  array (
    'params' => 
    array (
    ),
    'functions' => 
    array (
      0 => 'manage_fm',
    ),
    'script_path' => 'modules/lhform/index.php',
  ),
  'fill' => 
  array (
    'params' => 
    array (
      0 => 'form_id',
    ),
    'functions' => 
    array (
    ),
    'script_path' => 'modules/lhform/fill.php',
  ),
  'collected' => 
  array (
    'params' => 
    array (
      0 => 'form_id',
    ),
    'uparams' => 
    array (
      0 => 'action',
      1 => 'id',
      2 => 'csfr',
    ),
    'functions' => 
    array (
      0 => 'manage_fm',
    ),
    'script_path' => 'modules/lhform/collected.php',
  ),
  'viewcollected' => 
  array (
    'params' => 
    array (
      0 => 'collected_id',
    ),
    'functions' => 
    array (
      0 => 'manage_fm',
    ),
    'script_path' => 'modules/lhform/viewcollected.php',
  ),
  'embedcode' => 
  array (
    'params' => 
    array (
    ),
    'functions' => 
    array (
      0 => 'generate_js',
    ),
    'script_path' => 'modules/lhform/embedcode.php',
  ),
  'downloadcollected' => 
  array (
    'params' => 
    array (
      0 => 'form_id',
    ),
    'functions' => 
    array (
      0 => 'manage_fm',
    ),
    'script_path' => 'modules/lhform/downloadcollected.php',
  ),
  'downloaditem' => 
  array (
    'params' => 
    array (
      0 => 'collected_id',
    ),
    'functions' => 
    array (
      0 => 'manage_fm',
    ),
    'script_path' => 'modules/lhform/downloaditem.php',
  ),
  'download' => 
  array (
    'params' => 
    array (
      0 => 'collected_id',
      1 => 'attr_name',
    ),
    'functions' => 
    array (
      0 => 'manage_fm',
    ),
    'script_path' => 'modules/lhform/download.php',
  ),
  'embed' => 
  array (
    'params' => 
    array (
      0 => 'form_id',
    ),
    'functions' => 
    array (
    ),
    'script_path' => 'modules/lhform/embed.php',
  ),
  'formwidget' => 
  array (
    'params' => 
    array (
      0 => 'form_id',
    ),
    'script_path' => 'modules/lhform/formwidget.php',
  ),
);
?>