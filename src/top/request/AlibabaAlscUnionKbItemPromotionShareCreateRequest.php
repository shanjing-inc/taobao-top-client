<?php

namespace TopClient\request;

use TopClient\RequestCheckUtil;


/**
 * TOP API: alibaba.alsc.union.kb.item.promotion.share.create request
 *
 * @author auto create
 * @since 1.0, 2023.02.16
 */
class AlibabaAlscUnionKbItemPromotionShareCreateRequest
{
	/**
	 * 业务单元，1-CPA，2-CPS，3-SPU。默认1-CPA
	 **/
	private $bizUnit;

	/**
	 * 是否合成支付宝推广图
	 **/
	private $includeAlipayImgUrl;

	/**
	 * 是否返回吱口令
	 **/
	private $includeAlipayWathword;

	/**
	 * 废弃
	 **/
	private $includeImgUrl;

	/**
	 * 废弃
	 **/
	private $includeMiniQrCode;

	/**
	 * 废弃
	 **/
	private $includeMiniQrCodeHyaline;

	/**
	 * 是否合成微信推广图
	 **/
	private $includeWxImgUrl;

	/**
	 * 商品ID，默认CPA的品，如果推广其他业务单元的品，请填写对应的biz_unit
	 **/
	private $itemId;

	/**
	 * 推广位pid
	 **/
	private $pid;

	/**
	 * 第三方会员id扩展
	 **/
	private $sid;

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

	public function setIncludeAlipayImgUrl($includeAlipayImgUrl)
	{
		$this->includeAlipayImgUrl = $includeAlipayImgUrl;
		$this->apiParas["include_alipay_img_url"] = $includeAlipayImgUrl;
	}

	public function getIncludeAlipayImgUrl()
	{
		return $this->includeAlipayImgUrl;
	}

	public function setIncludeAlipayWathword($includeAlipayWathword)
	{
		$this->includeAlipayWathword = $includeAlipayWathword;
		$this->apiParas["include_alipay_wathword"] = $includeAlipayWathword;
	}

	public function getIncludeAlipayWathword()
	{
		return $this->includeAlipayWathword;
	}

	public function setIncludeImgUrl($includeImgUrl)
	{
		$this->includeImgUrl = $includeImgUrl;
		$this->apiParas["include_img_url"] = $includeImgUrl;
	}

	public function getIncludeImgUrl()
	{
		return $this->includeImgUrl;
	}

	public function setIncludeMiniQrCode($includeMiniQrCode)
	{
		$this->includeMiniQrCode = $includeMiniQrCode;
		$this->apiParas["include_mini_qr_code"] = $includeMiniQrCode;
	}

	public function getIncludeMiniQrCode()
	{
		return $this->includeMiniQrCode;
	}

	public function setIncludeMiniQrCodeHyaline($includeMiniQrCodeHyaline)
	{
		$this->includeMiniQrCodeHyaline = $includeMiniQrCodeHyaline;
		$this->apiParas["include_mini_qr_code_hyaline"] = $includeMiniQrCodeHyaline;
	}

	public function getIncludeMiniQrCodeHyaline()
	{
		return $this->includeMiniQrCodeHyaline;
	}

	public function setIncludeWxImgUrl($includeWxImgUrl)
	{
		$this->includeWxImgUrl = $includeWxImgUrl;
		$this->apiParas["include_wx_img_url"] = $includeWxImgUrl;
	}

	public function getIncludeWxImgUrl()
	{
		return $this->includeWxImgUrl;
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

	public function getApiMethodName()
	{
		return "alibaba.alsc.union.kb.item.promotion.share.create";
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{

		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->pid,"pid");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
