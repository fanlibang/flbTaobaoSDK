<?php
/**
 * TOP API: taobao.flash.picture.upload request
 * 
 * @author auto create
 * @since 1.0, 2016.03.05
 */
class FlashPictureUploadRequest
{
	/** 
	 * 包括后缀名的图片标题,不能为空，如Bule.jpg,有些卖家希望图片上传后取图片文件的默认名
	 **/
	private $imageInputTitle;
	
	/** 
	 * 图片二进制文件流,不能为空,允许png、jpg、gif图片格式
	 **/
	private $img;
	
	/** 
	 * 用户昵称
	 **/
	private $nick;
	
	/** 
	 * 图片标题,如果为空,上传的图片标题就取去掉后缀名的image_input_title,超过50字符长度会截取50字符，重名会在标题末尾加"(1)"；标题末尾已经有"(数字)"了，则数字加1。
	 **/
	private $title;
	
	private $apiParas = array();
	
	public function setImageInputTitle($imageInputTitle)
	{
		$this->imageInputTitle = $imageInputTitle;
		$this->apiParas["image_input_title"] = $imageInputTitle;
	}

	public function getImageInputTitle()
	{
		return $this->imageInputTitle;
	}

	public function setImg($img)
	{
		$this->img = $img;
		$this->apiParas["img"] = $img;
	}

	public function getImg()
	{
		return $this->img;
	}

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function getApiMethodName()
	{
		return "taobao.flash.picture.upload";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->imageInputTitle,"imageInputTitle");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
