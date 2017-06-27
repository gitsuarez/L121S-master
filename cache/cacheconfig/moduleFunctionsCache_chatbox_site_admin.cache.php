<?php
 return array (
  'list' => 
  array (
    'script' => 'list.php',
    'params' => 
    array (
    ),
    'functions' => 
    array (
      0 => 'manage_chatbox',
    ),
    'script_path' => 'modules/lhchatbox/list.php',
  ),
  'delete' => 
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
      0 => 'manage_chatbox',
    ),
    'script_path' => 'modules/lhchatbox/delete.php',
  ),
  'syncuser' => 
  array (
    'script' => 'syncuser.php',
    'params' => 
    array (
      0 => 'chat_id',
      1 => 'message_id',
      2 => 'hash',
    ),
    'uparams' => 
    array (
      0 => 'mode',
      1 => 'ot',
    ),
    'script_path' => 'modules/lhchatbox/syncuser.php',
  ),
  'addmsguser' => 
  array (
    'script' => 'addmsguser.php',
    'params' => 
    array (
      0 => 'chat_id',
      1 => 'hash',
    ),
    'uparams' => 
    array (
      0 => 'mode',
      1 => 'render',
    ),
    'script_path' => 'modules/lhchatbox/addmsguser.php',
  ),
  'view' => 
  array (
    'script' => 'view.php',
    'params' => 
    array (
      0 => 'id',
    ),
    'functions' => 
    array (
      0 => 'manage_chatbox',
    ),
    'script_path' => 'modules/lhchatbox/view.php',
  ),
  'new' => 
  array (
    'params' => 
    array (
      0 => 'id',
    ),
    'functions' => 
    array (
      0 => 'manage_chatbox',
    ),
    'script_path' => 'modules/lhchatbox/new.php',
  ),
  'chatwidget' => 
  array (
    'script' => 'chatwidget.php',
    'params' => 
    array (
    ),
    'uparams' => 
    array (
      0 => 'theme',
      1 => 'sound',
      2 => 'mode',
      3 => 'identifier',
      4 => 'chat_height',
      5 => 'hashchatbox',
    ),
    'script_path' => 'modules/lhchatbox/chatwidget.php',
  ),
  'getstatus' => 
  array (
    'script' => 'getstatus.php',
    'params' => 
    array (
    ),
    'functions' => 
    array (
    ),
    'uparams' => 
    array (
      0 => 'theme',
      1 => 'noresponse',
      2 => 'position',
      3 => 'top',
      4 => 'units',
      5 => 'width',
      6 => 'height',
      7 => 'chat_height',
      8 => 'sc',
      9 => 'scm',
      10 => 'dmn',
    ),
    'script_path' => 'modules/lhchatbox/getstatus.php',
  ),
  'embed' => 
  array (
    'script' => 'embed.php',
    'params' => 
    array (
    ),
    'uparams' => 
    array (
      0 => 'theme',
      1 => 'chat_height',
    ),
    'functions' => 
    array (
    ),
    'script_path' => 'modules/lhchatbox/embed.php',
  ),
  'embedcode' => 
  array (
    'script' => 'embedcode.php',
    'params' => 
    array (
    ),
    'functions' => 
    array (
      0 => 'manage_chatbox',
    ),
    'script_path' => 'modules/lhchatbox/embedcode.php',
  ),
  'edit' => 
  array (
    'script' => 'edit.php',
    'params' => 
    array (
      0 => 'id',
    ),
    'functions' => 
    array (
      0 => 'manage_chatbox',
    ),
    'script_path' => 'modules/lhchatbox/edit.php',
  ),
  'generalsettings' => 
  array (
    'params' => 
    array (
      0 => 'id',
    ),
    'functions' => 
    array (
      0 => 'manage_chatbox',
    ),
    'script_path' => 'modules/lhchatbox/generalsettings.php',
  ),
  'htmlcode' => 
  array (
    'script' => 'htmlcode.php',
    'params' => 
    array (
    ),
    'functions' => 
    array (
      0 => 'manage_chatbox',
    ),
    'script_path' => 'modules/lhchatbox/htmlcode.php',
  ),
  'chatwidgetclosed' => 
  array (
    'script' => 'chatwidgetclosed.php',
    'params' => 
    array (
    ),
    'script_path' => 'modules/lhchatbox/chatwidgetclosed.php',
  ),
  'configuration' => 
  array (
    'script' => 'configuration.php',
    'params' => 
    array (
    ),
    'script_path' => 'modules/lhchatbox/configuration.php',
  ),
);
?>