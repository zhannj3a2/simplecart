<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
	public function index() {
		\Think\Hook::listen("pay_frontoffice", $params);
		\Think\Hook::listen("pay_backoffice", $params);
	}
}