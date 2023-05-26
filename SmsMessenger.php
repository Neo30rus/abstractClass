<?php
require 'Messenger.php';
class SmsMessenger extends Messenger
{
    private $phone;
    public function __construct($name, $phone)
    {
        parent::__construct($name);
        $this ->phone =$phone;
    }
    public function send($text)
    {
        echo "{this ->name} отправил SMS на номер " . $this->phone . " c текстом \"
    }
}
"