<?php
	class Conexion {
		private $Host ="";
		private $User ="";
		private $Password ="";
		private $Database ="";
		private $Connection;
	
		public function __construct(){
			$this-> Host = "sakila.mysql.database.azure.com";
            $this-> User = "ahc2806@sakila";
            $this-> Password = "CiA28069";
			$this-> Database = "sakila";		
		}

		public function OpenConnection() {
			try
			{
				$this-> Connection = new PDO("mysql:host={$this->Host}; dbname={$this->Database}" , $this->User , $this->Password);
				$this-> Connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch(PDOException $e){
				$this-> Connection=false;
			}
		}

		public function CloseConnection(){
			mysql_close($this-> Connection);
		}

		public function GetConnection(){
			return $this-> Connection;
		}
	}
	/*$Obj = new Conexion();
	$Obj-> OpenConnection();
	if($Obj-> GetConnection()){
		echo "Connection ok";
	}
	else{
		echo "Connection false";
	}*/
 ?>