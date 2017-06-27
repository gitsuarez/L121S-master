<?php
 return array (
  'departments' => 
  array (
    'params' => 
    array (
    ),
    'uparams' => 
    array (
      0 => 'visible_if_online',
      1 => 'hidden',
      2 => 'disabled',
    ),
    'functions' => 
    array (
      0 => 'list',
    ),
    'script_path' => 'modules/lhdepartment/departments.php',
  ),
  'new' => 
  array (
    'params' => 
    array (
    ),
    'functions' => 
    array (
      0 => 'create',
    ),
    'script_path' => 'modules/lhdepartment/new.php',
  ),
  'edit' => 
  array (
    'params' => 
    array (
      0 => 'departament_id',
    ),
    'functions' => 
    array (
      0 => 'edit',
    ),
    'script_path' => 'modules/lhdepartment/edit.php',
  ),
  'index' => 
  array (
    'params' => 
    array (
    ),
    'functions' => 
    array (
      0 => 'list',
    ),
    'script_path' => 'modules/lhdepartment/index.php',
  ),
  'group' => 
  array (
    'params' => 
    array (
    ),
    'functions' => 
    array (
      0 => 'managegroups',
    ),
    'script_path' => 'modules/lhdepartment/group.php',
  ),
  'newgroup' => 
  array (
    'params' => 
    array (
    ),
    'functions' => 
    array (
      0 => 'managegroups',
    ),
    'script_path' => 'modules/lhdepartment/newgroup.php',
  ),
  'editgroup' => 
  array (
    'params' => 
    array (
      0 => 'id',
    ),
    'functions' => 
    array (
      0 => 'managegroups',
    ),
    'script_path' => 'modules/lhdepartment/editgroup.php',
  ),
  'deletegroup' => 
  array (
    'params' => 
    array (
      0 => 'id',
    ),
    'uparams' => 
    array (
      0 => 'csfr',
    ),
    'functions' => 
    array (
      0 => 'managegroups',
    ),
    'script_path' => 'modules/lhdepartment/deletegroup.php',
  ),
);
?>