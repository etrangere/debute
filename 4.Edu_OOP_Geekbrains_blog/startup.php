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


        // Connect to db.
        $link = mysqli_connect($hostname, $username, $password, $dbName) or die('No connect with data base');


        // Session start.
        session_start();

    }


        public static function getObject()
    {
        if (!self::$link)
            self::$link = new mysqli("localhost", "root", "Smdilia2012@", "blog4");

        return self::$link;
    }



}
