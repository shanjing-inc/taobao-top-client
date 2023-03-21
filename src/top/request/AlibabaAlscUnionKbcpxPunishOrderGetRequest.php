<?php

namespace TopClient\request;

use TopClient\RequestCheckUtil;


/**
 * TOP API: alibaba.alsc.union.kbcpx.punish.order.get request
 *
 * @author auto create
 * @since 1.0, 2023.02.17
 */
class AlibabaAlscUnionKbcpxPunishOrderGetRequest
{
	/**
	 * 1-CPA 2-CPS
	 **/
	private $bizUnit;

	/**
	 * 时间维度，1.订单结算时间 2.维权创建时间 3.维权完成时间 4更新时间
	 **/
	private $dateType;

	/**
	 * 查询截止时间。开始和结束时间不能超过31天
	 **/
	private $endDate;

	/**
	 * 场景值，支持多场景（英文逗号分隔）查询7卡券订单，8卡券核销订单，10-媒体出资CPS红包，11-媒体出资霸王餐加码红包
	 **/
	private $flowType;

	/**
	 * 淘宝子订单号
	 **/
	private $orderId;

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
	 * 查询起始时间。开始和结束时间不能超过31天
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

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
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
		return "alibaba.alsc.union.kbcpx.punish.order.get";
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
