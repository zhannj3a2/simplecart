<?php
namespace Payment\Controller;
use Think\Controller;

class AcpayController extends Controller {

	private $title;
	private $logo;
	private $desc;

	public function index() {

		$arr['title'] = "321";
		$arr['logo'] = "32321";
		$arr['desc'] = "321312";
		return $arr;

	}

	public function edit() {
		$content = $this->fetch();
		return $content;
		//dump($content);
		//return "dddd";
	}
}