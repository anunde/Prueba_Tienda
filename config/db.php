<?php 

class database {
	public static function connect() {
		$db = new mysqli('127.0.0.1', 'prueba_tienda', 'prueba_tienda', 'prueba_tienda');
		$db->query("SET NAMES 'utf8'");
		return $db;
	}
} 