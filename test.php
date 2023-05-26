<?php
require 'emailmessenger.php';
require 'SmsMessenger.php';

$email = new emailmessenger('ivan');
$sms = new SmsMessenger(
    'petr',
     '8-495-820-33-36'
);
$email ->send('123');
echo '<br>';
$sms ->send( '123');
