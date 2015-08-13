<?php
class DB{
	private static $db ;

	public static function  init($dbtype,$config){
		self::$db = new $dbtype;
		self::$db->connect($config);
	}

	public static function query($sql){
		self::$db->query($sql);
	}

	public static function findAll($sql){
		$res = self::$db->query($sql);
		return self::$db->findAll($res);
	}

	public static function findOne($sql){
		$res = self::$db->query($sql);
		return self::$db->findOne($res);
	}

	public static function findResult($result,$row =0,$cloum= 0){
		return self::$db->findResult($result,$row,$cloum);
	}

	public static function insert($table,$arr){
		self::$db->insert($table,$arr);
	}

	public static function update($table,$arr,$where){
		self::$db->update($table,$arr,$where);
	}

	public static function del($table,$where){
		self::$db->del($table,$where);
	}

}
?>