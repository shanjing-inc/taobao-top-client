<?php
/**
 * TOP API: alibaba.alsc.union.kb.item.promotion.filter.list request
 * 
 * @author auto create
 * @since 1.0, 2022.06.16
 */
class AlibabaAlscUnionKbItemPromotionFilterListRequest
{
	/** 
	 * 1-cpa,2-cps.默认不填为cpa
	 **/
	private $bizUnit;
	
	/** 
	 * 获取筛选项集合的类型
	 **/
	private $filterType;
	
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

	public function setFilterType($filterType)
	{
		$this->filterType = $filterType;
		$this->apiParas["filter_type"] = $filterType;
	}

	public function getFilterType()
	{
		return $this->filterType;
	}

	public function getApiMethodName()
	{
		return "alibaba.alsc.union.kb.item.promotion.filter.list";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->filterType,"filterType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
