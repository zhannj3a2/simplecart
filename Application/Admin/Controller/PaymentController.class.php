<?php
namespace Admin\Controller;

use Think\Controller;

class PaymentController extends CommonController {
	public function _initialize() {
		parent::_initialize();
		$this->model = "payment";
		$this->title_index = "网关列表";
		$this->title_details = "网关详情";
	}
	public function index() {
		$pay_list = getFileList("./Application/Payment/Controller");
		$oop = M("payment");
		foreach ($pay_list as $key => $value) {
			$action = str_replace("Controller.class.php", "", $value);
			$arr = A("Payment/" . $action)->index();
			$arr['name'] = $action;
			$result = $oop->where("pm_name='" . $action . "'")->find();
			if ($result) {
				$arr['status'] = 1;
				$arr['id'] = $result['pm_id'];
				$arr['sort'] = $result['pm_sort'];
			} else {
				$arr['status'] = 0;
				$arr['id'] = "";
				$arr['sort'] = 0;
			}

			$final[$key] = $arr;
		}
		//dump($final);
		$this->assign("list", $final);
		$this->assign("main_title", $this->title_index);
		$this->display();
	}

	public function install() {
		try {
			$oop = M("payment");
			$data['pm_name'] = I("name");
			if ($oop->add($data)) {
				$this->success(L("add_success"));
			} else {
				$this->error(L("add_failed"));
			}

		} catch (\Exception $e) {
			if ($e->getCode() == 23000) {
				$this->error(L("unique_error"));
			}
		}
	}

}
