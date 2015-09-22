<?php

/**
 * 淘宝客订单
 * @author auto create
 */
class NTbkOrder
{
	
	/** 
	 * 推广者获得的佣金金额
	 **/
	public $commission;
	
	/** 
	 * 推广者获得的佣金比例
	 **/
	public $commissionRate;
	
	/** 
	 * 淘客订单创建时间
	 **/
	public $createTime;
	
	/** 
	 * 淘客订单结算时间
	 **/
	public $earningTime;
	
	/** 
	 * 商品数量
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
	 * 实际支付金额
	 **/
	public $payPrice;
	
	/** 
	 * 单价
	 **/
	public $price;
	
	/** 
	 * 卖家昵称
	 **/
	public $sellerNick;
	
	/** 
	 * 卖家店铺名称
	 **/
	public $sellerShopTitle;
	
	/** 
	 * 淘宝订单号
	 **/
	public $tradeId;
	
	/** 
	 * 淘宝父订单号
	 **/
	public $tradeParentId;
	
	/** 
	 * 推广者unid
	 **/
	public $unid;	
}
?>