<?php

require('./include/init.php');

//$conf=conf::getIns();
////print_r($c);
//echo $conf->host,'<br/>';
//echo $conf->charset,'<br/>';
//$conf->charset='gbk';
//echo $conf->charset,'<br/>';
//$conf->host='a';
//echo $conf->host,'<br/>';

//Log::write('记录日志');

class mysq{
	public function query($sql){
		Log::write($sql);
	}
}

$mysql= new mysq();

for($i=0;$i<5000;$i++){
	$sql="sdfsdfsdfsdfsadfsdfsdfsdfsdfssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss
	sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss
	ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss
	sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss
	ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss
	sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss
	ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss";
	$mysql->query($sql);
}

//Log::write('记录日志');