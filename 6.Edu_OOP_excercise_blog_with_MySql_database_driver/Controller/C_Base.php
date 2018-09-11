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
		$page = $this->Template('View/v_main.php', $vars);
		echo $page;
	}

    public static function Startup()
    {

        // DB connection config.
        $hostname = 'localhost';
        $username = 'root';
        $password = 'Smdilia2012@';
        $dbName = 'blog6';

        if (!self::$link)
            self::$link = new mysqli($hostname, $username, $password, $dbName) or die('No connect with data base');

        // Session start.
        session_start();

        return self::$link;
    }




}
