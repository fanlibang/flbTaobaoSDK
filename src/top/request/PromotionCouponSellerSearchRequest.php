<?php
/**
 * TOP API: taobao.promotion.coupon.seller.search request
 * 
 * @author auto create
 * @since 1.0, 2016.01.19
 */
class PromotionCouponSellerSearchRequest
{
	/** 
	 * 当前第几页  从第一页开始
	 **/
	private $currentPage;
	
	/** 
	 * 每页数据 最大20左右
	 **/
	private $pageSize;
	
	/** 
	 * 卖家昵称
	 **/
	private $sellerNick;
	
	/** 
	 * 券id集合
	 **/
	private $spreadIds;
	
	private $apiParas = array();
	
	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setSellerNick($sellerNick)
	{
		$this->sellerNick = $sellerNick;
		$this->apiParas["seller_nick"] = $sellerNick;
	}

	public function getSellerNick()
	{
		return $this->sellerNick;
	}

	public function setSpreadIds($spreadIds)
	{
		$this->spreadIds = $spreadIds;
		$this->apiParas["spread_ids"] = $spreadIds;
	}

	public function getSpreadIds()
	{
		return $this->spreadIds;
	}

	public function getApiMethodName()
	{
		return "taobao.promotion.coupon.seller.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMinValue($this->currentPage,1,"currentPage");
		RequestCheckUtil::checkMaxValue($this->pageSize,20,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
		RequestCheckUtil::checkMaxListSize($this->spreadIds,20,"spreadIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
