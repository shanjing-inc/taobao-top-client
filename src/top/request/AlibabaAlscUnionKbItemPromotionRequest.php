<?php
/**
 * TOP API: alibaba.alsc.union.kb.item.promotion request
 * 
 * @author auto create
 * @since 1.0, 2023.02.22
 */
class AlibabaAlscUnionKbItemPromotionRequest
{
	/** 
	 * 类目筛选，多个类目逗号分隔
	 **/
	private $filterCategoryIds;
	
	/** 
	 * 城市id(国标)筛选，多个城市逗号分隔
	 **/
	private $filterCityIds;
	
	/** 
	 * 指定itemId查询推广信息，多个逗号分割
	 **/
	private $hitItemIds;
	
	/** 
	 * 商品可售卖的端类型。1支付宝端商品，2微信端商品，3全部
	 **/
	private $itemType;
	
	/** 
	 * 页码，默认第一页，取值范围1~50
	 **/
	private $pageNumber;
	
	/** 
	 * 每页返回数据大小，默认20，最大返回20
	 **/
	private $pageSize;
	
	/** 
	 * 推广参数
	 **/
	private $pid;
	
	/** 
	 * 关键词搜索，多个词逗号分割
	 **/
	private $searchKeyword;
	
	/** 
	 * 用来分页，翻页时将上一次结果的sessionId带下来
	 **/
	private $sessionId;
	
	/** 
	 * 推广物料结算模型 1-cpa 2-cps，3spu
	 **/
	private $settleType;
	
	/** 
	 * 第三方会员id扩展
	 **/
	private $sid;
	
	/** 
	 * 排序类型 normal-默认排序 reservePrice-折后价从高到低  commission-佣金从高到低 totalSales-月销量从高到低
	 **/
	private $sortType;
	
	private $apiParas = array();
	
	public function setFilterCategoryIds($filterCategoryIds)
	{
		$this->filterCategoryIds = $filterCategoryIds;
		$this->apiParas["filter_category_ids"] = $filterCategoryIds;
	}

	public function getFilterCategoryIds()
	{
		return $this->filterCategoryIds;
	}

	public function setFilterCityIds($filterCityIds)
	{
		$this->filterCityIds = $filterCityIds;
		$this->apiParas["filter_city_ids"] = $filterCityIds;
	}

	public function getFilterCityIds()
	{
		return $this->filterCityIds;
	}

	public function setHitItemIds($hitItemIds)
	{
		$this->hitItemIds = $hitItemIds;
		$this->apiParas["hit_item_ids"] = $hitItemIds;
	}

	public function getHitItemIds()
	{
		return $this->hitItemIds;
	}

	public function setItemType($itemType)
	{
		$this->itemType = $itemType;
		$this->apiParas["item_type"] = $itemType;
	}

	public function getItemType()
	{
		return $this->itemType;
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

	public function setSearchKeyword($searchKeyword)
	{
		$this->searchKeyword = $searchKeyword;
		$this->apiParas["search_keyword"] = $searchKeyword;
	}

	public function getSearchKeyword()
	{
		return $this->searchKeyword;
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

	public function setSettleType($settleType)
	{
		$this->settleType = $settleType;
		$this->apiParas["settle_type"] = $settleType;
	}

	public function getSettleType()
	{
		return $this->settleType;
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
		return "alibaba.alsc.union.kb.item.promotion";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pageNumber,"pageNumber");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkNotNull($this->pid,"pid");
		RequestCheckUtil::checkNotNull($this->settleType,"settleType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
