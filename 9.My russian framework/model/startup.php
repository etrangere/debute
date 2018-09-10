<?php

class Startup
{
   public static $link;

    function startup()
    {
        // Настройки подключения к БД.
        $hostname = 'localhost';
        $username = 'root';
        $password = 'Smdilia2012@';
        $dbName   = 'frame';

        // Языковая настройка.
        setlocale(LC_ALL, 'ru_RU.CP1251');

        // Подключение к БД.
        $link = mysqli_connect($hostname, $username, $password,$dbName) or die('No connect with data base');


        // Открытие сессии.
        session_start();
    }



    public static function getObject()
    {
        if (!self::$link)
            self::$link = new mysqli("localhost", "root", "Smdilia2012@", "frame");

        return self::$link;
    }

}

