<?php namespace myapp\Classes\DB;

class DB
{
	private $_pdo,
			$_query,
			$_error = false,
			$_results,
			$_count = 0,
	        $_instance = null;
	         
	public function __construct(){
		try{
			$this->_pdo = new \PDO('mysql:host=localhost;dbname=DB','USUARIO','PASSWORD');
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	
	public function getInstance(){
		if( !isset($this->_instance) ){
			$this->_instance = new DB();
		}
		return $this->_instance;
	}
	
	public function consultar($sql, $params = array()){
		if( $this->_query = $this->_pdo->prepare($sql) ){
			$x = 1;
			if(count($params)){
				foreach($params as $param){
					$this->_query->bindValue($x,$param);
					$x++;
				}
			}
			if($this->_query->execute()){
				$this->_results = $this->_query->fetchAll(\PDO::FETCH_OBJ);
				$this->_count = $this->_query->rowCount();
			}else{
				var_dump($this->_query->errorInfo());
				$this->_error = true;
			}
		}
		return $this;
	}

	public function buscar($sql, $params = array()){
		if( $this->_query = $this->_pdo->prepare($sql) ){
			$x = 1;
			if(count($params)){
				foreach($params as $param){
					$this->_query->bindValue($x,"%$param%");
					$x++;
				}
			}
			if($this->_query->execute()){
				$this->_results = $this->_query->fetchAll(\PDO::FETCH_OBJ);
				$this->_count = $this->_query->rowCount();
			}else{
				var_dump($this->_query->errorInfo());
				$this->_error = true;
			}
		}
		return $this;
	}
	
	public function results(){
		return $this->_results;
	}
	
	public function firsts(){
		return $this->_results[0];
	}
	
	public function count(){
		return $this->_count;
	}
	
	public function get($table){
		return $this->consultar("SELECT * FROM {$table}",array());
	}
	
	public function error(){
		return $this->_error;
	}
}//fin de la clase
