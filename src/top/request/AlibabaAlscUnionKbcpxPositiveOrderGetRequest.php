<?php
/**
 * TOP API: alibaba.alsc.union.kbcpx.positive.order.get request
 * 
 * @author auto create
 * @since 1.0, 2023.02.17
 */
class AlibabaAlscUnionKbcpxPositiveOrderGetRequest
{
	/** 
	 * 1-CPA 2-CPS
	 **/
	private $bizUnit;
	
	/** 
	 * 时间维度，1-付款时间 2-创建时间 3-结算时间 4-更新时间
	 **/
	private $dateType;
	
	/** 
	 * 查询截止时间，精确到时分秒。开始和结束时间不能超过31天
	 **/
	private $endDate;
	
	/** 
	 * 场景值，支持多场景（英文逗号分隔）查询7卡券订单，8卡券核销订单，10-媒体出资CPS红包，11-媒体出资霸王餐加码红包
	 **/
	private $flowType;
	
	/** 
	 * 是否包含核销门店
	 **/
	private $includeUsedStoreId;
	
	/** 
	 * 淘宝子订单号或饿了么订单号
	 **/
	private $orderId;
	
	/** 
	 * 订单状态，0-已失效 1-已下单 2-已付款 4-已收货 不传-全部状态
	 **/
	private $orderState;
	
	/** 
	 * 页码，默认第一页，取值范围1~50
	 **/
	private $pageNumber;
	
	/** 
	 * 每页返回数据大小，默认10，最大返回50
	 **/
	private $pageSize;
	
	/** 
	 * 推广位pid
	 **/
	private $pid;
	
	/** 
	 * 结算状态，1-已结算 2-未结算 不传-全部状态
	 **/
	private $settleState;
	
	/** 
	 * 查询起始时间，精确到时分秒。开始和结束时间不能超过31天
	 **/
	private $startDate;
	
	private $apiParas = array();
	
	public function setBizUnit($bizUnit)
	{
		$this->bizUnit = $bizUnit;
		$this->apiParas["biz_unit"] = $bizUnit;
	}

	public function getBizUnit()
	{
		return $this->bizUnit;
	}

	public function setDateType($dateType)
	{
		$this->dateType = $dateType;
		$this->apiParas["date_type"] = $dateType;
	}

	public function getDateType()
	{
		return $this->dateType;
	}

	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function setFlowType($flowType)
	{
		$this->flowType = $flowType;
		$this->apiParas["flow_type"] = $flowType;
	}

	public function getFlowType()
	{
		return $this->flowType;
	}

	public function setIncludeUsedStoreId($includeUsedStoreId)
	{
		$this->includeUsedStoreId = $includeUsedStoreId;
		$this->apiParas["include_used_store_id"] = $includeUsedStoreId;
	}

	public function getIncludeUsedStoreId()
	{
		return $this->includeUsedStoreId;
	}

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function setOrderState($orderState)
	{
		$this->orderState = $orderState;
		$this->apiParas["order_state"] = $orderState;
	}

	public function getOrderState()
	{
		return $this->orderState;
	}

	public function setPageNumber($pageNumber)
	{
		$this->pageNumber = $pageNumber;
		$this->apiParas["page_number"] = $pageNumber;
	}

	public function getPageNumber()
	{
		return $this->pageNumber;
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

	public function setPid($pid)
	{
		$this->pid = $pid;
		$this->apiParas["pid"] = $pid;
	}

	public function getPid()
	{
		return $this->pid;
	}

	public function setSettleState($settleState)
	{
		$this->settleState = $settleState;
		$this->apiParas["settle_state"] = $settleState;
	}

	public function getSettleState()
	{
		return $this->settleState;
	}

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function getApiMethodName()
	{
		return "alibaba.alsc.union.kbcpx.positive.order.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->startDate,"startDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
