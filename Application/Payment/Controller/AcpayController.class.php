<?php
namespace Payment\Controller;
use Think\Controller;

class AcpayController extends Controller {
	public function index() {
		$content = $this->fetch("index");
		return $content;
		//return "ddddddd";
	}
}