<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    // 生成应用公共文件
    '__file__' => ['common.php', 'config.php', 'database.php'],

    // 定义demo模块的自动生成 （按照实际定义的文件名生成）
    'common'     => [
        '__file__'   => ['common.php'],
        '__dir__'    => [ 'controller', 'model', 'validate','request'],
        'controller' => ['Base','Common','Openssl','Token','Basic'],
        'validate'   => ['Common','User','Api'],
        'request'    => ['UserRequest']
    ],
    'api'     => [
        '__file__'   => ['common.php'],
        '__dir__'    => ['controller'],
        'controller' => ['Users','Wechat']
    ],
    'servers'     => [
        '__file__'   => ['common.php','Servers.php'],
        '__dir__'    => ['command','servers'],
        'command' => ['Users'],
        'servers' => ['Users','Wechat']
    ],
    // 其他更多的模块定义
];
