<?phpinclude_once('C_Base.php');include_once('model.php');//// ���������� �������� ��������������.//class C_Edit extends C_Base{    protected $article_title    protected $text;    public $id_article;    protected $article;    protected $content;	// �����	private $error;	// ��������� �� ������	//	// �����������.	//	function __construct()	{        parent::Startup();	}		//	// ����������� ���������� �������.	//	protected function OnInput()	{	    parent::OnInput();		$this->title = $this->title . ' :: ��������������';        if ($this->IsPost())		{            $this->article_title = $_POST['title'];            $this->content = $_POST['text'];            $this->id_article = $_POST['id'];            $content = $this->content;            $id_article = $this->id_article;						if (strpos($content, '<') !== false)			{				// ��������� �������� �����				$this->content = $content;				$this->error = '����� �� ������ ��������� ����';			}			else						{				// ������� �������� �����                Model::articles_edit($this->id_article,$this->article_title,$content);                header('Location: index.php');				die();					}		}		else		{            // ������ �����			$this->content = Model::articles_get($this->content);		}	}	//	// ����������� ��������� HTML.	//		protected function OnOutput()	{		$vars = array('text' => $this->content, 'error' => $this->error);		$page = Controller::Template('View/v_edit.php', $vars);        echo $page;	}	}/*$id_article = $_GET['id'];ARTIC_all :: articles_get($id_article);$db_article = ARTIC_all::articles_get($id_article);foreach($db_article as $one_article){    $x = $one_article['title'];    $y = $one_article['content'];}if (isset($_POST['edit'])){    ARTIC_all::articles_edit($_GET['id'],$_POST['title'],$_POST['content']);    header('Location: v_editor.php');}if(isset($_POST['delete'])){    ARTIC_all::articles_delete($id_article);    header('Location: v_editor.php');    die();}*/