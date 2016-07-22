<?php
/**
 * TOP API: taobao.promotion.coupon.apply request
 * 
 * @author auto create
 * @since 1.0, 2016.02.22
 */
class PromotionCouponApplyRequest
{
	/** 
	 * 卖家id
	 **/
	private $sellerId;
	
	/** 
	 * 传播id
	 **/
	private $spreadId;
	
	private $apiParas = array();
	
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
		return "taobao.promotion.coupon.apply";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->sellerId,"sellerId");
		RequestCheckUtil::checkNotNull($this->spreadId,"spreadId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
