<?php

class sql {

	private $servername = "mysql:host=localhost;dbname=media";
	private $username = "root";
	private $password = "3393083";
	private $conn;
	function __construct()
	{
		try {

			$this->conn = new PDO($this->servername, $this->username, $this->password);
    // set the PDO error mode to exception
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		}
		catch(PDOException $e)
		{
			echo "Connection failed: " . $e->getMessage();
		}
	}

	public function select(String $query, $params){
		$stmt = $this->conn->prepare($query);
		$stmt->execute($params);
		return $stmt->fetchAll();
	}

	public function insert(String $query, $params){
			$stmt = $this->conn->prepare($query);
			$stmt->execute($params);
			$stmt = null;
		//	return echo "string";
	}


}
