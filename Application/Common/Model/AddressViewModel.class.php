<?php
namespace Common\Model;
use Think\Model\ViewModel;

class AddressViewModel extends ViewModel {
	public $viewFields = array(
		'Address' => [],
		'Customer' => ['_on' => "Address.addr_cs_id=Customer.cs_id"],
	);
}
?>