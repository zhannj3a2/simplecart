<?php
namespace Admin\Controller;

use Think\Controller;

class CustomerController extends CommonController {
	public function _initialize() {
		parent::_initialize();
		$this->model = "customer";
		$this->key = "cs_id";
		$this->title_index = "顾客列表";
		$this->title_details = "顾客详情";
	}

}
