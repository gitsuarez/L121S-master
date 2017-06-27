<div class="row"><div class="col-xs-9"><div id="status-chat"><?php  if ($chat->status == erLhcoreClassModelChat::STATUS_CLOSED_CHAT) : ?><h4>This chat is closed.</h4><?php  elseif (($user = $chat->user) !== false) : ?><?php   ?><div class="operator-info float-break"><div class="pull-left pr5"><?php  if ($user->has_photo) : ?><img src="<?php  echo $user->photo_path?>" alt="<?php  echo htmlspecialchars($user->name_support)?>" /><?php  else : ?><i class="icon-assistant material-icons">account_box</i><?php  endif;?></div><div class="pl10"><div><strong><?php  echo htmlspecialchars($user->name_support)?></strong></div><?php  if (isset($extraMessage)) : ?><i><?php  echo $extraMessage;?></i><?php  endif;?><?php   ?><?php  if (!isset($hideThumbs) || $hideThumbs == false) : ?><?php  if (!isset($theme) || $theme === false || $theme->show_voting == 1) : ?><i class="material-icons<?php  if ($chat->fbst == 1) : ?> up-voted<?php  endif;?> up-vote-action" role="button" data-id="1" onclick="lhinst.voteAction($(this))" >thumb_up</i><i class="material-icons<?php  if ($chat->fbst == 2) : ?> down-voted<?php  endif;?> down-vote-action" role="button" data-id="2" onclick="lhinst.voteAction($(this))">thumb_down</i><?php  endif;?><?php  if ($user->skype != '') : ?><a href="skype:<?php  echo htmlspecialchars($user->skype)?>?call" class="material-icons" title="Skype call">phone_in_talk</a><?php  endif;?><?php  endif;?><?php   ?></div></div><?php  else : ?><h4>Pending confirm</h4><?php  endif; ?></div><?php  if ( '1' == 1 && '1' == 1 && erLhcoreClassChat::canReopen($chat) ) : ?><a href="/richard/sites/live121support.com-master/index.php/chat/reopen/<?php  echo $chat->id?>/<?php  echo $chat->hash?><?php  if ( isset($chat_widget_mode) && $chat_widget_mode == true ) : ?>/(mode)/widget<?php  endif; ?><?php  if ( isset($chat_embed_mode) && $chat_embed_mode == true ) : ?>/(embedmode)/embed<?php  endif;?>" class="btn btn-default" >Resume chat</a><?php  endif; ?><?php  if (!isset($paid_chat_params['allow_read']) || $paid_chat_params['allow_read'] == false) : ?><?php  if ($chat->status == erLhcoreClassModelChat::STATUS_CLOSED_CHAT && ( (isset($chat_widget_mode) && $chat_widget_mode == true && $chat->time < time()-1800)) ) : ?><input type="button" class="btn btn-default mb10" value="Close" onclick="lhinst.userclosedchatembed();" /><?php  endif;?><?php  endif;?></div><div class="col-xs-3 mb5"><?php   $soundData = erLhcoreClassModelChatConfig::fetch('sync_sound_settings')->data; $soundMessageEnabled = erLhcoreClassModelUserSetting::getSetting('chat_message',(int)($soundData['new_message_sound_user_enabled'])); ?><div class="btn-group pull-right" role="group"><?php   ?><button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons mr-0">settings_applications</i><span class="caret"></span></button><ul role="menu" data-dropdown-content class="dropdown-menu widget-options"><li role="menuitem"><a href="#" onclick="return lhinst.disableChatSoundUser($(this))" title="Enable/Disable sound about new messages from the operator"><i class="material-icons mat-100 mr-0"><?php  $soundMessageEnabled == 0 ? print 'volume_off' : print 'volume_up'?></i></a></li><?php  if (isset($chat)) : ?><?php  if ((int)'0' == 0) : ?><li role="menuitem"><a target="_blank" href="/richard/sites/live121support.com-master/index.php/chat/printchat/<?php  echo $chat->id?>/<?php  echo $chat->hash?>" class="material-icons mat-100 mr-0" title="Print">print</a></li><?php  endif;?><?php  if ((int)'0' == 0) : ?><li role="menuitem"><a target="_blank" onclick="lhc.revealModal({'url':'/richard/sites/live121support.com-master/index.php/chat/sendchat/<?php  echo $chat->id?>/<?php  echo $chat->hash?>'});return false;" href="#" class="material-icons mat-100 mr-0" title="Send chat transcript to your e-mail">email</a></li><?php  endif;?><?php  $user_file_upload_enabled = true;?><?php  if ($user_file_upload_enabled == true) : ?><?php  $fileData = (array)erLhcoreClassModelChatConfig::fetch('file_configuration')->data ?><?php  if (isset($fileData['active_user_upload']) && $fileData['active_user_upload'] == true) : ?><li role="menuitem"><a class="file-uploader" href="#"><i class="material-icons">attach_file</i><!-- The file input field used as target for the file upload widget -->
<input id="fileupload" type="file" name="files[]" multiple></a></li><?php  endif;?><?php  endif;?><?php  if ((int)'0' == 0 && isset($chat_widget_mode) && $chat_widget_mode == true) : ?><li role="menuitem"><a onclick="return lhinst.explicitChatCloseByUser();" href="#" title="End the chat"><i class="material-icons mr-0">close</i></a></li><?php  endif;?><?php  endif; ?><?php   ?></ul></div><?php  if ( isset($chat) && isset($fileData['active_user_upload']) && $fileData['active_user_upload'] == true ) : ?><script>lhinst.addFileUserUpload({ft_msg:'Not an accepted file type',fs_msg:'Filesize is too big',hash:'<?php  echo $chat->hash?>',chat_id:'<?php  echo $chat->id?>',fs:<?php  echo $fileData['fs_max']*1024?>,ft_us:/(\.|\/)(<?php  echo $fileData['ft_us']?>)$/i});</script><?php  endif;?></div></div><?php  if ( $chat->status == erLhcoreClassModelChat::STATUS_ACTIVE_CHAT || $chat->status == erLhcoreClassModelChat::STATUS_PENDING_CHAT || ($chat->status == erLhcoreClassModelChat::STATUS_CLOSED_CHAT && $chat->time > time()-1800) || (isset($paid_chat_params['allow_read']) && $paid_chat_params['allow_read'] == true)) : ?><div id="messages"<?php  if (isset($fullheight) && $fullheight == true) : ?> class="fullheight"<?php  endif ?>><div id="messagesBlockWrap"><div class="msgBlock" <?php  if ('' > 0) : ?>style="height:<?php  echo (int)''?>px"<?php  endif?> id="messagesBlock"><?php $lastMessageID = 0; $lastOperatorChanged = false; $lastOperatorId = false; foreach (erLhcoreClassChat::getChatMessages($chat_id) as $msg) : if ($lastOperatorId !== false && $lastOperatorId != $msg['user_id']) { $lastOperatorChanged = true; } else { $lastOperatorChanged = false; } $lastOperatorId = $msg['user_id']; ?><?php  if ($msg['user_id'] > -1 || $msg['user_id'] == -2) : ?><?php  if ($msg['user_id'] == 0) { ?><div class="message-row response" id="msg-<?php  echo $msg['id']?>" data-op-id="<?php  echo $msg['user_id']?>"><div class="msg-date"><?php  if (date('Ymd') == date('Ymd',$msg['time'])) { echo date(erLhcoreClassModule::$dateHourFormat,$msg['time']);} else { echo date(erLhcoreClassModule::$dateDateHourFormat,$msg['time']);}; ?></div><span class="usr-tit<?php  echo $msg['user_id'] == 0 ? ' vis-tit' : ' op-tit'?>"<?php  if ($msg['user_id'] == 0) : ?> title="Edit nick" onclick="lhinst.eNick()" role="button"<?php  endif;?>><i class="material-icons chat-operators mi-fs15 mr-0">face</i><?php  echo htmlspecialchars($chat->nick)?></span><?php  echo erLhcoreClassBBCode::make_clickable(htmlspecialchars($msg['msg']))?></div><?php  } else { ?><div class="message-row message-admin<?php  (isset($lastOperatorChanged) && $lastOperatorChanged == true ? print ' operator-changes' : '') ?>" id="msg-<?php  echo $msg['id']?>" data-op-id="<?php  echo $msg['user_id']?>"><div class="msg-date"><?php  if (date('Ymd') == date('Ymd',$msg['time'])) { echo date(erLhcoreClassModule::$dateHourFormat,$msg['time']);} else { echo date(erLhcoreClassModule::$dateDateHourFormat,$msg['time']);}; ?></div><span class="usr-tit<?php  echo $msg['user_id'] == 0 ? ' vis-tit' : ' op-tit'?>"><i class="material-icons chat-operators mi-fs15 mr-0">account_box</i><?php  echo htmlspecialchars($msg['name_support'])?></span><?php  echo erLhcoreClassBBCode::make_clickable(htmlspecialchars($msg['msg']))?></div><?php  } ?><?php  endif;?><?php  $lastMessageID = $msg['id']; endforeach; ?></div></div></div><div id="id-operator-typing"></div><?php  if ($chat->status != erLhcoreClassModelChat::STATUS_CLOSED_CHAT) : ?><div id="ChatMessageContainer"><div class="user-chatwidget-buttons" id="ChatSendButtonContainer"><div class="btn-group pull-right" role="group"><button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons mr-0">&#xE254;</i><span class="caret"></span></button><ul role="menu" data-dropdown-content class="dropdown-menu list-inline text-edit-menu"><li role="menuitem"><a href="#" onclick="lhinst.addmsguser()" title="Send"><i class="material-icons mat-100 mr-0">&#xE0C9;</i></a></li><?php  if ('1' == 1) : ?><li role="menuitem"><a href="#" onclick="return lhc.revealModal({'url':'/richard/sites/live121support.com-master/index.php/chat/bbcodeinsert'})" title="BB Code"><i class="material-icons mat-100 mr-0">&#xE86F;</i></a></li><?php  endif; ?><?php  if (isset($chat_embed_mode) && $chat_embed_mode == true) : ?><li role="menuitem"><a href="#" title="Close" onclick="lhinst.userclosedchatembed();" ><i class="material-icons mat-100 mr-0">close</i></a></li><?php  endif;?></ul></div></div><textarea autofocus="autofocus" class="form-control live-chat-message" rows="4" aria-required="true" required name="ChatMessage" aria-label="Enter your message" placeholder="Enter your message" id="CSChatMessage" ></textarea><script type="text/javascript">jQuery('#CSChatMessage').bind('keydown', 'return', function (evt){lhinst.addmsguser();return false;});jQuery('#CSChatMessage').bind('keyup', 'up', function (evt){lhinst.editPreviousUser();});lhinst.initTypingMonitoringUser('<?php  echo $chat_id?>');lhinst.afterUserChatInit();</script></div><?php  endif;?><script type="text/javascript">lhinst.setChatID('<?php  echo $chat_id?>');lhinst.setChatHash('<?php  echo $hash?>');lhinst.setLastUserMessageID('<?php  echo $lastMessageID;?>');<?php  if ( isset($chat_widget_mode) && $chat_widget_mode == true ) : ?>lhinst.setWidgetMode(true);<?php  if (isset($fullheight) && $fullheight == true) : ?>var fullHeightFunction = function() {var bodyHeight = $(document.body).outerHeight();var messageBlockHeight = $('#messages').outerHeight();var widgetLayoutHeight = $('#widget-layout').outerHeight();var messageBlockFullHeight = bodyHeight - (widgetLayoutHeight - messageBlockHeight) - 10;$('#messagesBlockWrap').height(messageBlockFullHeight);$('#messagesBlock').css('max-height',messageBlockFullHeight);setTimeout(fullHeightFunction, 200);};setTimeout(fullHeightFunction, 200);<?php  endif; ?><?php  endif; ?><?php  if ( isset($theme) && $theme !== false ) : ?>lhinst.setTheme('<?php  echo $theme->id?>');<?php  endif; ?><?php  if ( isset($survey) && $survey !== false ) : ?>lhinst.setSurvey('<?php  echo $survey?>');<?php  endif; ?><?php  if (isset($chat_embed_mode) && $chat_embed_mode == true) : ?>lhinst.setEmbedMode(true);<?php  endif;?>setTimeout(function(){$('#messagesBlock').scrollTop($('#messagesBlock').prop('scrollHeight'));},100);// Start user chat synchronization
lhinst.chatsyncuserpending();lhinst.scheduleSync();$( document ).ready(function() {if (jQuery('#CSChatMessage').size() > 0) {jQuery('#CSChatMessage').focus();jQuery('#CSChatMessage')[0].setSelectionRange(1000,1000);}});$(window).bind('beforeunload', function(){lhinst.userclosedchat();});</script><?php  endif;?>