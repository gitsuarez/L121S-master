<?php
 return array (
  'login' => 
  array (
    'params' => 
    array (
    ),
    'uparams' => 
    array (
      0 => 'r',
      1 => 'external_request',
    ),
    'script_path' => 'modules/lhuser/login.php',
  ),
  'autologin' => 
  array (
    'params' => 
    array (
      0 => 'hash',
    ),
    'uparams' => 
    array (
      0 => 'r',
      1 => 'u',
      2 => 'l',
      3 => 't',
    ),
    'script_path' => 'modules/lhuser/autologin.php',
  ),
  'logout' => 
  array (
    'params' => 
    array (
    ),
    'script_path' => 'modules/lhuser/logout.php',
  ),
  'account' => 
  array (
    'params' => 
    array (
    ),
    'uparams' => 
    array (
      0 => 'msg',
      1 => 'action',
      2 => 'csfr',
      3 => 'tab',
    ),
    'functions' => 
    array (
      0 => 'selfedit',
    ),
    'script_path' => 'modules/lhuser/account.php',
  ),
  'userlist' => 
  array (
    'params' => 
    array (
    ),
    'uparams' => 
    array (
      0 => 'email',
      1 => 'name',
      2 => 'username',
      3 => 'surname',
    ),
    'functions' => 
    array (
      0 => 'userlist',
    ),
    'script_path' => 'modules/lhuser/userlist.php',
  ),
  'grouplist' => 
  array (
    'params' => 
    array (
    ),
    'functions' => 
    array (
      0 => 'grouplist',
    ),
    'script_path' => 'modules/lhuser/grouplist.php',
  ),
  'edit' => 
  array (
    'params' => 
    array (
      0 => 'user_id',
    ),
    'uparams' => 
    array (
      0 => 'tab',
    ),
    'functions' => 
    array (
      0 => 'edituser',
    ),
    'script_path' => 'modules/lhuser/edit.php',
  ),
  'delete' => 
  array (
    'params' => 
    array (
      0 => 'user_id',
    ),
    'uparams' => 
    array (
      0 => 'csfr',
    ),
    'functions' => 
    array (
      0 => 'deleteuser',
    ),
    'script_path' => 'modules/lhuser/delete.php',
  ),
  'new' => 
  array (
    'params' => 
    array (
    ),
    'uparams' => 
    array (
      0 => 'tab',
    ),
    'functions' => 
    array (
      0 => 'createuser',
    ),
    'script_path' => 'modules/lhuser/new.php',
  ),
  'newgroup' => 
  array (
    'params' => 
    array (
    ),
    'functions' => 
    array (
      0 => 'creategroup',
      1 => 'editgroup',
    ),
    'script_path' => 'modules/lhuser/newgroup.php',
  ),
  'editgroup' => 
  array (
    'params' => 
    array (
      0 => 'group_id',
    ),
    'functions' => 
    array (
      0 => 'editgroup',
    ),
    'script_path' => 'modules/lhuser/editgroup.php',
  ),
  'groupassignuser' => 
  array (
    'params' => 
    array (
      0 => 'group_id',
    ),
    'functions' => 
    array (
      0 => 'groupassignuser',
    ),
    'script_path' => 'modules/lhuser/groupassignuser.php',
  ),
  'deletegroup' => 
  array (
    'params' => 
    array (
      0 => 'group_id',
    ),
    'uparams' => 
    array (
      0 => 'csfr',
    ),
    'functions' => 
    array (
      0 => 'deletegroup',
    ),
    'script_path' => 'modules/lhuser/deletegroup.php',
  ),
  'forgotpassword' => 
  array (
    'params' => 
    array (
    ),
    'script_path' => 'modules/lhuser/forgotpassword.php',
  ),
  'remindpassword' => 
  array (
    'params' => 
    array (
      0 => 'hash',
    ),
    'script_path' => 'modules/lhuser/remindpassword.php',
  ),
  'setsetting' => 
  array (
    'params' => 
    array (
      0 => 'identifier',
      1 => 'value',
    ),
    'script_path' => 'modules/lhuser/setsetting.php',
  ),
  'setsettingajax' => 
  array (
    'params' => 
    array (
      0 => 'identifier',
      1 => 'value',
    ),
    'uparams' => 
    array (
      0 => 'indifferent',
    ),
    'script_path' => 'modules/lhuser/setsettingajax.php',
  ),
  'setsettingajaxraw' => 
  array (
    'params' => 
    array (
      0 => 'identifier',
    ),
    'script_path' => 'modules/lhuser/setsettingajaxraw.php',
  ),
  'setoffline' => 
  array (
    'functions' => 
    array (
      0 => 'changeonlinestatus',
    ),
    'params' => 
    array (
      0 => 'status',
    ),
    'script_path' => 'modules/lhuser/setoffline.php',
  ),
  'setinvisible' => 
  array (
    'functions' => 
    array (
      0 => 'changevisibility',
    ),
    'params' => 
    array (
      0 => 'status',
    ),
    'script_path' => 'modules/lhuser/setinvisible.php',
  ),
  'setinactive' => 
  array (
    'functions' => 
    array (
      0 => 'selfedit',
    ),
    'params' => 
    array (
      0 => 'status',
    ),
    'script_path' => 'modules/lhuser/setinactive.php',
  ),
  'wentinactive' => 
  array (
    'functions' => 
    array (
      0 => 'selfedit',
    ),
    'params' => 
    array (
    ),
    'script_path' => 'modules/lhuser/wentinactive.php',
  ),
  'autologinconfig' => 
  array (
    'params' => 
    array (
    ),
    'uparams' => 
    array (
      0 => 'csfr',
    ),
    'functions' => 
    array (
      0 => 'userautologin',
    ),
    'script_path' => 'modules/lhuser/autologinconfig.php',
  ),
);
?>