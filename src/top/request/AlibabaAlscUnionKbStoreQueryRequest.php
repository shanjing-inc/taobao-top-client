<?php
/**
 * TOP API: alibaba.alsc.union.kb.store.query request
 * 
 * @author auto create
 * @since 1.0, 2022.07.27
 */
class AlibabaAlscUnionKbStoreQueryRequest
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
	 * 口碑一级类目（逗号分隔）
	 **/
	private $kbCategory1Ids;
	
	/** 
	 * 口碑二级类目（逗号分隔）
	 **/
	private $kbCategory2Ids;
	
	/** 
	 * 口碑三级类目（逗号分隔）
	 **/
	private $kbCategory3Ids;
	
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

	public function setKbCategory1Ids($kbCategory1Ids)
	{
		$this->kbCategory1Ids = $kbCategory1Ids;
		$this->apiParas["kb_category_1_ids"] = $kbCategory1Ids;
	}

	public function getKbCategory1Ids()
	{
		return $this->kbCategory1Ids;
	}

	public function setKbCategory2Ids($kbCategory2Ids)
	{
		$this->kbCategory2Ids = $kbCategory2Ids;
		$this->apiParas["kb_category_2_ids"] = $kbCategory2Ids;
	}

	public function getKbCategory2Ids()
	{
		return $this->kbCategory2Ids;
	}

	public function setKbCategory3Ids($kbCategory3Ids)
	{
		$this->kbCategory3Ids = $kbCategory3Ids;
		$this->apiParas["kb_category_3_ids"] = $kbCategory3Ids;
	}

	public function getKbCategory3Ids()
	{
		return $this->kbCategory3Ids;
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

	public function getApiMethodName()
	{
		return "alibaba.alsc.union.kb.store.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizType,"bizType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
