<?php
namespace Addons\Paygateway;
class PaygatewayAddons {
	public function pay_frontoffice() {

		$pay_list = getFileList("./Application/Payment/Controller");
		$oop = M("payment");
		foreach ($pay_list as $key => $value) {
			$action = str_replace("Controller.class.php", "", $value);
			$arr = A("Payment/" . $action)->index();
			$arr['name'] = $action;

			$result = $oop->where("pm_name=" . $action)->find();
			if ($result) {
				$arr['status'] = 1;
				$arr['id'] = $result['pm_id'];
			} else {
				$arr['status'] = 0;
				$arr['id'] = "";
			}

			$result[$key] = $arr;
		}
		return $result;
	}

	public function pay_backoffice() {
		echo "mm";
	}

}
?>