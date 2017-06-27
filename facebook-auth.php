<?php
	if (!session_id()) {
		session_start();
	}
	require __DIR__ . '/vendor/autoload.php';

	$dotenv = new Dotenv\Dotenv(__DIR__);
	$dotenv->load();

	$fb = new Facebook\Facebook([
			'app_id' => getenv('FB_APP_ID'), // Replace {app-id} with your app id
			'app_secret' => getenv('FB_APP_SECRET'),
			'default_graph_version' => getenv('FB_VERSION')
		]);
	$helper = $fb->getRedirectLoginHelper();
	$permissions = ['email','public_profile','user_birthday']; // Optional permissions
	$loginUrl = $helper->getLoginUrl(getenv('SITE_URL').'/facebook-callback.php', $permissions);
	header('Location: '.$loginUrl);
	//echo '<a href="' . htmlspecialchars($loginUrl) . '"><img src="/facebook/facebook.png"></a>';
?> 