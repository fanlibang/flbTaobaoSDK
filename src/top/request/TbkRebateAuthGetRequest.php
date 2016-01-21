<?php
/**
 * TOP API: taobao.tbk.rebate.auth.get request
 * 
 * @author auto create
 * @since 1.0, 2016.01.13
 */
class TbkRebateAuthGetRequest
{
	/** 
	 * 需返回的字段列表
	 **/
	private $fields;
	
	/** 
	 * nick或seller_id或num_iid
	 **/
	private $params;
	
	/** 
	 * 类型：1-按nick查询，2-按seller_id查询，3-按num_iid查询
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
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

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.rebate.auth.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->params,"params");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
