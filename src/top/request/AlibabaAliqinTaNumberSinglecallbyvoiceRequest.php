<?php
/**
 * TOP API: alibaba.aliqin.ta.number.singlecallbyvoice request
 * 
 * @author auto create
 * @since 1.0, 2016.06.02
 */
class AlibabaAliqinTaNumberSinglecallbyvoiceRequest
{
	/** 
	 * 单呼号码
	 **/
	private $calledNum;
	
	/** 
	 * 显示号码
	 **/
	private $calledShowNum;
	
	/** 
	 * 上下文参数 示例:{"extend":"回传参数"} extend为扩展信息作为回传参数的key
	 **/
	private $params;
	
	/** 
	 * 语音文件code
	 **/
	private $voiceCode;
	
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

	public function setVoiceCode($voiceCode)
	{
		$this->voiceCode = $voiceCode;
		$this->apiParas["voice_code"] = $voiceCode;
	}

	public function getVoiceCode()
	{
		return $this->voiceCode;
	}

	public function getApiMethodName()
	{
		return "alibaba.aliqin.ta.number.singlecallbyvoice";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->calledNum,"calledNum");
		RequestCheckUtil::checkNotNull($this->calledShowNum,"calledShowNum");
		RequestCheckUtil::checkNotNull($this->voiceCode,"voiceCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
