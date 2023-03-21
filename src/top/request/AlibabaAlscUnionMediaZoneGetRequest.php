<?php

namespace TopClient\request;

/**
 * TOP API: alibaba.alsc.union.media.zone.get request
 *
 * @author auto create
 * @since 1.0, 2022.06.16
 */
class AlibabaAlscUnionMediaZoneGetRequest
{
	/**
	 * 每页展示条数
	 **/
	private $limit;

	/**
	 * 页码，从1开始
	 **/
	private $page;

	private $apiParas = array();

	public function setLimit($limit)
	{
		$this->limit = $limit;
		$this->apiParas["limit"] = $limit;
	}

	public function getLimit()
	{
		return $this->limit;
	}

	public function setPage($page)
	{
		$this->page = $page;
		$this->apiParas["page"] = $page;
	}

	public function getPage()
	{
		return $this->page;
	}

	public function getApiMethodName()
	{
		return "alibaba.alsc.union.media.zone.get";
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{

	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
