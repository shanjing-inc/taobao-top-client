<?php
/**
 * TOP API: taobao.tbk.dg.material.optional.upgrade request
 * 
 * @author auto create
 * @since 1.0, 2023.12.27
 */
use TopClient\RequestCheckUtil;
class TbkDgMaterialOptionalUpgradeRequest
{
	/** 
	 * 推广位id，mm_xxx_xxx_12345678三段式的最后一段数字（登录pub.alimama.com推广管理-推广位管理中查询）
	 **/
	private $adzoneId;
	
	/** 
	 * 1-动态ID转链场景，2-消费者比价场景（不填默认为1）；场景id使用说明参考《淘宝客新商品ID升级》白皮书：https://www.yuque.com/taobaolianmengguanfangxiaoer/zmig94/tfyt0pahmlpzu2ud
	 **/
	private $bizSceneId;
	
	/** 
	 * 商品筛选-后台类目ID。用,分割，最大10个
	 **/
	private $cat;
	
	/** 
	 * 智能匹配-设备号加密类型：MD5；使用智能推荐请先签署协议https://pub.alimama.com/fourth/protocol/common.htm?key=hangye_laxin
	 **/
	private $deviceEncrypt;
	
	/** 
	 * 智能匹配-设备号类型：IMEI，或者IDFA，或者UTDID（UTDID不支持MD5加密），或者OAID；使用智能推荐请先签署协议https://pub.alimama.com/fourth/protocol/common.htm?key=hangye_laxin
	 **/
	private $deviceType;
	
	/** 
	 * 智能匹配-设备号加密后的值（MD5加密需32位小写）；使用智能推荐请先签署协议https://pub.alimama.com/fourth/protocol/common.htm?key=hangye_laxin
	 **/
	private $deviceValue;
	
	/** 
	 * 商品筛选-预估到手价范围上限。单位：元
	 **/
	private $endPrice;
	
	/** 
	 * 商品筛选-淘客收入比率上限(商品佣金比率+补贴比率)。如：1234表示12.34%
	 **/
	private $endTkRate;
	
	/** 
	 * 是否获取前N件佣金信息	0否，1是，其他值否
	 **/
	private $getTopnRate;
	
	/** 
	 * 优惠券筛选-是否有优惠券。true表示该商品有优惠券，false或不设置表示不限
	 **/
	private $hasCoupon;
	
	/** 
	 * 商品筛选-好评率是否高于行业均值。True表示大于等于，false或不设置表示不限
	 **/
	private $includeGoodRate;
	
	/** 
	 * 商品筛选-成交转化是否高于行业均值。True表示大于等于，false或不设置表示不限
	 **/
	private $includePayRate30;
	
	/** 
	 * 商品筛选-退款率是否低于行业均值。True表示大于等于，false或不设置表示不限
	 **/
	private $includeRfdRate;
	
	/** 
	 * ip参数影响邮费获取，如果不传或者传入不准确，邮费无法精准提供
	 **/
	private $ip;
	
	/** 
	 * 商品筛选-是否海外商品。true表示属于海外商品，false或不设置表示不限
	 **/
	private $isOverseas;
	
	/** 
	 * 商品筛选-是否天猫商品。true表示属于天猫商品，false或不设置表示不限
	 **/
	private $isTmall;
	
	/** 
	 * 商品筛选-所在地
	 **/
	private $itemloc;
	
	/** 
	 * 物料id，不传时默认物料material_id=80309；如果直接对消费者投放，可使用官方个性化算法优化的搜索物料material_id=17004（注意：若物料id=17004没查询到结果则出系统默认物料id=80309的查询结果）
	 **/
	private $materialId;
	
	/** 
	 * 线报内容筛选—内容生产截止时间，13毫秒时间戳
	 **/
	private $mgcEndTime;
	
	/** 
	 * 线报内容筛选—内容生产开始时间，13毫秒时间戳
	 **/
	private $mgcStartTime;
	
	/** 
	 * 线报状态筛选，0-全部 1-过期 2-实时生效 3-未来生效 不传默认过滤有效
	 **/
	private $mgcStatus;
	
	/** 
	 * 商品筛选-是否包邮。true表示包邮，false或不设置表示不限
	 **/
	private $needFreeShipment;
	
	/** 
	 * 商品筛选-是否加入消费者保障。true表示加入，false或不设置表示不限
	 **/
	private $needPrepay;
	
	/** 
	 * 商品筛选-牛皮癣程度。取值：1不限，2无，3轻微
	 **/
	private $npxLevel;
	
	/** 
	 * 第几页，默认：１
	 **/
	private $pageNo;
	
	/** 
	 * 页大小，默认20，1~100
	 **/
	private $pageSize;
	
	/** 
	 * 1-自购省，2-推广赚（代理模式专属ID，代理模式必填，非代理模式不用填写该字段）
	 **/
	private $promotionType;
	
