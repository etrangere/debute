<?phpinclude_once('C_Base.php');include_once('model.php');//// ����������� �������� ������.//class C_Main extends C_Base{	public $articles;	// �����	//	// �����������.	//	function __construct()	{	}    //	// ����������� ���������� �������.	//	protected function OnInput()	{		parent::OnInput();        $this->page_title = $this->page_title . ' :: ������';        $this->page_content= Model::articles_all();	}	//	// ����������� ��������� HTML.	//	protected function OnOutput()    {        parent::OnOutput();    }}