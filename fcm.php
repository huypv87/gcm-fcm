<?php

#date_default_timezone_set('Asia/Ho_Chi_Minh');
$to = 'eUBuYiH4t2A:APA91bE6NCIzHg6M************gtWsTmlxzN0HyMUBg1hhLRFHl0vRVUFHJxDVTxJtZHcNONwU5jFT_EzqEyn6YRQdm-tVG0kAJtFJt6UtDORo0krRLUK-0jBiyvAB-nJfHMEUokHq';
$title = 'Mr HuyPV';
$message = 'Hello. Now is ' . date('H:i d-m');
$apiUrl = 'https://fcm.googleapis.com/fcm/send';

# Get api key from Firebase Console - Project Settings - Tab Cloud Messaging
$apiKeyFromFirebase = 'AAAA_DBPVAY:APA91bGqatOnHpi*********CYBPLRat9Jm9Png0dDpyabfnvsw7HBMheerFsFcNUOpwh62K1mI_54jGHmTq0f6kkcWgGArIroU6i6d-_7QfQ0CEThNIbQ1hbt34xnrFKOfMpuHw6dTW';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
curl_setopt($ch, CURLOPT_TIMEOUT, 45);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
#curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
#curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$arr = array(
    'data' => array('title' => $title, 'message' => $message),
    'to' => $to,
);

curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arr));
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Authorization: key=' . $apiKeyFromFirebase,
));

$ret = curl_exec($ch);
curl_close($ch);

echo $ret;
