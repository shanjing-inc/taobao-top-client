<?php
/**
 * TOP API: alibaba.alsc.union.kb.item.query request
 * 
 * @author auto create
 * @since 1.0, 2022.07.15
 */
class AlibabaAlscUnionKbItemQueryRequest
{
	/** 
	 * 场景类型（"kb_natural";）
	 **/
	private $bizType;
	
	/** 
	 * 城市ID
	 **/
	private $cityId;
	
	/** 
	 * 纬度（经纬度、范围配合使用）
	 **/
	private $latitude;
	
	/** 
	 * 经度（经纬度、范围配合使用）
	 **/
	private $longitude;
	
	/** 
	 * 页码（默认1）
	 **/
	private $pageNumber;
	
	/** 
	 * 每页数目（默认10）
	 **/
	private $pageSize;
	
	/** 
	 * 推广位
	 **/
	private $pid;
	
	/** 
	 * 范围（单位：米，经纬度、范围配合使用）
	 **/
	private $range;
	
	/** 
	 * 会话ID（分页场景首次请求结果返回，后续请求必须携带，服务根据session_id相同请求次数自动翻页返回）
	 **/
	private $sessionId;
	
	/** 
	 * 排序类型，默认normal（"normal"-门店创建时间倒序;"distance_asc"-距离最近）
	 **/
	private $sortType;
	
	/** 
	 * 淘宝二级类目（逗号分隔）
	 **/
	private $tbCategory2Ids;
	
	/** 
	 * 淘宝三级类目（逗号分隔）
	 **/
	private $tbCategory3Ids;
	
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

	public function setCityId($cityId)
	{
		$this->cityId = $cityId;
		$this->apiParas["city_id"] = $cityId;
	}

	public function getCityId()
	{
		return $this->cityId;
	}

	public function setLatitude($latitude)
	{
		$this->latitude = $latitude;
		$this->apiParas["latitude"] = $latitude;
	}

	public function getLatitude()
	{
		return $this->latitude;
	}

	public function setLongitude($longitude)
	{
		$this->longitude = $longitude;
		$this->apiParas["longitude"] = $longitude;
	}

	public function getLongitude()
	{
		return $this->longitude;
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

	public function setRange($range)
	{
		$this->range = $range;
		$this->apiParas["range"] = $range;
	}

	public function getRange()
	{
		return $this->range;
	}

	public function setSessionId($sessionId)
	{
		$this->sessionId = $sessionId;
		$this->apiParas["session_id"] = $sessionId;
	}

	public function getSessionId()
	{
		return $this->sessionId;
	}

	public function setSortType($sortType)
	{
		$this->sortType = $sortType;
		$this->apiParas["sort_type"] = $sortType;
	}

	public function getSortType()
	{
		return $this->sortType;
	}

	public function setTbCategory2Ids($tbCategory2Ids)
	{
		$this->tbCategory2Ids = $tbCategory2Ids;
		$this->apiParas["tb_category_2_ids"] = $tbCategory2Ids;
	}

	public function getTbCategory2Ids()
	{
		return $this->tbCategory2Ids;
	}

	public function setTbCategory3Ids($tbCategory3Ids)
	{
		$this->tbCategory3Ids = $tbCategory3Ids;
		$this->apiParas["tb_category_3_ids"] = $tbCategory3Ids;
	}

	public function getTbCategory3Ids()
	{
		return $this->tbCategory3Ids;
	}

	public function getApiMethodName()
	{
		return "alibaba.alsc.union.kb.item.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizType,"bizType");
		RequestCheckUtil::checkNotNull($this->pid,"pid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
