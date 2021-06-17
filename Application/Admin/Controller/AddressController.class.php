<?php
namespace Admin\Controller;

use Think\Controller;

class AddressController extends CommonController {
	public function _initialize() {
		parent::_initialize();
		$this->model = "address";
		$this->model_view = "AddressView";
		$this->key = "addr_id";
		$this->title_index = "地址列表";
		$this->title_details = "地址详情";
	}

}
