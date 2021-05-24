<?php
namespace Addons\Paygateway;
class PaygatewayAddons {
	public function pay_frontoffice() {
		$result = A("Payment/Acpay")->index();
		//echo "dddd";
		echo $result;
	}

	public function pay_backoffice() {
		echo "mm";
	}

}
?>