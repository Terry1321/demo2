<?php 


class Page{
	public $length;
	public $pageTot;
	public $page;
	public $prevpage;
	public $nextpage;
	public $offset;

	public function __construct($pageTot,$length){
		include 'config.php';

		$this->length=$length;
		$this->pageTot=ceil($pageTot/$length);
		$this->page=$_GET['p']?$_GET['p']:$page=1;
		$this->offset=($this->page-1)*$this->length;
		$this->prevpage=$this->page-1;
		$this->nextpage=$this->page+1;

		if($this->page<1){
			$this->prevpage=1;
		}
		if($this->page>1){
			$this->nextpage=$this->pageTot;
		}
	}
}
	

 ?>