	/** 
	 * 商品筛选-查询词；注意：使用标题精准搜索时，若无消费者比价场景ID2权限，当搜索结果只有一个商品时则出参不再提供商品推广链接和商品id字段，若搜索结果仍有多个商品，则正常出参。同时无消费者比价场景ID2权限，q参数也不再支持入参淘宝复制的商品链接进行搜索查询，仅支持入参含新商品id的淘宝客推广链接如uland链接进行搜索查询(场景id使用说明参考《淘宝客新商品ID升级》白皮书：https://www.yuque.com/taobaolianmengguanfangxiaoer/zmig94/tfyt0pahmlpzu2ud)
	 **/
	private $q;
	
	/** 
	 * 渠道关系ID，仅适用于渠道推广场景
	 **/
	private $relationId;
	
	/** 
	 * 排序_des（降序），排序_asc（升序），销量（total_sales），淘客收入比率（tk_rate）， 累计推广量（tk_total_sales），总支出佣金（tk_total_commi），预估到价格（final_promotion_price），匹配分（match）
	 **/
	private $sort;
	
	/** 
	 * 会员运营ID
	 **/
	private $specialId;
	
	/** 
	 * 商品筛选-店铺dsr评分。筛选大于等于当前设置的店铺dsr评分的商品0-50000之间
	 **/
	private $startDsr;
	
	/** 
	 * 商品筛选-预估到手价范围下限。单位：元
	 **/
	private $startPrice;
	
	/** 
	 * 商品筛选-淘客收入比率下限(商品佣金比率+补贴比率)。如：1234表示12.34%
	 **/
	private $startTkRate;
	
	/** 
	 * 人群ID，仅适用于物料评估场景material_id=41377
	 **/
	private $ucrowdId;
	
	/** 
	 * 物料评估-商品列表
	 **/
	private $ucrowdRankItems;
	
	private $apiParas = array();
	
	public function setAdzoneId($adzoneId)
	{
		$this->adzoneId = $adzoneId;
		$this->apiParas["adzone_id"] = $adzoneId;
	}

	public function getAdzoneId()
	{
		return $this->adzoneId;
	}

	public function setBizSceneId($bizSceneId)
	{
		$this->bizSceneId = $bizSceneId;
		$this->apiParas["biz_scene_id"] = $bizSceneId;
	}

	public function getBizSceneId()
	{
		return $this->bizSceneId;
	}

	public function setCat($cat)
	{
		$this->cat = $cat;
		$this->apiParas["cat"] = $cat;
	}

	public function getCat()
	{
		return $this->cat;
	}

	public function setDeviceEncrypt($deviceEncrypt)
	{
		$this->deviceEncrypt = $deviceEncrypt;
		$this->apiParas["device_encrypt"] = $deviceEncrypt;
	}

	public function getDeviceEncrypt()
	{
		return $this->deviceEncrypt;
	}

	public function setDeviceType($deviceType)
	{
		$this->deviceType = $deviceType;
		$this->apiParas["device_type"] = $deviceType;
	}

	public function getDeviceType()
	{
		return $this->deviceType;
	}

	public function setDeviceValue($deviceValue)
	{
		$this->deviceValue = $deviceValue;
		$this->apiParas["device_value"] = $deviceValue;
	}

	public function getDeviceValue()
	{
		return $this->deviceValue;
	}

	public function setEndPrice($endPrice)
	{
		$this->endPrice = $endPrice;
		$this->apiParas["end_price"] = $endPrice;
	}

	public function getEndPrice()
	{
		return $this->endPrice;
	}

	public function setEndTkRate($endTkRate)
	{
		$this->endTkRate = $endTkRate;
		$this->apiParas["end_tk_rate"] = $endTkRate;
	}

	public function getEndTkRate()
	{
		return $this->endTkRate;
	}

	public function setGetTopnRate($getTopnRate)
	{
		$this->getTopnRate = $getTopnRate;
		$this->apiParas["get_topn_rate"] = $getTopnRate;
	}

	public function getGetTopnRate()
	{
		return $this->getTopnRate;
	}

	public function setHasCoupon($hasCoupon)
	{
		$this->hasCoupon = $hasCoupon;
		$this->apiParas["has_coupon"] = $hasCoupon;
	}

	public function getHasCoupon()
	{
		return $this->hasCoupon;
	}

	public function setIncludeGoodRate($includeGoodRate)
	{
		$this->includeGoodRate = $includeGoodRate;
		$this->apiParas["include_good_rate"] = $includeGoodRate;
	}

	public function getIncludeGoodRate()
	{
		return $this->includeGoodRate;
	}

	public function setIncludePayRate30($includePayRate30)
	{
		$this->includePayRate30 = $includePayRate30;
		$this->apiParas["include_pay_rate_30"] = $includePayRate30;
	}

	public function getIncludePayRate30()
	{
		return $this->includePayRate30;
	}

	public function setIncludeRfdRate($includeRfdRate)
	{
		$this->includeRfdRate = $includeRfdRate;
		$this->apiParas["include_rfd_rate"] = $includeRfdRate;
	}

	public function getIncludeRfdRate()
	{
		return $this->includeRfdRate;
	}

