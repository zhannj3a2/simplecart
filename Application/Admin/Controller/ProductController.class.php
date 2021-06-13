<?php
namespace Admin\Controller;

use Think\Controller;

class ProductController extends CommonController {
	public function _initialize() {
		parent::_initialize();
		$this->model = "product";
		$this->model_view = "ProductView";
		$this->key = "product_id";
		$this->title_index = "产品列表";
		$this->title_details = "产品详情";
	}

	public function index() {
		$mist_arr = array('cms_title' => I('cms_title'));
		$accute_arr = array('cms_cat' => I("cms_cat"), 'cms_isactive' => I("cms_isactive"), "cms_id" => I("cms_id"));
		$cookie_arr = array();
		$con = searchCon($mist_arr, $accute_arr, $cookie_arr);
		parent::index($con);
	}

	public function addHandle() {
		$oop = M($this->model);
		$oop->create();

		if (!empty($_FILES['file']['tmp_name'])) {
			$result = parent::uploadfile($exts = array('jpg', 'gif', 'png', 'jpeg'), $thumb = true);
			if (!$result['status']) {
				$this->error($result['info']);
			}
			$oop->product_dir = $result['info']['file']['savepath'];
			$oop->product_img = $result['info']['file']['savename'];
		}
		//dump(I());
		//dump($result);exit;
		try {

			if ($oop->add()) {
				$this->success(L("add_success"));
			} else {
				$this->error(L("add_failed"));
			}

		} catch (\Exception $e) {
			//dump($e);exit;
			if ($e->getCode() == 23000) {
				$this->error(L("unique_error"));
			}
		}
	}

	public function updateHandle() {
		$oop = M($this->model);
		$oop->create();

		if (!empty($_FILES['file']['tmp_name'])) {
			$result = parent::uploadfile($exts = array('jpg', 'gif', 'png', 'jpeg'), $thumb = true);
			if (!$result['status']) {
				$this->error($result['info']);
			}
			$oop->product_dir = $result['info']['file']['savepath'];
			$oop->product_img = $result['info']['file']['savename'];
		}
		//dump(I());
		//dump($result);exit;
		try {

			if ($oop->save()) {
				$this->success(L("update_success"));
			} else {
				$this->error(L("update_failed"));
			}

		} catch (\Exception $e) {
			//dump($e);exit;
			if ($e->getCode() == 23000) {
				$this->error(L("unique_error"));
			}
		}
	}

}
