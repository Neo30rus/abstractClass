<?php
abstract class Messenger
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function send($text);

    public function close()
    {
        echo 'Закрытие программы';
    }
}
