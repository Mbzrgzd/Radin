<?php 
	/**
	 * 
	 */
	class ReadPro extends DB
	{
		
		function Read(){
			$sql = $this->connection->prepare(" SELECT * FROM 'products' ");
			$sql->execute();
			return $sql;
		}
	}
 ?>