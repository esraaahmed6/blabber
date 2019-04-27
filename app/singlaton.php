<?php
class MySingleton
{
    public static function getInstance()
    {
        static $instance;

        if (null === $instance) {
            $instance = new self();
        }

        return $instance;
    }

    // prevent creating multiple instances due to "private" constructor
    private function __construct(){}

    // prevent the instance from being cloned
    private function __clone(){}

    // prevent from being unserialized
    private function __wakeup(){}
}
  

  //Usage:

//$instance = MySingleton::getInstance();