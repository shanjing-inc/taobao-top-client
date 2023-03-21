<?php

namespace TopClient\request;

use TopClient\RequestCheckUtil;

/**
 * TOP API: alibaba.alsc.union.kb.store.item.query request
 *
 * @author auto create
 * @since 1.0, 2022.07.27
 */
class AlibabaAlscUnionKbStoreItemQueryRequest
{
	/**
	 * 场景类型（"kb_natural";）
	 **/
	private $bizType;

	/**
	 * 推广位
	 **/
	private $pid;

	/**
	 * sid
	 **/
	private $sid;

	/**
	 * 门店ID
	 **/
	private $storeId;

	private $apiParas = array();

	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
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

	public function setSid($sid)
	{
		$this->sid = $sid;
		$this->apiParas["sid"] = $sid;
	}

	public function getSid()
	{
		return $this->sid;
	}

	public function setStoreId($storeId)
	{
		$this->storeId = $storeId;
		$this->apiParas["store_id"] = $storeId;
	}

	public function getStoreId()
	{
		return $this->storeId;
	}

	public function getApiMethodName()
	{
		return "alibaba.alsc.union.kb.store.item.query";
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{

		RequestCheckUtil::checkNotNull($this->bizType,"bizType");
		RequestCheckUtil::checkNotNull($this->pid,"pid");
		RequestCheckUtil::checkNotNull($this->storeId,"storeId");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
