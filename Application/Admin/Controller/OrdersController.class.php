<?php
namespace Admin\Controller;

use Think\Controller;

class OrdersController extends CommonController {
	public function _initialize() {
		parent::_initialize();
		$this->model = "orders";
		$this->model_view = "OrdersView";
		$this->key = "order_id";
		$this->title_index = "订单列表";
		$this->title_details = "订单详情";
	}

}
