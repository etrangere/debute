<?php

Class Connect

{

    public static $link;

    function startup()
    {
        // Настройки подключения к БД.
        $hostname = 'localhost';
        $username = 'root';
        $password = 'Smdilia2012@';
        $dbName = 'frame';

        // Языковая настройка.
        setlocale(LC_ALL, 'ru_RU.CP1251');

        if (!self::$link)
            self::$link = new mysqli($hostname, $username, $password, $dbName) or die('No connect with data base');

        // Session start.
        session_start();

        return self::$link;
    }
}