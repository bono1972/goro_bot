<?php

// OAuthライブラリの読み込み
require (__DIR__ ."/twitteroauth/autoload.php");
use Abraham\TwitterOAuth\TwitterOAuth;
require (__DIR__ ."/credentials.php");

$filelist = file(__DIR__ . "/list.txt");
if( shuffle($filelist) ){
  $message = $filelist[0];
}
//接続
$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);

//ツイート
$res = $connection->post("statuses/update", array("status" => $message));

?>