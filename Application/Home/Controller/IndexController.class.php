<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
	public function index() {
		$result = \Think\Hook::listen("pay_frontoffice", $params);
		dump($result);
		//\Think\Hook::listen("pay_backoffice", $params);
		//$result = $this->fetch();
		//dump($result);
		//$result = getFileList("./Application/Payment/Controller");
		//dump($result);
	}
}