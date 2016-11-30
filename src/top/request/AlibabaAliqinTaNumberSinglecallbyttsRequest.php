<?php
/**
 * TOP API: alibaba.aliqin.ta.number.singlecallbytts request
 * 
 * @author auto create
 * @since 1.0, 2016.10.27
 */
class AlibabaAliqinTaNumberSinglecallbyttsRequest
{
	/** 
	 * 被叫号码
	 **/
	private $calledNum;
	
	/** 
	 * 显示号码
	 **/
	private $calledShowNum;
	
	/** 
	 * 上下文参数,tts模板含有变量的, 此参数需填写。示例:{"date":"2015年 " ,"name":"测试","extend":"回传参数"} date、name 为模板里的变量名作为key,extend为扩展信息作为回传参数的key
	 **/
	private $params;
	
	/** 
	 * tts文本模板code
	 **/
	private $ttsCode;
	
	private $apiParas = array();
	
	public function setCalledNum($calledNum)
	{
		$this->calledNum = $calledNum;
		$this->apiParas["called_num"] = $calledNum;
	}

	public function getCalledNum()
	{
		return $this->calledNum;
	}

	public function setCalledShowNum($calledShowNum)
	{
		$this->calledShowNum = $calledShowNum;
		$this->apiParas["called_show_num"] = $calledShowNum;
	}

	public function getCalledShowNum()
	{
		return $this->calledShowNum;
	}

	public function setParams($params)
	{
		$this->params = $params;
		$this->apiParas["params"] = $params;
	}

	public function getParams()
	{
		return $this->params;
	}

	public function setTtsCode($ttsCode)
	{
		$this->ttsCode = $ttsCode;
		$this->apiParas["tts_code"] = $ttsCode;
	}

	public function getTtsCode()
	{
		return $this->ttsCode;
	}

	public function getApiMethodName()
	{
		return "alibaba.aliqin.ta.number.singlecallbytts";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->calledNum,"calledNum");
		RequestCheckUtil::checkNotNull($this->calledShowNum,"calledShowNum");
		RequestCheckUtil::checkNotNull($this->ttsCode,"ttsCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
