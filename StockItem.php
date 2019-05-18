<?php
class StockItem
{
	private $_quantity;
	private $_status;
	
	public function __construct($quantity, $status)
	{
		$this->_quantity = $quantity;
		$this->_status = $status;
	}
	
	public function getQuantity()
	{
		return $this->_quantity;
	}
	
	public function getStatus()
	{
		return $this->_status;
	}
}