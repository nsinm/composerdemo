<?php
/*
 * @Author: your name
 * @Date: 2020-09-30 14:21:50
 * @LastEditTime: 2020-09-30 14:22:57
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \composerdemo\public\index.php
 */
use Demo\App\Base\User;

//引入自动载入处理
require '../vendor/autoload.php';

echo User::show();
echo app();