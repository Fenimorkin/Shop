<?php

require 'iproduct.php';

class SuperBoatsProduct implements IProduct
{
	protected $boatid;
	protected $model_name;
	protected $model_features;
	protected $price;
	
	//initialize a new instance of this class
	//Реализовать сущность класса
	
	public function __construct
	(
		$in_boatid,
		$in_modelname,
		$in_modeldesc,
		$in_price
	)
	{
		$this->boatid = $in_boatid;
		$this->model_name = $in_modelname;
		$this->model_features = $in_modeldesc;
		$this->price = $in_price;	
	}
	
	public function __destruct()
	{
		//nothing to do
	}
	
	//this is final because we don`t want people fidding with it
	
	final public function get_ProductID()
	{
		return $this->boatid;
	}
	
	public function get_Name()
	{
		return $this->model_name;
	}
	
	public function get_Description()
	{
		return $this->model_features;
	}
	
	public function get_PricePerUnit()
	{
		return $this->price;
	}
	
	public function get_number_in_stock($in_num_desired)
	{
		//go to boats DBs and see how many we have left.
		//return -1 on a failure of some sort
	}
	
	public function ship_product_units($in_num_shipped)
	{
		//go to our local DBs and mark $in_number units
		//as no longer available. 
		//Return FALSE on failure, TRUE on success
	}
}
