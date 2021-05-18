<?php
namespace Addons\Paygateway;
class PaygatewayAddons {
	public function pay_frontoffice() {
		A("Payment/Acpay")->index();
	}

	public function pay_backoffice() {
		echo "mm";
	}

}
?>