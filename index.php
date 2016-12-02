<?php
/**
 * Created by PhpStorm.
 * User: wei.shen
 * Date: 2016/12/2
 * Time: 16:16
 */

$fb = new Facebook\Facebook([
    'app_id' => '255732791508763', // Replace {app-id} with your app id
    'app_secret' => 'a7397a042bf00d1f31dc8315b0a6afec',
    'default_graph_version' => 'v2.2',
]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://ipsite.site/login-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';