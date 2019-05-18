<?php
class Product
{
	private $_sku;
	private $_stockItem;
	
	public function __construct($sku)
	{
		$this->_sku = $sku;
	}
	
	public function getSku()
	{
		return $this->_sku;
	}
	
	public function getStockItem()
	{
		return $this->_stockItem;
	}
	
	//good: StockItem => Class
	//bester: StockItem => Interface
	public function setStockItem(StockItem $stockItem)
	{
		$this->_stockItem = $stockItem;
	}
}