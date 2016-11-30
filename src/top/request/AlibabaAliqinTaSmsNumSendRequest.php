<?php
/**
 * TOP API: alibaba.aliqin.ta.sms.num.send request
 * 
 * @author auto create
 * @since 1.0, 2016.11.10
 */
class AlibabaAliqinTaSmsNumSendRequest
{
	/** 
	 * 公共回传参数
	 **/
	private $extend;
	
	/** 
	 * 商家自定义扩展码
	 **/
	private $extendCode;
	
	/** 
	 * 商家自定义扩展名,例如店铺nick
	 **/
	private $extendName;
	
	/** 
	 * 接收号码
	 **/
	private $recNum;
	
	/** 
	 * 短信签名
	 **/
	private $smsFreeSignName;
	
	/** 
	 * 短信模板变量，AckNum是变量参数
	 **/
	private $smsParam;
	
	/** 
	 * 短信模板CODE
	 **/
	private $smsTemplateCode;
	
	/** 
	 * 类型，normal：短信
	 **/
	private $smsType;
	
	private $apiParas = array();
	
	public function setExtend($extend)
	{
		$this->extend = $extend;
		$this->apiParas["extend"] = $extend;
	}

	public function getExtend()
	{
		return $this->extend;
	}

	public function setExtendCode($extendCode)
	{
		$this->extendCode = $extendCode;
		$this->apiParas["extend_code"] = $extendCode;
	}

	public function getExtendCode()
	{
		return $this->extendCode;
	}

	public function setExtendName($extendName)
	{
		$this->extendName = $extendName;
		$this->apiParas["extend_name"] = $extendName;
	}

	public function getExtendName()
	{
		return $this->extendName;
	}

	public function setRecNum($recNum)
	{
		$this->recNum = $recNum;
		$this->apiParas["rec_num"] = $recNum;
	}

	public function getRecNum()
	{
		return $this->recNum;
	}

	public function setSmsFreeSignName($smsFreeSignName)
	{
		$this->smsFreeSignName = $smsFreeSignName;
		$this->apiParas["sms_free_sign_name"] = $smsFreeSignName;
	}

	public function getSmsFreeSignName()
	{
		return $this->smsFreeSignName;
	}

	public function setSmsParam($smsParam)
	{
		$this->smsParam = $smsParam;
		$this->apiParas["sms_param"] = $smsParam;
	}

	public function getSmsParam()
	{
		return $this->smsParam;
	}

	public function setSmsTemplateCode($smsTemplateCode)
	{
		$this->smsTemplateCode = $smsTemplateCode;
		$this->apiParas["sms_template_code"] = $smsTemplateCode;
	}

	public function getSmsTemplateCode()
	{
		return $this->smsTemplateCode;
	}

	public function setSmsType($smsType)
	{
		$this->smsType = $smsType;
		$this->apiParas["sms_type"] = $smsType;
	}

	public function getSmsType()
	{
		return $this->smsType;
	}

	public function getApiMethodName()
	{
		return "alibaba.aliqin.ta.sms.num.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->recNum,"recNum");
		RequestCheckUtil::checkNotNull($this->smsFreeSignName,"smsFreeSignName");
		RequestCheckUtil::checkNotNull($this->smsTemplateCode,"smsTemplateCode");
		RequestCheckUtil::checkNotNull($this->smsType,"smsType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
