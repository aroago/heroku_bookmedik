<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		
		
		$this->user="root";
		$this->pass="g8wIqJVLjr";
		$this->host="node32179-env-3637644.es-1.axarnet.cloud";
		$this->ddbb="bdBookMedia";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
