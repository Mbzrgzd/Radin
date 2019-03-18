<?php 
	
	class DB {
		public $connection;
		public $host;
		public $username;
		public $password;
		public $db;
		public $dsn;
		public $stmt;
		
		public function __construct() {
			if ($this->connection == NULL && !is_resource($this->connection)) {
				$this->host = HOST;
				$this->username = USER;
				$this->password = PASS;
				$this->db = NAME;
				$this->dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db . ';';
				// Set option
				$options = array(
					PDO::ATTR_PERSISTENT => true,
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
					PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'utf8\''
				);
				try {
					$this->connection = new PDO($this->dsn, $this->username, $this->password, $options);
				} catch(PDOException $err) {
					$this->connection = NULL;
					echo '<pre>';
					print_r($err);
					echo '<pre>';
					die;
				}
			}
		}


		public function connect(){
			return($this->connection);
		}
	}

