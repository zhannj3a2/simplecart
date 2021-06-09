<?php
namespace Home\Widget;
use Think\Controller;

class CateWidget extends Controller {
	public function menu() {
		$this->display('Cate:menu');
	}
}
