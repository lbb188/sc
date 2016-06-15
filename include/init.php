<?php

/*
file init.php
作用：框架初始化
*/

//<!--//过滤参数，用递归发式过滤$_GET,$_POST,$_COOKIE-->

//初始化当前的绝对路径
if(!defined('ROOT')){
	define('ROOT',str_replace("\\","/", dirname(dirname(__FILE__))).'/');
}

//定义错误级别常量
if(!defined('DEBUG')){
	define('DEBUG', true);
}	

require(ROOT.'/include/db.class.php');
require(ROOT.'/include/config.class.php');
require(ROOT.'/include/log.class.php');


//设置错误级别
//if(DEBUG){
//	error_reporting(E_ALL);	
//	echo "e_all",'<br />';
//}else{
//	error_reporting(0);
//	echo "no e",'<br />';
//}

Log::write('记录日志');
