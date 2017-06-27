<span class="fb-greetings">
	<b>Hello there!</b>
</span>
<div class="row user-fb-wrapper" style="">
	<div class="col-md-3 col-sm-3 col-xs-3" >
		<img class="fb-profile" src="http://graph.facebook.com/<?php echo $_SESSION['fb_id']; ?>/picture">
		<div class="facebook-icon"><img src="/design/customtheme/images/general/facebook-icon.png"></div>
	</div>
	<div class="col-md-9 col-sm-9 col-xs-9">
		<?php 
			echo '<p class="fb-details"><b>'.$_SESSION['fb_fn'] . '</b><br/>';
			echo $_SESSION['fb_ea'] . '</p>';
		?>
		<a href="#" class="fb-logout" onClick="fblogout()"></a>
		<input type="hidden" name="Username" value="<?php echo htmlspecialchars($_SESSION['fb_fn']);?>" />
		<input type="hidden" name="Email" value="<?php echo htmlspecialchars($_SESSION['fb_ea']);?>" />
	</div>
</div>