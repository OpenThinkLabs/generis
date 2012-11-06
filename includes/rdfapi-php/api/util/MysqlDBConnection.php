<?php
class MysqlDBConnection extends DBConnection{
	
	protected function getExtraConfiguration(){
		return array();
	}
	
	protected function afterConnect(){
		$this->exec("SET SESSION SQL_MODE='ANSI_QUOTES'");
	}
	
	protected function getExtraDSN(){
		return ';charset=utf8';
	}
}
?>