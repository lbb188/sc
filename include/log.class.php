<?php

/*
 * 写日志文件
 * 如果日志文件大于1M，则备份日志文件
 */
class Log{
	
	const LOGFILE='curr.log';
//	const MXSIZE = 1024*1024;
	
	/*
	 * 把内容写入日志文件
	 */
	public static function write($content){
		$logfile = self::isback();
		self::writelog($content,$logfile);
	}
	
	private static function writelog($content,$filename){
		$fh = fopen($filename, 'ab');
		fwrite($fh, $content);
		
		clearstatcache($filename);
		fflush($fh);
		fclose($fh);
	}
	
	/*
	  * 判断文件是否需要备份，如果需要备份则返回，新文件名
	  */
	 private static function isback(){
		$logfile=ROOT.'/data/log/'.self::LOGFILE; 
		if(!file_exists($logfile)){
			touch($logfile);
			return $logfile;
		}
		
		$filesize=filesize($logfile);
//		echo $filesize,$logfile,'<br/>';
		if($filesize<=1024*1024){
			return $logfile;
		}	
		
		//备份文件
		if(self::back()){
			touch($logfile);
			return $logfile;
		}else{
			return $logfile;
		}
	 }
	
	/*
	 * 备份日志文件
	 * 把原来的日志文件重命名，后新建一个文件
	 */
	 private static function back(){
	 	
		$currfile = ROOT.'/data/log/'.self::LOGFILE;
		$backfile = ROOT.'/data/log/'.date('ymd').mt_rand(10000, 99999).'bak';
		return rename($currfile, $backfile);
	 }
	 

}
