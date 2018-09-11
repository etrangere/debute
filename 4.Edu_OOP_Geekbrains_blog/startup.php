<?php

class Connect


{
    public static $link;

    function startup()
    {
        // DB connection config.
        $hostname = 'localhost';
        $username = 'root';
        $password = 'Smdilia2012@';
        $dbName = 'blog4';


        if (!self::$link)
            self::$link = new mysqli($hostname, $username, $password, $dbName) or die('No connect with data base');

        // Session start.
        session_start();

        return self::$link;
    }



}
