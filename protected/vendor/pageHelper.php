<?php
/*
抽取yii分页代码，为己用


		Yii::import('application.vendor.*');
		require_once('pageHelper.php');
		 $mypage=new PageHelper();
		 $mypage->count=100;
		 $mypage->maxButtonCount=$xx->maxButtonCount;
		 $mypage->currentPage=$pages->currentPage;
		 $mypage->pageSize=$pages->pageSize;
		print_r($mypage->createPageButtons());
*/
//Yii::import('application.vendors.*');
//require_once('Tools.php');
class PageHelper {
	public $firstPageLabel='首页';
	public $prevPageLabel='上一页';
	public $nextPageLabel='下一页';
	public $lastPageLabel='尾页';

	public $maxButtonCount=5,$count=0,$currentPage=0,$pageSize=10;
	public function __construct($maxButtonCount=5,$count=0,$currentPage=0,$pageSize=10)
    {
            $this->maxButtonCount=$maxButtonCount;
            $this->count=$count;
            $this->currentPage=$currentPage;
            $this->pageSize=$pageSize;
    }
	private function getPageCount()
        {
                return (int)(($this->count+$this->pageSize-1)/$this->pageSize);
        }

	/*
	 输入：按钮最大数量，总页数 ，当前页
	 返回： 开始显示页码 结束显示页码
	 */
	private  function getPageRange()
	{
		
		$pageCount=$this->getPageCount();
		$beginPage=max(0, $this->currentPage-(int)($this->maxButtonCount/2));
		if(($endPage=$beginPage+$this->maxButtonCount-1)>=$pageCount)
		{
			$endPage=$pageCount-1;
			$beginPage=max(0,$endPage-$this->maxButtonCount+1);
		}
		return array($beginPage,$endPage);
	}
	protected function createPageButton($label,$page,$hidden,$selected,$type)
	{
		return array('label'=>$label,'page'=>$page,'hidden'=>$hidden,'selected'=>$selected,'type'=>$type);
	}

	//输出
	public function createPageButtons()
	{
		if(($pageCount=$this->getPageCount())<=1)
			return array();

		list($beginPage,$endPage)=$this->getPageRange();
		$currentPage=$this->currentPage;
		$buttons=array();

		// first page
		$buttons[]=$this->createPageButton($this->firstPageLabel,0,$currentPage<=0,false,'f');

		// prev page
		if(($page=$currentPage-1)<0)
			$page=0;
		$buttons[]=$this->createPageButton($this->prevPageLabel,$page,$currentPage<=0,false,'p');

		// internal pages
		for($i=$beginPage;$i<=$endPage;++$i)
			$buttons[]=$this->createPageButton($i+1,$i+1,false,$i==$currentPage,'page');

		// next page
		if(($page=$currentPage+1)>=$pageCount-1)
			$page=$pageCount-1;
		$buttons[]=$this->createPageButton($this->nextPageLabel,$page,$currentPage>=$pageCount-1,false,'n');

		// last page
		$buttons[]=$this->createPageButton($this->lastPageLabel,$pageCount-1,$currentPage>=$pageCount-1,false,'l');

		return $buttons;
	}
	
}