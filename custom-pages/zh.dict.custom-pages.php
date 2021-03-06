<?php

/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */


// Menu
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'UI:BatchQuery:Title' => '批量查询',
	'UI:BatchQuery:SelectClass' => '选择查询的类型',
	'UI:BatchQuery:Values' => '每行一个值',
	'Menu:BatchQueriesMenu' => '批量查询',
	'Menu:BatchQueriesMenu+' => '批量查询',
	'Menu:WelcomeBatchQuery' => '批量查询',

	'UI:ServerAccount:Title' => '服务器账号',
	'UI:ServerAccount:ServerYouCanLogin' => '我能登录的服务器列表',
	'UI:ServerAccount:ServerYouManaged' => '我是管理员的服务器列表',
	'UI:ServerAccount:MyTicket' => '我的账号申请工单',
	'UI:ServerAccount:Help' => '点此查看帮助',
	'UI:ServerAccount:Create' => '提交账号申请工单',
	'Menu:ServerAccountMenu' => '服务器账号',
	'Menu:ServerAccountMenu+' => '服务器账号',
	'Menu:WelcomeServerAccount' => '服务器账号',

));

// lnkUserToServer
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkUserToServer' => '服务器账号',
	'Class:lnkUserToServer/Attribute:server_id' => '服务器',
	'Class:lnkUserToServer/Attribute:user_id' => '用户账号',
	'Class:lnkUserToServer/Attribute:sudo' => 'Sudo权限',
	'Class:lnkUserToServer/Attribute:status' => '账号状态',
	'Class:lnkUserToServer/Attribute:status/Value:enabled' => '已审核',
	'Class:lnkUserToServer/Attribute:status/Value:disabled' => '未审核',
	'Class:lnkUserToServer/Attribute:expiration' => '过期时间',
	'Class:lnkUserToServer/Error:ThisLnkAlreadyExists' => '此账号已存在，请直接编辑',
));

?>
