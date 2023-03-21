<?php

namespace TopClient\request;

use TopClient\RequestCheckUtil;

/**
 * TOP API: alibaba.alsc.union.media.zone.add request
 *
 * @author auto create
 * @since 1.0, 2022.06.16
 */
class AlibabaAlscUnionMediaZoneAddRequest
{
	/**
	 * 媒体id，工具商渠道必填
	 **/
	private $mediaId;

	/**
	 * 推广位名称
	 **/
	private $zoneName;

	private $apiParas = array();

	public function setMediaId($mediaId)
	{
		$this->mediaId = $mediaId;
		$this->apiParas["media_id"] = $mediaId;
	}

	public function getMediaId()
	{
		return $this->mediaId;
	}

	public function setZoneName($zoneName)
	{
		$this->zoneName = $zoneName;
		$this->apiParas["zone_name"] = $zoneName;
	}

	public function getZoneName()
	{
		return $this->zoneName;
	}

	public function getApiMethodName()
	{
		return "alibaba.alsc.union.media.zone.add";
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{

		RequestCheckUtil::checkNotNull($this->zoneName,"zoneName");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
