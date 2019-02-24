<?php 

class Sql extends PDO
{

	private $conn;

	public function __construct()
	{

		//conexão com MySQL
		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "roberson", "3120boR#@!");

		//conexão com SQL SERVER
		//$this->conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "", "");
	}

	private function setParams($statment, $parametrs = array())
	{

		foreach ($parametrs as $key => $value)
		{
			
			$statment->bindParam($key, $value);
		}
	}

	private function setParam($statment, $key, $value)
	{

		$this->setParam($key, $value);

	}

	public function query($rawQuery, $params = array())
	{

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;

	}

	public function select($rawQuery, $params = array()):array
	{

		$stmt = $this->query($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}



 ?>