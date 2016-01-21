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
	public $app_key;
	
	/** 
	 * 所购买商品的类目ID
	 **/
	public $category_id;
	
	/** 
	 * 所购买商品的类目名称
	 **/
	public $category_name;
	
	/** 
	 * 用户获得的佣金
	 **/
	public $commission;
	
	/** 
	 * 佣金比率。比如：0.01代表1%
	 **/
	public $commission_rate;
	
	/** 
	 * 订单创建时间
	 **/
	public $create_time;
	
	/** 
	 * 商品成交数量
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
	 * 推广渠道
	 **/
	public $outer_code;
	
	/** 
	 * 成交价格
	 **/
	public $pay_price;
	
	/** 
	 * 成交时间
	 **/
	public $pay_time;
	
	/** 
	 * 实际支付金额
	 **/
	public $real_pay_fee;
	
	/** 
	 * 卖家昵称
	 **/
	public $seller_nick;
	
	/** 
	 * 店铺名称
	 **/
	public $shop_title;
	
	/** 
	 * 淘宝交易号
	 **/
	public $trade_id;
	
	/** 
	 * 淘宝父交易号
	 **/
	public $trade_parent_id;	
}
?>