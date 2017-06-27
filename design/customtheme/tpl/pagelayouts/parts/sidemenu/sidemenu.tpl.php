<?php $currentUser = erLhcoreClassUser::instance(); ?>
<div id="sidebar-wrapper" ng-cloak>
	<div class="navbar-default sidebar" role="navigation">
		<div class="sidebar-nav navbar-collapse">
			<ul class="nav" id="side-menu">
				<li>
					<a href="<?php echo erLhcoreClassDesign::baseurl('/')?>">
						<i class="material-icons md-18">home</i>
						<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('pagelayout/pagelayout','Dashboard')?>
					</a>
				</li>
				<!-- users nav -->
				<?php include(erLhcoreClassDesign::designtpl('lhsystem/configuration_links/users_section_pre.tpl.php'));?>
				<?php if ($system_configuration_links_users_section_enabled == true) : ?>
					<?php if ($currentUser->hasAccessTo('lhuser','userlist') || $currentUser->hasAccessTo('lhuser','grouplist') || $currentUser->hasAccessTo('lhpermission','list')) : ?>
						<?php if ($currentUser->hasAccessTo('lhuser','userlist')) : ?>
					    <li><a href="<?php echo erLhcoreClassDesign::baseurl('user/userlist')?>">
					    	<i class="material-icons md-18">account_circle</i>
					    	<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('system/configuration','Users');?>	
					    </a></li>
					    <?php endif; ?>
					 <?php endif; ?>
				<?php endif;?>
				<?php include(erLhcoreClassDesign::designtpl('pagelayouts/parts/sidemenu/chat/chat.tpl.php'));?>
				<!-- canned messages -->
                <?php include(erLhcoreClassDesign::designtpl('lhsystem/configuration_links/cannedmsg_pre.tpl.php'));?>	
					<?php if ($system_configuration_links_cannedmsg_enabled == true && $currentUser->hasAccessTo('lhchat','administratecannedmsg')) : ?>
					<li><a href="<?php echo erLhcoreClassDesign::baseurl('chat/cannedmsg')?>">
						<i class="material-icons md-18">subject</i>
						<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('system/configuration','Canned messages');?>	
					</a></li>
				<?php endif; ?>
                <?php include(erLhcoreClassDesign::designtpl('pagelayouts/parts/sidemenu/settings/settings.tpl.php'));?>
    	        <?php include(erLhcoreClassDesign::designtpl('pagelayouts/parts/top_menu_modules_container.tpl.php.tpl.php'));?>
    	        <!-- statistics -->
    	        <?php include(erLhcoreClassDesign::designtpl('lhsystem/configuration_links/statistic_pre.tpl.php'));?>
				<?php if ($system_configuration_links_statistic_enabled == true && $currentUser->hasAccessTo('lhstatistic','viewstatistic')) : ?>
				    <li><a href="<?php echo erLhcoreClassDesign::baseurl('statistic/statistic')?>">
				    	<i class="material-icons md-18">trending_up</i>
				    	<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('system/configuration','Statistic');?>	
				    </a></li>
				<?php endif; ?>	
    	        <?php include(erLhcoreClassDesign::designtpl('pagelayouts/parts/sidemenu/menu_item_multiinclude.tpl.php'));?>	
            </ul>
		</div>
	</div>
	
	<?php include(erLhcoreClassDesign::designtpl('pagelayouts/parts/sidemenu/after_sidemnu_multiinclude.tpl.php'));?>
</div>


<?php if ($currentUser->hasAccessTo('lhchat','use')) : ?>

<?php $menuItems = array(); ?>
<?php include(erLhcoreClassDesign::designtpl('pagelayouts/parts/top_menu_chat_actions.tpl.php'));?>

<?php include(erLhcoreClassDesign::designtpl('pagelayouts/parts/top_menu_online_users.tpl.php'));?>
       
<?php if (!empty($menuItems)) : ?>

	<ul class="nav nav-second-level sidebar-floater" id="chat">       
		<?php foreach ($menuItems as $menuItem) : ?>
		    <li><a href="<?php echo $menuItem['href']?>" <?php if (isset($menuItem['onclick'])) : ?>onclick="<?php echo $menuItem['onclick']?>"<?php endif;?>><?php if (isset($menuItem['iclass'])) : ?><i class="material-icons"><?php echo $menuItem['iclass']?></i><?php endif;?><?php echo $menuItem['text']?></a></li>
		<?php endforeach;?>
	</ul>

<?php endif; ?>

<?php endif;?>

<?php include(erLhcoreClassDesign::designtpl('pagelayouts/parts/modules_menu/modules_permissions.tpl.php'));?>	

<?php if ($useFm || $useBo || $useChatbox || $useFaq || $useQuestionary || $hasExtensionModule) : ?>
	<ul class="nav nav-second-level sidebar-floater" id="modules">
        <?php include(erLhcoreClassDesign::designtpl('pagelayouts/parts/modules_menu/questionary.tpl.php'));?>
		  
	    <?php include(erLhcoreClassDesign::designtpl('pagelayouts/parts/modules_menu/faq.tpl.php'));?>
	  
	    <?php include(erLhcoreClassDesign::designtpl('pagelayouts/parts/modules_menu/chatbox.tpl.php'));?>
	  	
	    <?php include(erLhcoreClassDesign::designtpl('pagelayouts/parts/modules_menu/browseoffer.tpl.php'));?>
      
        <?php include(erLhcoreClassDesign::designtpl('pagelayouts/parts/modules_menu/form.tpl.php'));?>
      
        <?php include(erLhcoreClassDesign::designtpl('pagelayouts/parts/modules_menu/extension_module_multiinclude.tpl.php'));?>
  	</ul>
 <?php endif; ?>
