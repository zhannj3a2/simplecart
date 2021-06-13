<?php
namespace Addons\Paygateway;
class PaygatewayAddons {
	public function pay_frontoffice() {
		$content = A("Payment/Acpay")->edit();
		echo $content;
	}

	public function pay_backoffice($pay_method) {
		$content = A("Payment/Acpay")->edit();
		echo $content;
	}

}
?>