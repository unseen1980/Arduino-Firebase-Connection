<?php
require_once 'firebaseLib.php';
// --- This is your Firebase URL
$url = 'https://xxxxxxxxxxx.firebaseio.com/';
// --- Use your token from Firebase here
$token = 'xxxxxxxxxxxxxxxxxxxxxx';
// --- Here is your parameter from the http GET
$arduino_data = $_GET['arduino_data'];
// --- Set up your Firebase url structure here
$firebasePath = '/';

/// --- Making calls
$fb = new fireBase($url, $token);
$response = $fb->push($firebasePath, $arduino_data);
sleep(2);
