<?php
namespace Admin\Controller;

use Think\Controller;

class PaymentController extends CommonController {
	public function _initialize() {
		parent::_initialize();
		$this->title_index = "网关列表";
		$this->title_details = "网关配置";
	}
	public function index() {
		$pay_list = getFileList("./Application/Payment/Controller");
		foreach ($pay_list as $key => $value) {
			$action = str_replace("Controller.class.php", "", $value);
			$arr = A("Payment/" . $action)->index();
			$arr['name'] = $action;
			if (file_exists("./Application/Payment/Config/" . $action . ".json")) {
				$arr['status'] = 1;
			} else {
				$arr['status'] = 0;
			}

			$final[$key] = $arr;
		}
		//dump($final);
		$this->assign("list", $final);
		$this->assign("main_title", $this->title_index);
		$this->display();
	}

	public function install() {
		$file = "./Application/Payment/Config/" . I("name") . ".json";
		if (file_exists($file)) {
			$this->error("模块已经安装过！");
		} else {
			$arr['sort'] = 10;
			$arr['name'] = I("name");
			$json_result = json_encode($arr);
			file_put_contents($file, $json_result);
			$this->success("安装成功！");
		}
	}

	public function uninstall() {
		$file = "./Application/Payment/Config/" . I("name") . ".json";
		unlink($file);
		$this->success("卸载成功！");
	}

	public function details() {
		$file = "./Application/Payment/Config/" . I("name") . ".json";
		$conn = file_get_contents($file);
		$arr = json_decode($conn, true);
		//dump($arr);
		$this->assign($arr);
		$this->assign("main_title", $this->title_details);
		$this->display(I("name"));
	}

	public function updateHandle() {
		$file = "./Application/Payment/Config/" . I("name") . ".json";
		if (file_exists($file)) {
			$json_result = json_encode($_POST);
			file_put_contents($file, $json_result);
			$this->success("保存成功！");
		} else {
			$this->error("模块尚未安装！");
		}
	}

}
