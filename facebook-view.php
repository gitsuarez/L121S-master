<?php
	session_start();
	//echo $_SESSION['fb_pp'];
	echo '<img src="http://graph.facebook.com/'.$_SESSION['fb_id'].'/picture"> <br />';
	echo $_SESSION['fb_id'] . '<br />';
	echo $_SESSION['fb_ea'] . '<br />';
	echo $_SESSION['fb_fn'] . '<br />';
	
?>