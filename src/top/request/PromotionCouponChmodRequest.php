<?php
/**
 * TOP API: taobao.promotion.coupon.chmod request
 * 
 * @author auto create
 * @since 1.0, 2015.11.02
 */
class PromotionCouponChmodRequest
{
	/** 
	 * 允许删除：true
	 **/
	private $permitDel;
	
	/** 
	 * 卖家id
	 **/
	private $sellerId;
	
	/** 
	 * 券传播id
	 **/
	private $spreadId;
	
	private $apiParas = array();
	
	public function setPermitDel($permitDel)
	{
		$this->permitDel = $permitDel;
		$this->apiParas["permit_del"] = $permitDel;
	}

	public function getPermitDel()
	{
		return $this->permitDel;
	}

	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
	}

	public function setSpreadId($spreadId)
	{
		$this->spreadId = $spreadId;
		$this->apiParas["spread_id"] = $spreadId;
	}

	public function getSpreadId()
	{
		return $this->spreadId;
	}

	public function getApiMethodName()
	{
		return "taobao.promotion.coupon.chmod";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->permitDel,"permitDel");
		RequestCheckUtil::checkNotNull($this->sellerId,"sellerId");
		RequestCheckUtil::checkNotNull($this->spreadId,"spreadId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
