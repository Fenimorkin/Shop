<?php
 abstract class Product
 {
 	protected $id;
 	protected $name;
 	protected $desc;
 	protected $price_per_unit;

 public function  __construct(
	$in_prodid,
 	$in_prodname,
 	$in_proddesc,
 	$in_price_pu
 	)
 	{
 		$this->id = $in_prodid;
 		$this->name = $in_prodname;
 		$this->desc = $in_proddesc;
 		$this->price_per_unit = $in_price_pu;
 	}
 	
 public function __destruct()
 	{
 	
 	}
 	
 //SubClass must impliment these!
 
 abstract public function get_number_in_stock($in_num_desired);
 abstract public function ship_product_units($in_num_shipped);
 
 
 	
 }