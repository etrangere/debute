<?php
//
// cite base controller.
//
abstract class C_Base extends Controller
{
	protected $page_title;
	protected $page_content;
    protected $time_start;
    protected $time_end;
    public static $link;
    //
	// constractor.
	//

	function __construct()
	{
        $this->time_start = microtime(true);
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

        $this->time_end = microtime(true);

        $time_page= number_format($this->time_end - $this->time_start);

        $page .= " This page had generated in $time_page seconds!";





		echo $page;
	}

    public static function Startup()
    {

        // DB connection config.
        $hostname = 'localhost';
        $username = 'root';
        $password = 'Smdilia2012@';
        $dbName = 'blog7';



        // Connect to db.
        $link = mysqli_connect($hostname, $username, $password,$dbName) or die('No connect with data base');


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
