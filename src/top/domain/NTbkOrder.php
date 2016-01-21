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
	public $commission_rate;
	
	/** 
	 * 淘客订单创建时间
	 **/
	public $create_time;
	
	/** 
	 * 淘客订单结算时间
	 **/
	public $earning_time;
	
	/** 
	 * 商品数量
	 **/
	public $item_num;
	
	/** 
	 * 商品标题
	 **/
	public $item_title;
	
	/** 
	 * 商品ID
	 **/
	public $num_iid;
	
	/** 
	 * 实际支付金额
	 **/
	public $pay_price;
	
	/** 
	 * 单价
	 **/
	public $price;
	
	/** 
	 * 卖家昵称
	 **/
	public $seller_nick;
	
	/** 
	 * 卖家店铺名称
	 **/
	public $seller_shop_title;
	
	/** 
	 * 淘宝订单号
	 **/
	public $trade_id;
	
	/** 
	 * 淘宝父订单号
	 **/
	public $trade_parent_id;
	
	/** 
	 * 推广者unid
	 **/
	public $unid;	
}
?>