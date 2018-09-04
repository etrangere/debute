<?php
//
// cite base controller.
//
abstract class C_Base extends Controller
{
	protected $page_title;
	protected $page_content;
    public static $link;


    //
	// constractor.
	//

	function __construct()
	{

	}

	//
	// query virtual processing.
	//
	protected function OnInput()
	{
        $this->page_title = 'Website name';
        $this->page_content = '';
        }
	
	//
	// html virtual generator.
	//

	protected function OnOutput()
	{
		$vars = array('title' => $this->page_title, 'content' => $this->page_content);
		$page = $this->Template('view/v_main.php', $vars);
		echo $page;
	}

    public static function Startup()
    {

        // DB connection config.
        $hostname = 'localhost';
        $username = 'root';
        $password = 'Smdilia2012@';
        $dbName = 'blog2';


        // Connect to db.
        $link=mysqli_connect($hostname, $username, $password,$dbName) or die('No connect with data base');

    //    mysql_select_db() or die('No data base');

        // Session start.
        session_start();

    }



    public static function getObject()
    {
        if (!self::$link)
            self::$link = new mysqli("localhost", "root", "Smdilia2012@", "blog2");

        return self::$link;
    }

}
