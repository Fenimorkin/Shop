<?php
//ИНТЕРФЕЙС при написании интерфейса пишеться ведущая буква I

require 'iproduct.php';

/* Наследуя интерфейс IProduct класс Product обязуеться реализовать сам
   или в своих наследниках описаные функции из интерфейса
   Зная этот  интерфейс стороняя организация может разработать класс для своей 
   продукции   
*/ 

//Добавляем класс продуктов которы будут наследовать и функц. которого будут 
//переопределяться

 abstract class Product implements IProduct
 {
 	protected $pid;
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
 	
 //Наследующие классы должные в себе реализовать данные функции
 
 abstract public function get_number_in_stock($in_num_desired);
 abstract public function ship_product_units($in_num_shipped);
 
 public function get_ProductID()
 {
 	return  $this->pid;
 }
 
 public function get_Name()
 {
 	return  $this->name;
 }
 
 public function get_Description()
 {
 	return  $this->desc;
 }
 
 public function get_PricePerUnit()
 {
 	return  $this->price_per_unit;
 }
 
 }
 
 //LocalProduct наследует класс Product осуществляет доступ к локальной БД mySQL
 
 class LocalProduct extends Product
 {
 	public function get_number_in_stock($in_num_desired)
 	{
 		//go to our local DBs and seehow many we have left
 		//return -1 on a failure of some sort
 	}
 	
 	public function ship_product_units($in_num_shipped)
 	{
 		//go to our localdbs and mark $in_number units as no
 		//longer available. TRUE == success, FALSE == failure
 	}
 }
 
 //NavigationPartnerProduct наследует класс Product осуществляет доступ к БД 
 //партнеров PostgreSQL
 
 class NavigationPartnerProduct extends  Product
 {
 	public function get_number_in_stock($in_num_desired)
 	{
 		//go to our navigation equipment partner`s servers
 		//and see how many are left/ Return -1 on failure 
 	}
 	
 	public function ship_product_units($in_num_shipped)
 	{
 		//go to our navigation equipment partner`s servers
 		//and mark $in_numbers units as no longer available
 		//Return FALSE on failure, TRUE on success
 	}
 }
 
 ?>