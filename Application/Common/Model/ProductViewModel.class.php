<?php
namespace Common\Model;
use Think\Model\ViewModel;

class ProductViewModel extends ViewModel {
	public $viewFields = array(
		'Product' => [],
		'Category' => ['_on' => "Product.product_cat=Category.cat_id"],
	);
}
?>