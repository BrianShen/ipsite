<?php
/**
 * Created by PhpStorm.
 * User: wei.shen
 * Date: 2016/12/2
 * Time: 16:16
 */

$fb = new Facebook\Facebook([
    'app_id' => '{app-id}', // Replace {app-id} with your app id
    'app_secret' => '{app-secret}',
    'default_graph_version' => 'v2.2',
]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://ipsite.site/login-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';