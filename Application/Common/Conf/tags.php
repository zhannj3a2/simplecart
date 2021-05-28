<?php
/*
app_init	应用初始化标签位
path_info	PATH_INFO检测标签位
route_check	路由检测标签位
app_begin	应用开始标签位
action_name	操作方法名标签位
action_begin	控制器开始标签位
view_begin	视图输出开始标签位
view_template	视图模板解析标签位
view_parse	视图解析标签位
view_filter	视图输出过滤标签位
view_end	视图输出结束标签位
action_end	控制器结束标签位
app_end	应用结束标签位
 */
return [
	// 添加下面一行定义即可
	'app_begin' => array(
		'Behavior\CheckLangBehavior',
	),
	'pay_frontoffice' => ['Addons\Paygateway\PaygatewayAddons'],
	'pay_backoffice' => ['Addons\Paygateway\PaygatewayAddons'],
];