	public function setIp($ip)
	{
		$this->ip = $ip;
		$this->apiParas["ip"] = $ip;
	}

	public function getIp()
	{
		return $this->ip;
	}

	public function setIsOverseas($isOverseas)
	{
		$this->isOverseas = $isOverseas;
		$this->apiParas["is_overseas"] = $isOverseas;
	}

	public function getIsOverseas()
	{
		return $this->isOverseas;
	}

	public function setIsTmall($isTmall)
	{
		$this->isTmall = $isTmall;
		$this->apiParas["is_tmall"] = $isTmall;
	}

	public function getIsTmall()
	{
		return $this->isTmall;
	}

	public function setItemloc($itemloc)
	{
		$this->itemloc = $itemloc;
		$this->apiParas["itemloc"] = $itemloc;
	}

	public function getItemloc()
	{
		return $this->itemloc;
	}

	public function setMaterialId($materialId)
	{
		$this->materialId = $materialId;
		$this->apiParas["material_id"] = $materialId;
	}

	public function getMaterialId()
	{
		return $this->materialId;
	}

	public function setMgcEndTime($mgcEndTime)
	{
		$this->mgcEndTime = $mgcEndTime;
		$this->apiParas["mgc_end_time"] = $mgcEndTime;
	}

	public function getMgcEndTime()
	{
		return $this->mgcEndTime;
	}

	public function setMgcStartTime($mgcStartTime)
	{
		$this->mgcStartTime = $mgcStartTime;
		$this->apiParas["mgc_start_time"] = $mgcStartTime;
	}

	public function getMgcStartTime()
	{
		return $this->mgcStartTime;
	}

	public function setMgcStatus($mgcStatus)
	{
		$this->mgcStatus = $mgcStatus;
		$this->apiParas["mgc_status"] = $mgcStatus;
	}

	public function getMgcStatus()
	{
		return $this->mgcStatus;
	}

	public function setNeedFreeShipment($needFreeShipment)
	{
		$this->needFreeShipment = $needFreeShipment;
		$this->apiParas["need_free_shipment"] = $needFreeShipment;
	}

	public function getNeedFreeShipment()
	{
		return $this->needFreeShipment;
	}

	public function setNeedPrepay($needPrepay)
	{
		$this->needPrepay = $needPrepay;
		$this->apiParas["need_prepay"] = $needPrepay;
	}

	public function getNeedPrepay()
	{
		return $this->needPrepay;
	}

	public function setNpxLevel($npxLevel)
	{
		$this->npxLevel = $npxLevel;
		$this->apiParas["npx_level"] = $npxLevel;
	}

	public function getNpxLevel()
	{
		return $this->npxLevel;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
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

	public function setPromotionType($promotionType)
	{
		$this->promotionType = $promotionType;
		$this->apiParas["promotion_type"] = $promotionType;
	}

	public function getPromotionType()
	{
		return $this->promotionType;
	}

	public function setQ($q)
	{
		$this->q = $q;
		$this->apiParas["q"] = $q;
	}

	public function getQ()
	{
		return $this->q;
	}

	public function setRelationId($relationId)
	{
		$this->relationId = $relationId;
		$this->apiParas["relation_id"] = $relationId;
	}

	public function getRelationId()
	{
		return $this->relationId;
	}

	public function setSort($sort)
	{
		$this->sort = $sort;
		$this->apiParas["sort"] = $sort;
	}

	public function getSort()
	{
		return $this->sort;
	}

	public function setSpecialId($specialId)
	{
		$this->specialId = $specialId;
		$this->apiParas["special_id"] = $specialId;
	}

	public function getSpecialId()
	{
		return $this->specialId;
	}

	public function setStartDsr($startDsr)
	{
		$this->startDsr = $startDsr;
		$this->apiParas["start_dsr"] = $startDsr;
	}

	public function getStartDsr()
	{
		return $this->startDsr;
	}

	public function setStartPrice($startPrice)
	{
		$this->startPrice = $startPrice;
		$this->apiParas["start_price"] = $startPrice;
	}

	public function getStartPrice()
	{
		return $this->startPrice;
	}

	public function setStartTkRate($startTkRate)
	{
		$this->startTkRate = $startTkRate;
		$this->apiParas["start_tk_rate"] = $startTkRate;
	}

	public function getStartTkRate()
	{
		return $this->startTkRate;
	}

	public function setUcrowdId($ucrowdId)
	{
		$this->ucrowdId = $ucrowdId;
		$this->apiParas["ucrowd_id"] = $ucrowdId;
	}

	public function getUcrowdId()
	{
		return $this->ucrowdId;
	}

	public function setUcrowdRankItems($ucrowdRankItems)
	{
		$this->ucrowdRankItems = $ucrowdRankItems;
		$this->apiParas["ucrowd_rank_items"] = $ucrowdRankItems;
	}

	public function getUcrowdRankItems()
	{
		return $this->ucrowdRankItems;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.dg.material.optional.upgrade";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adzoneId,"adzoneId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
