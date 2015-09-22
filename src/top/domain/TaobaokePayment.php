<?php

/**
 * 淘宝客订单
 * @author auto create
 */
class TaobaokePayment
{
	
	/** 
	 * 应用授权码
	 **/
	public $appKey;
	
	/** 
	 * 所购买商品的类目ID
	 **/
	public $categoryId;
	
	/** 
	 * 所购买商品的类目名称
	 **/
	public $categoryName;
	
	/** 
	 * 用户获得的佣金
	 **/
	public $commission;
	
	/** 
	 * 佣金比率。比如：0.01代表1%
	 **/
	public $commissionRate;
	
	/** 
	 * 订单创建时间
	 **/
	public $createTime;
	
	/** 
	 * 商品成交数量
	 **/
	public $itemNum;
	
	/** 
	 * 商品标题
	 **/
	public $itemTitle;
	
	/** 
	 * 商品ID
	 **/
	public $numIid;
	
	/** 
	 * 推广渠道
	 **/
	public $outerCode;
	
	/** 
	 * 成交价格
	 **/
	public $payPrice;
	
	/** 
	 * 成交时间
	 **/
	public $payTime;
	
	/** 
	 * 实际支付金额
	 **/
	public $realPayFee;
	
	/** 
	 * 卖家昵称
	 **/
	public $sellerNick;
	
	/** 
	 * 店铺名称
	 **/
	public $shopTitle;
	
	/** 
	 * 淘宝交易号
	 **/
	public $tradeId;
	
	/** 
	 * 淘宝父交易号
	 **/
	public $tradeParentId;	
}
?>