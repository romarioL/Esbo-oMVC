<?php 

namespace lib;

class Model extends Config {

	protected $con;

	public function __construct() {

	try {
		$this->con = new PDO("mysql:host=" . self::srvMyHost . ";dbname=" . self::srvMyDbName, self::srvMyUser, self::srvMyPass);
		$this->con->exec('set names' . self::charset);
		$this->con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

	        }catch(PDOException $ex) {
                 die($ex->getMessage());
	        }
	}

	public function select($sql) {
         try {
         	$state = $this->con->prepare($sql);
         	$state->execute();
         	
         } catch(PDOException  $ex) {
         	die($ex->getMessage() . " " $sql);
         }

         $array = array();

         while($row = $state->fetchObject()) {
              $array[] = $row;
         } 

         return $array;

       }

	public function insert($obj, $table) {

		try {
			$sql = "INSERT INTO {$table} (".  implode( . "  " . array_keys($array),  $obj).") VALUES ();"
		}



	}

	public function update($obj, $condition, $table) {

	}

	public function delete($condition, $table) {

	}


	public function last($table) {

	}

	public function first($obj) {

	}

	public function setObject($obj, $values, $exits = true) {

	}

}