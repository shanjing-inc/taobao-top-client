<?php
namespace TopClient\request;

use TopClient\RequestCheckUtil;
/**
 * TOP API: taobao.tbk.dg.material.recommend request
 * 
 * @author auto create
 * @since 1.0, 2023.12.27
 */
class TbkDgMaterialRecommendRequest
{
	/** 
	 * 推广位id，mm_xxx_xxx_12345678三段式的最后一段数字（登录pub.alimama.com推广管理-推广位管理中查询）
	 **/
	private $adzoneId;
	
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
	 * 选品库收藏夹id，获取收藏夹id参考文档：https://mos.m.taobao.com/union/page_20230109_175050_176?spm=a219t._portal_v2_pages_promo_goods_index_htm.0.0.7c2a75a5H2ER3N
	 **/
	private $favoritesId;
	
	/** 
	 * 淘宝客新商品ID；用于相似商品推荐（注意：使用相似商品推荐material_id=13256必传，并请先签署协议https://pub.alimama.com/fourth/protocol/common.htm?key=hangye_laxin)；另关于《淘宝客新商品ID升级》参考白皮书：https://www.yuque.com/taobaolianmengguanfangxiaoer/zmig94/tfyt0pahmlpzu2ud
	 **/
	private $itemId;
	
	/** 
	 * 官方提供的物料Id；可以通过taobao.tbk.optimus.tou.material.ids.get接口获取公开的物料id列表或查看物料id汇总贴：https://market.m.taobao.com/app/qn/toutiao-new/index-pc.html#/detail/10628875?_k=gpov9a
	 **/
	private $materialId;
	
	/** 
	 * 第几页，默认：1
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
	 * 渠道关系ID，仅适用于渠道推广场景
	 **/
	private $relationId;
	
	/** 
	 * 会员运营ID
	 **/
	private $specialId;
	
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

	public function setFavoritesId($favoritesId)
	{
		$this->favoritesId = $favoritesId;
		$this->apiParas["favorites_id"] = $favoritesId;
	}

	public function getFavoritesId()
	{
		return $this->favoritesId;
	}

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
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

	public function setRelationId($relationId)
	{
		$this->relationId = $relationId;
		$this->apiParas["relation_id"] = $relationId;
	}

	public function getRelationId()
	{
		return $this->relationId;
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

	public function getApiMethodName()
	{
		return "taobao.tbk.dg.material.recommend";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adzoneId,"adzoneId");
		RequestCheckUtil::checkNotNull($this->materialId,"materialId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
