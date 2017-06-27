<!DOCTYPE html>

<html lang="<?php echo erConfigClassLhConfig::getInstance()->getOverrideValue('site', 'content_language')?>" dir="<?php echo erConfigClassLhConfig::getInstance()->getOverrideValue('site', 'dir_language')?>">
<head>
<?php include_once(erLhcoreClassDesign::designtpl('pagelayouts/parts/page_head_user.tpl.php'));?>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-light bg-faded">
        <a class="navbar-brand" href="<?php echo erLhcoreClassDesign::baseurl()?>">
            <img src="/design/customtheme/images/general/logo.png" alt="">
        </a>
        </ul>
        <ul class="nav navbar-nav pull-right">
            <li class="nav-item">
                <a class="nav-link" href="http://www.umbrellasupport.co.uk/">Umbrella</a>
            </li>
            <?php
                $currentUser = erLhcoreClassUser::instance();
                if($currentUser->authenticated) {
                   $UserData = $currentUser->getUserData(true); ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo htmlspecialchars($UserData->name),' ',htmlspecialchars($UserData->surname)?> <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="<?php echo erLhcoreClassDesign::baseurl('site_admin')?>">
                                <i class="material-icons">dashboard</i><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('pagelayout/pagelayout','Dashboard')?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo erLhcoreClassDesign::baseurl('site_admin/user/account')?>" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('pagelayout/pagelayout','Account')?>">
                            <i class="material-icons">account_box</i><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('pagelayout/pagelayout','Account')?></a>
                        </li>
                        <li><a href="<?php echo erLhcoreClassDesign::baseurl('user/logout')?>" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('pagelayout/pagelayout','Logout');?>"><i class="material-icons">exit_to_app</i><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('pagelayout/pagelayout','Logout');?></a></li>
                    </ul>
                </li>
            <?php unset($currentUser);unset($UserData); } else {?>
                <li class="nav-item">
                    <a class="nav-link" href="/index.php/site_admin/user/login">Login</a>
                </li>
            <?php } ?>
        </ul>
    </nav>
</div>
<?php include_once(erLhcoreClassDesign::designtpl('pagelayouts/parts/userchat/before_userchat.tpl.php'));?>
    <div class="modal-dialog modal-lg" id="user-popup-window">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-xs-6">
                      <?php include_once(erLhcoreClassDesign::designtpl('pagelayouts/parts/page_head_logo.tpl.php'));?>
                    </div>
                    <div class="col-xs-6">
                        <div class="btn-group pull-right" role="group" aria-label="...">
                        <?php if (!isset($Result['hide_close_window'])) : ?>
                                              
                            <?php if (isset($Result['chat']) && is_numeric($Result['chat']->id) && isset($Result['er']) && $Result['er'] == true) : ?>
                            <a class="btn btn-default btn-xs" onclick="lhinst.restoreWidget('<?php echo $Result['chat']->id,'_',$Result['chat']->hash?>');" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/chat','Switch to widget')?>"><i class="material-icons mr-0">open_in_browser</i></a>
                            <?php endif;?>
                                  
                            <?php include_once(erLhcoreClassDesign::designtpl('pagelayouts/parts/close_popup.tpl.php'));?>
                            <?php endif;?>  
                          
                          <?php if (isset($Result['show_switch_language'])) : ?>          
                            <?php include_once(erLhcoreClassDesign::designtpl('pagelayouts/parts/switch_language.tpl.php'));?>
                          <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <?php include(erLhcoreClassDesign::designtpl('pagelayouts/parts/userchat/before_content.tpl.php'));?>
                    <?php echo $Result['content'];?>
                <?php include(erLhcoreClassDesign::designtpl('pagelayouts/parts/userchat/after_content.tpl.php'));?>
            </div>
        </div>
    </div>

    <div class="container-fluid">
<?php include_once(erLhcoreClassDesign::designtpl('pagelayouts/parts/page_footer_user.tpl.php'));?>
</div>
<?php include_once(erLhcoreClassDesign::designtpl('pagelayouts/parts/userchat/after_userchat.tpl.php'));?>
<?php

if (erConfigClassLhConfig::getInstance()->getSetting('site', 'debug_output') == true) {
    $debug = ezcDebug::getInstance();
    echo $debug->generateOutput();
}
?>

<?php include(erLhcoreClassDesign::designtpl('pagelayouts/parts/dynamic_height.tpl.php'));?>
</body>
<script type="text/javascript">

    $(document).ready(function() {
        document.title = 'Live 121 chat tool';
    });

</script>
</html>