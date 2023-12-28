<?php
/**
 * TOP API: taobao.tbk.optimus.tou.material.ids.get request
 * 
 * @author auto create
 * @since 1.0, 2022.09.29
 */
use TopClient\RequestCheckUtil;
class TbkOptimusTouMaterialIdsGetRequest
{
	/** 
	 * 请求结构
	 **/
	private $materialQuery;
	
	private $apiParas = array();
	
	public function setMaterialQuery($materialQuery)
	{
		$this->materialQuery = $materialQuery;
		$this->apiParas["material_query"] = $materialQuery;
	}

	public function getMaterialQuery()
	{
		return $this->materialQuery;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.optimus.tou.material.ids.get";
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
