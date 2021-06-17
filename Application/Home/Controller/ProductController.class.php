<?php
namespace Home\Controller;
use Think\Controller;

class ProductController extends Controller {
	/**
	 * 产品列表，首先必须分类状态和产品状态都是可用的
	 */
	public function index() {
		$oop = D("ProductView");
		$mist_arr = array('product_name' => I("product_name"));
		$accute_arr = array('product_cat' => I("product_cat"));
		$cookie_arr = array();
		$con = searchCon($mist_arr, $accute_arr, $cookie_arr);
		$con['product_status'] = 1;
		$con['cat_status'] = 1;
		$data = pageInfo($oop, "product_sort desc", $con, 25);
		$this->assign("list", $data['list']);
		$this->assign("page", $data['show']);
		$this->display();
	}

	public function details() {

	}
}