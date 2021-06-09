<?php
namespace Payment\Controller;
use Think\Controller;

class AcpayController extends Controller {

	private $title;
	private $logo;
	private $desc;

	public function index() {
		//$content = $this->fetch("index");
		//return $content;
		$arr['title'] = "321";
		$arr['logo'] = "32321";
		$arr['desc'] = "321312";
		return $arr;
	}
}