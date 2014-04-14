<?php

//ИНТЕРФЕЙС при написании интерфейса пишеться ведущая буква I
interface IProduct
{
	public function get_ProductID();
	public function get_Name();
	public function get_Description();
	public function get_PricePerUnit();

	public function get_number_in_stock($in_num_desired);
	public function ship_product_units($in_num_shipped);
}