<?php

$url = 'https://android.googleapis.com/gcm/send';
$apiKey = 'AIzaSyDdqfHx95************OW0QItdAU2RH0';# Get from Firebase Console - Project Settings - Tab Cloud Messaging
$token = 'eUBuYiH4t2A:APA91bE6NCIzHg6MFC74************TmlxzN0HyMUBg1hhLRFHl0vRVUFHJxDVTxJtZHcNONwU5jFT_EzqEyn6YRQdm-tVG0kAJtFJt6UtDORo0krRLUK-0jBiyvAB-nJfHMEUokHq';

$registrationIDs = array($token);

# message content object
$data = array('name' => 'huypv', 'mobile' => '0975292xxx', 'facebook' => 'fb.co/huypv', 'any' => 'bla bla');

$fields = array(
    'registration_ids' => $registrationIDs,
    'data' => $data
);

$headers = array(
    'Authorization: key=' . $apiKey,
    'Content-Type: application/json'
);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

$result = curl_exec($ch);

curl_close($ch);

echo $result;
