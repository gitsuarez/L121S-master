<?php
 return array (
  'adminchat' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
    ),
    'uparams' => 
    array (
      0 => 'remember',
      1 => 'arg',
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'multiple_arguments' => 
    array (
      0 => 'arg',
    ),
    'script_path' => 'modules/lhchat/adminchat.php',
  ),
  'getnotificationsdata' => 
  array (
    'params' => 
    array (
    ),
    'uparams' => 
    array (
      0 => 'id',
    ),
    'ajax' => true,
    'functions' => 
    array (
      0 => 'use',
    ),
    'multiple_arguments' => 
    array (
      0 => 'id',
    ),
    'script_path' => 'modules/lhchat/getnotificationsdata.php',
  ),
  'getcannedfiltered' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
    ),
    'uparams' => 
    array (
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/getcannedfiltered.php',
  ),
  'updateattribute' => 
  array (
    'params' => 
    array (
    ),
    'uparams' => 
    array (
      0 => 'hash',
      1 => 'hash_resume',
      2 => 'vid',
    ),
    'script_path' => 'modules/lhchat/updateattribute.php',
  ),
  'logevent' => 
  array (
    'params' => 
    array (
    ),
    'uparams' => 
    array (
      0 => 'hash',
      1 => 'hash_resume',
      2 => 'vid',
    ),
    'script_path' => 'modules/lhchat/logevent.php',
  ),
  'setnewvid' => 
  array (
    'params' => 
    array (
    ),
    'uparams' => 
    array (
    ),
    'script_path' => 'modules/lhchat/setnewvid.php',
  ),
  'redirectcontact' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
    ),
    'uparams' => 
    array (
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/redirectcontact.php',
  ),
  'changestatus' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
    ),
    'uparams' => 
    array (
    ),
    'functions' => 
    array (
      0 => 'canchangechatstatus',
    ),
    'script_path' => 'modules/lhchat/changestatus.php',
  ),
  'editprevious' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
    ),
    'uparams' => 
    array (
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/editprevious.php',
  ),
  'updatemsg' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
    ),
    'uparams' => 
    array (
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/updatemsg.php',
  ),
  'printchatadmin' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
    ),
    'uparams' => 
    array (
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/printchatadmin.php',
  ),
  'loadactivechats' => 
  array (
    'params' => 
    array (
    ),
    'uparams' => 
    array (
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/loadactivechats.php',
  ),
  'previewchat' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/previewchat.php',
  ),
  'closechatadmin' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/closechatadmin.php',
  ),
  'setsubstatus' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
      1 => 'substatus',
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/setsubstatus.php',
  ),
  'reopenchat' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/reopenchat.php',
  ),
  'adminleftchat' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/adminleftchat.php',
  ),
  'notificationsettings' => 
  array (
    'params' => 
    array (
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/notificationsettings.php',
  ),
  'startchatwithoperator' => 
  array (
    'params' => 
    array (
      0 => 'user_id',
    ),
    'uparams' => 
    array (
      0 => 'mode',
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/startchatwithoperator.php',
  ),
  'closechat' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
    ),
    'uparams' => 
    array (
      0 => 'csfr',
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/closechat.php',
  ),
  'sendmail' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/sendmail.php',
  ),
  'modifychat' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
    ),
    'functions' => 
    array (
      0 => 'modifychat',
    ),
    'script_path' => 'modules/lhchat/modifychat.php',
  ),
  'transferchat' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
    ),
    'functions' => 
    array (
      0 => 'allowtransfer',
    ),
    'script_path' => 'modules/lhchat/transferchat.php',
  ),
  'accepttransfer' => 
  array (
    'params' => 
    array (
      0 => 'transfer_id',
    ),
    'uparams' => 
    array (
      0 => 'postaction',
      1 => 'mode',
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/accepttransfer.php',
  ),
  'deletechatadmin' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
    ),
    'functions' => 
    array (
      0 => 'deletechat',
    ),
    'script_path' => 'modules/lhchat/deletechatadmin.php',
  ),
  'delete' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
    ),
    'uparams' => 
    array (
      0 => 'csfr',
    ),
    'functions' => 
    array (
      0 => 'deletechat',
    ),
    'script_path' => 'modules/lhchat/delete.php',
  ),
  'syncadmininterface' => 
  array (
    'params' => 
    array (
    ),
    'uparams' => 
    array (
      0 => 'mcd',
      1 => 'limitmc',
      2 => 'mcdprod',
      3 => 'activeu',
      4 => 'pendingu',
      5 => 'topen',
      6 => 'departmentd',
      7 => 'operatord',
      8 => 'actived',
      9 => 'pendingd',
      10 => 'closedd',
      11 => 'unreadd',
      12 => 'limita',
      13 => 'limitp',
      14 => 'limitc',
      15 => 'limitu',
      16 => 'limito',
      17 => 'limitd',
      18 => 'activedprod',
      19 => 'unreaddprod',
      20 => 'pendingdprod',
      21 => 'closeddprod',
      22 => 'psort',
    ),
    'ajax' => true,
    'functions' => 
    array (
      0 => 'use',
    ),
    'multiple_arguments' => 
    array (
      0 => 'mcd',
      1 => 'operatord',
      2 => 'mcdprod',
      3 => 'actived',
      4 => 'closedd',
      5 => 'pendingd',
      6 => 'unreadd',
      7 => 'departmentd',
      8 => 'activedprod',
      9 => 'unreaddprod',
      10 => 'pendingdprod',
      11 => 'closeddprod',
    ),
    'script_path' => 'modules/lhchat/syncadmininterface.php',
  ),
  'loadinitialdata' => 
  array (
    'params' => 
    array (
    ),
    'uparams' => 
    array (
    ),
    'ajax' => true,
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/loadinitialdata.php',
  ),
  'list' => 
  array (
    'params' => 
    array (
    ),
    'uparams' => 
    array (
      0 => 'nick',
      1 => 'email',
      2 => 'timefrom',
      3 => 'timeto',
      4 => 'department_id',
      5 => 'user_id',
      6 => 'print',
      7 => 'xls',
      8 => 'fbst',
      9 => 'chat_status',
      10 => 'hum',
      11 => 'product_id',
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/list.php',
  ),
  'dashboardwidgets' => 
  array (
    'params' => 
    array (
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/dashboardwidgets.php',
  ),
  'chattabs' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
    ),
    'functions' => 
    array (
      0 => 'allowchattabs',
    ),
    'script_path' => 'modules/lhchat/chattabs.php',
  ),
  'chattabschrome' => 
  array (
    'params' => 
    array (
    ),
    'uparams' => 
    array (
      0 => 'mode',
    ),
    'functions' => 
    array (
    ),
    'script_path' => 'modules/lhchat/chattabschrome.php',
  ),
  'single' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
    ),
    'functions' => 
    array (
      0 => 'singlechatwindow',
    ),
    'script_path' => 'modules/lhchat/single.php',
  ),
  'chatfootprint' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/chatfootprint.php',
  ),
  'refreshonlineinfo' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/refreshonlineinfo.php',
  ),
  'checkscreenshot' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/checkscreenshot.php',
  ),
  'checkscreenshotonline' => 
  array (
    'params' => 
    array (
      0 => 'online_id',
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/checkscreenshotonline.php',
  ),
  'operatortyping' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
      1 => 'status',
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/operatortyping.php',
  ),
  'syncadmin' => 
  array (
    'params' => 
    array (
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/syncadmin.php',
  ),
  'addmsgadmin' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/addmsgadmin.php',
  ),
  'updatechatstatus' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/updatechatstatus.php',
  ),
  'addoperation' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/addoperation.php',
  ),
  'refreshcustomfields' => 
  array (
    'params' => 
    array (
    ),
    'uparams' => 
    array (
      0 => 'vid',
      1 => 'hash',
      2 => 'hash_resume',
    ),
    'script_path' => 'modules/lhchat/refreshcustomfields.php',
  ),
  'addonlineoperation' => 
  array (
    'params' => 
    array (
      0 => 'online_user_id',
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/addonlineoperation.php',
  ),
  'addonlineoperationiframe' => 
  array (
    'params' => 
    array (
      0 => 'online_user_id',
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/addonlineoperationiframe.php',
  ),
  'saveremarks' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/saveremarks.php',
  ),
  'saveonlinenotes' => 
  array (
    'params' => 
    array (
      0 => 'online_user_id',
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/saveonlinenotes.php',
  ),
  'addmsguser' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
      1 => 'hash',
    ),
    'uparams' => 
    array (
      0 => 'mode',
    ),
    'script_path' => 'modules/lhchat/addmsguser.php',
  ),
  'editprevioususer' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
      1 => 'hash',
    ),
    'uparams' => 
    array (
    ),
    'script_path' => 'modules/lhchat/editprevioususer.php',
  ),
  'updatemsguser' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
      1 => 'hash',
    ),
    'uparams' => 
    array (
      0 => 'mode',
    ),
    'script_path' => 'modules/lhchat/updatemsguser.php',
  ),
  'getmessage' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
      1 => 'hash',
      2 => 'msgid',
    ),
    'uparams' => 
    array (
      0 => 'mode',
    ),
    'script_path' => 'modules/lhchat/getmessage.php',
  ),
  'getmessageadmin' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
      1 => 'msgid',
    ),
    'uparams' => 
    array (
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/getmessageadmin.php',
  ),
  'voteaction' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
      1 => 'hash',
      2 => 'type',
    ),
    'uparams' => 
    array (
    ),
    'script_path' => 'modules/lhchat/voteaction.php',
  ),
  'syncuser' => 
  array (
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
      2 => 'theme',
      3 => 'modeembed',
    ),
    'script_path' => 'modules/lhchat/syncuser.php',
  ),
  'editnick' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
      1 => 'hash',
    ),
    'uparams' => 
    array (
    ),
    'script_path' => 'modules/lhchat/editnick.php',
  ),
  'usertyping' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
      1 => 'hash',
      2 => 'status',
    ),
    'uparams' => 
    array (
    ),
    'script_path' => 'modules/lhchat/usertyping.php',
  ),
  'checkchatstatus' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
      1 => 'hash',
    ),
    'uparams' => 
    array (
      0 => 'mode',
      1 => 'theme',
      2 => 'dot',
    ),
    'script_path' => 'modules/lhchat/checkchatstatus.php',
  ),
  'transferuser' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
      1 => 'item_id',
    ),
    'functions' => 
    array (
      0 => 'allowtransfer',
    ),
    'script_path' => 'modules/lhchat/transferuser.php',
  ),
  'blockuser' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
    ),
    'functions' => 
    array (
      0 => 'allowblockusers',
    ),
    'script_path' => 'modules/lhchat/blockuser.php',
  ),
  'blockedusers' => 
  array (
    'params' => 
    array (
    ),
    'uparams' => 
    array (
      0 => 'remove_block',
      1 => 'csfr',
    ),
    'functions' => 
    array (
      0 => 'allowblockusers',
    ),
    'script_path' => 'modules/lhchat/blockedusers.php',
  ),
  'getstatus' => 
  array (
    'params' => 
    array (
    ),
    'uparams' => 
    array (
      0 => 'ua',
      1 => 'ma',
      2 => 'operator',
      3 => 'theme',
      4 => 'priority',
      5 => 'disable_pro_active',
      6 => 'click',
      7 => 'position',
      8 => 'hide_offline',
      9 => 'check_operator_messages',
      10 => 'top',
      11 => 'units',
      12 => 'leaveamessage',
      13 => 'department',
      14 => 'identifier',
      15 => 'survey',
      16 => 'dot',
    ),
    'multiple_arguments' => 
    array (
      0 => 'department',
      1 => 'ua',
    ),
    'script_path' => 'modules/lhchat/getstatus.php',
  ),
  'chatcheckstatus' => 
  array (
    'params' => 
    array (
    ),
    'uparams' => 
    array (
      0 => 'status',
      1 => 'department',
      2 => 'vid',
      3 => 'uactiv',
      4 => 'wopen',
      5 => 'uaction',
      6 => 'hash',
      7 => 'hash_resume',
      8 => 'dot',
      9 => 'hide_offline',
      10 => 'isproactive',
    ),
    'multiple_arguments' => 
    array (
      0 => 'department',
    ),
    'script_path' => 'modules/lhchat/chatcheckstatus.php',
  ),
  'getstatusembed' => 
  array (
    'params' => 
    array (
    ),
    'uparams' => 
    array (
      0 => 'ua',
      1 => 'operator',
      2 => 'theme',
      3 => 'hide_offline',
      4 => 'leaveamessage',
      5 => 'department',
      6 => 'priority',
      7 => 'survey',
    ),
    'multiple_arguments' => 
    array (
      0 => 'department',
      1 => 'ua',
    ),
    'script_path' => 'modules/lhchat/getstatusembed.php',
  ),
  'startchat' => 
  array (
    'params' => 
    array (
    ),
    'uparams' => 
    array (
      0 => 'ua',
      1 => 'switchform',
      2 => 'operator',
      3 => 'theme',
      4 => 'er',
      5 => 'vid',
      6 => 'hash_resume',
      7 => 'sound',
      8 => 'hash',
      9 => 'offline',
      10 => 'leaveamessage',
      11 => 'department',
      12 => 'priority',
      13 => 'chatprefill',
      14 => 'survey',
      15 => 'prod',
      16 => 'phash',
      17 => 'pvhash',
    ),
    'multiple_arguments' => 
    array (
      0 => 'department',
      1 => 'ua',
      2 => 'prod',
    ),
    'script_path' => 'modules/lhchat/startchat.php',
  ),
  'chatwidget' => 
  array (
    'params' => 
    array (
    ),
    'uparams' => 
    array (
      0 => 'ua',
      1 => 'switchform',
      2 => 'operator',
      3 => 'theme',
      4 => 'vid',
      5 => 'sound',
      6 => 'hash',
      7 => 'hash_resume',
      8 => 'mode',
      9 => 'offline',
      10 => 'leaveamessage',
      11 => 'department',
      12 => 'priority',
      13 => 'chatprefill',
      14 => 'survey',
      15 => 'sdemo',
      16 => 'prod',
      17 => 'phash',
      18 => 'pvhash',
      19 => 'fullheight',
    ),
    'multiple_arguments' => 
    array (
      0 => 'department',
      1 => 'ua',
      2 => 'prod',
    ),
    'script_path' => 'modules/lhchat/chatwidget.php',
  ),
  'reopen' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
      1 => 'hash',
    ),
    'uparams' => 
    array (
      0 => 'mode',
      1 => 'embedmode',
      2 => 'theme',
      3 => 'fullheight',
    ),
    'script_path' => 'modules/lhchat/reopen.php',
  ),
  'readoperatormessage' => 
  array (
    'params' => 
    array (
    ),
    'uparams' => 
    array (
      0 => 'operator',
      1 => 'theme',
      2 => 'priority',
      3 => 'vid',
      4 => 'department',
      5 => 'playsound',
      6 => 'ua',
      7 => 'survey',
      8 => 'fullheight',
      9 => 'inv',
    ),
    'multiple_arguments' => 
    array (
      0 => 'department',
      1 => 'ua',
    ),
    'script_path' => 'modules/lhchat/readoperatormessage.php',
  ),
  'chatcheckoperatormessage' => 
  array (
    'params' => 
    array (
    ),
    'uparams' => 
    array (
      0 => 'tz',
      1 => 'operator',
      2 => 'theme',
      3 => 'priority',
      4 => 'vid',
      5 => 'count_page',
      6 => 'identifier',
      7 => 'department',
      8 => 'ua',
      9 => 'survey',
      10 => 'uactiv',
      11 => 'wopen',
      12 => 'fullheight',
      13 => 'dyn',
    ),
    'multiple_arguments' => 
    array (
      0 => 'department',
      1 => 'ua',
      2 => 'dyn',
    ),
    'script_path' => 'modules/lhchat/chatcheckoperatormessage.php',
  ),
  'logpageview' => 
  array (
    'params' => 
    array (
    ),
    'uparams' => 
    array (
      0 => 'tz',
      1 => 'vid',
      2 => 'identifier',
      3 => 'department',
      4 => 'ua',
      5 => 'uactiv',
      6 => 'wopen',
    ),
    'multiple_arguments' => 
    array (
      0 => 'department',
      1 => 'ua',
    ),
    'script_path' => 'modules/lhchat/logpageview.php',
  ),
  'chatwidgetclosed' => 
  array (
    'params' => 
    array (
    ),
    'uparams' => 
    array (
      0 => 'vid',
      1 => 'hash',
      2 => 'eclose',
    ),
    'script_path' => 'modules/lhchat/chatwidgetclosed.php',
  ),
  'chat' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
      1 => 'hash',
    ),
    'uparams' => 
    array (
      0 => 'theme',
      1 => 'er',
      2 => 'survey',
    ),
    'script_path' => 'modules/lhchat/chat.php',
  ),
  'printchat' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
      1 => 'hash',
    ),
    'script_path' => 'modules/lhchat/printchat.php',
  ),
  'chatpreview' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
      1 => 'hash',
    ),
    'script_path' => 'modules/lhchat/chatpreview.php',
  ),
  'bbcodeinsert' => 
  array (
    'params' => 
    array (
    ),
    'script_path' => 'modules/lhchat/bbcodeinsert.php',
  ),
  'chatwidgetchat' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
      1 => 'hash',
    ),
    'uparams' => 
    array (
      0 => 'sound',
      1 => 'mode',
      2 => 'theme',
      3 => 'cstarted',
      4 => 'survey',
      5 => 'pchat',
      6 => 'fullheight',
    ),
    'script_path' => 'modules/lhchat/chatwidgetchat.php',
  ),
  'userclosechat' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
      1 => 'hash',
    ),
    'uparams' => 
    array (
      0 => 'eclose',
    ),
    'script_path' => 'modules/lhchat/userclosechat.php',
  ),
  'onlineusers' => 
  array (
    'params' => 
    array (
    ),
    'ajax' => true,
    'uparams' => 
    array (
      0 => 'clear_list',
      1 => 'method',
      2 => 'deletevisitor',
      3 => 'timeout',
      4 => 'csfr',
      5 => 'department',
      6 => 'maxrows',
    ),
    'functions' => 
    array (
      0 => 'use_onlineusers',
    ),
    'script_path' => 'modules/lhchat/onlineusers.php',
  ),
  'jsononlineusers' => 
  array (
    'params' => 
    array (
    ),
    'uparams' => 
    array (
      0 => 'department',
      1 => 'maxrows',
      2 => 'timeout',
    ),
    'functions' => 
    array (
      0 => 'use_onlineusers',
    ),
    'script_path' => 'modules/lhchat/jsononlineusers.php',
  ),
  'getonlineuserinfo' => 
  array (
    'params' => 
    array (
      0 => 'id',
    ),
    'uparams' => 
    array (
    ),
    'functions' => 
    array (
      0 => 'use_onlineusers',
    ),
    'script_path' => 'modules/lhchat/getonlineuserinfo.php',
  ),
  'sendnotice' => 
  array (
    'params' => 
    array (
      0 => 'online_id',
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/sendnotice.php',
  ),
  'geoconfiguration' => 
  array (
    'params' => 
    array (
    ),
    'uparams' => 
    array (
    ),
    'functions' => 
    array (
      0 => 'administrategeoconfig',
    ),
    'script_path' => 'modules/lhchat/geoconfiguration.php',
  ),
  'listchatconfig' => 
  array (
    'params' => 
    array (
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/listchatconfig.php',
  ),
  'editchatconfig' => 
  array (
    'params' => 
    array (
      0 => 'config_id',
    ),
    'functions' => 
    array (
      0 => 'administrateconfig',
    ),
    'script_path' => 'modules/lhchat/editchatconfig.php',
  ),
  'syncandsoundesetting' => 
  array (
    'params' => 
    array (
    ),
    'functions' => 
    array (
      0 => 'administrateconfig',
    ),
    'script_path' => 'modules/lhchat/syncandsoundesetting.php',
  ),
  'startchatformsettings' => 
  array (
    'params' => 
    array (
    ),
    'functions' => 
    array (
      0 => 'administrateconfig',
    ),
    'script_path' => 'modules/lhchat/startchatformsettings.php',
  ),
  'cannedmsg' => 
  array (
    'params' => 
    array (
    ),
    'uparams' => 
    array (
      0 => 'action',
      1 => 'id',
      2 => 'csfr',
    ),
    'functions' => 
    array (
      0 => 'administratecannedmsg',
    ),
    'script_path' => 'modules/lhchat/cannedmsg.php',
  ),
  'maintenance' => 
  array (
    'params' => 
    array (
    ),
    'uparams' => 
    array (
      0 => 'csfr',
      1 => 'action',
    ),
    'functions' => 
    array (
      0 => 'maintenance',
    ),
    'script_path' => 'modules/lhchat/maintenance.php',
  ),
  'newcannedmsg' => 
  array (
    'params' => 
    array (
    ),
    'functions' => 
    array (
      0 => 'administratecannedmsg',
    ),
    'script_path' => 'modules/lhchat/newcannedmsg.php',
  ),
  'cannedmsgedit' => 
  array (
    'params' => 
    array (
      0 => 'id',
    ),
    'functions' => 
    array (
      0 => 'administratecannedmsg',
    ),
    'script_path' => 'modules/lhchat/cannedmsgedit.php',
  ),
  'geoadjustment' => 
  array (
    'params' => 
    array (
    ),
    'functions' => 
    array (
      0 => 'geoadjustment',
    ),
    'script_path' => 'modules/lhchat/geoadjustment.php',
  ),
  'accept' => 
  array (
    'params' => 
    array (
      0 => 'hash',
      1 => 'validation_hash',
      2 => 'email',
    ),
    'script_path' => 'modules/lhchat/accept.php',
  ),
  'sendchat' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
      1 => 'hash',
    ),
    'script_path' => 'modules/lhchat/sendchat.php',
  ),
  'transferchatrefilter' => 
  array (
    'params' => 
    array (
      0 => 'chat_id',
    ),
    'functions' => 
    array (
      0 => 'use',
    ),
    'script_path' => 'modules/lhchat/transferchatrefilter.php',
  ),
);
?>