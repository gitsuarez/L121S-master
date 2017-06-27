<?php
 return array (
  'roles' => 
  array (
    'script' => 'roles.php',
    'params' => 
    array (
    ),
    'functions' => 
    array (
      0 => 'list',
    ),
    'script_path' => 'modules/lhpermission/roles.php',
  ),
  'newrole' => 
  array (
    'script' => 'newrole.php',
    'params' => 
    array (
    ),
    'functions' => 
    array (
      0 => 'new',
    ),
    'script_path' => 'modules/lhpermission/newrole.php',
  ),
  'editrole' => 
  array (
    'script' => 'editrole.php',
    'params' => 
    array (
      0 => 'role_id',
    ),
    'functions' => 
    array (
      0 => 'edit',
    ),
    'script_path' => 'modules/lhpermission/editrole.php',
  ),
  'getpermissionsummary' => 
  array (
    'params' => 
    array (
      0 => 'user_id',
    ),
    'functions' => 
    array (
      0 => 'see_permissions',
    ),
    'script_path' => 'modules/lhpermission/getpermissionsummary.php',
  ),
  'request' => 
  array (
    'params' => 
    array (
      0 => 'permissions',
    ),
    'functions' => 
    array (
      0 => 'see_permissions',
    ),
    'script_path' => 'modules/lhpermission/request.php',
  ),
  'modulefunctions' => 
  array (
    'script' => 'modulefunctions.php',
    'params' => 
    array (
      0 => 'module_path',
    ),
    'functions' => 
    array (
      0 => 'edit',
    ),
    'script_path' => 'modules/lhpermission/modulefunctions.php',
  ),
  'deleterole' => 
  array (
    'script' => 'deleterole.php',
    'params' => 
    array (
      0 => 'role_id',
    ),
    'uparams' => 
    array (
      0 => 'csfr',
    ),
    'functions' => 
    array (
      0 => 'delete',
    ),
    'script_path' => 'modules/lhpermission/deleterole.php',
  ),
  'groupassignrole' => 
  array (
    'script' => 'groupassignrole.php',
    'params' => 
    array (
      0 => 'group_id',
    ),
    'functions' => 
    array (
      0 => 'delete',
    ),
    'script_path' => 'modules/lhpermission/groupassignrole.php',
  ),
  'roleassigngroup' => 
  array (
    'script' => 'roleassigngroup.php',
    'params' => 
    array (
      0 => 'role_id',
    ),
    'functions' => 
    array (
      0 => 'delete',
    ),
    'script_path' => 'modules/lhpermission/roleassigngroup.php',
  ),
);
?>