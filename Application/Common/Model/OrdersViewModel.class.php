<?php
namespace Common\Model;
use Think\Model\ViewModel;

class OrdersViewModel extends ViewModel {
	public $viewFields = array(
		'Orders' => [],
		'Customer' => ['_on' => "Orders.order_cs_id=Customer.cs_id"],
	);
}
?>