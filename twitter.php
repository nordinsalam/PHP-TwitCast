<?php

include 'EpiCurl.php';
include 'EpiOAuth.php';
include 'EpiTwitter.php';
include 'icecast.php';

#Consumer key token
$consumer_key = '-----';

#Consumer secret token
$consumer_secret = '-----';

#Access Token
$token = '-----';

#Access Token Secret 
$secret= '---';

$twitterObj = new EpiTwitter($consumer_key, $consumer_secret, $token, $secret);
$twitterObjUnAuth = new EpiTwitter($consumer_key, $consumer_secret);

$twitterObj->post('/statuses/update.json', array('status' => $data['complete'])); 
?> 
