<?php 

class database {
	public static function connect() {
		$db = new mysqli('127.0.0.1', 'anunde', 'anunde', 'tienda');
		$db->query("SET NAMES 'utf8'");
		return $db;
	}
} 