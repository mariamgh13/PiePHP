<?php

namespace Core;

use \PDO;

class Database
{
	protected $bdd;
	
	function __construct($db, $user, $pass, $server = 'localhost'){
		
		try{
			$this->bdd = new PDO("mysql:host=$server;dbname=$db;charset=UTF8", $user, $pass);
		}
		catch (\Exception $e)
		{
			print_r('erreur');
            die('Erreur : ' . $e->getMessage());
        }
	}
	public function query($query){
		$this->state = $this->bdd->prepare($query);
	}
	public function execute(){
		$this->state->execute();	
	}
	public function bindParam($param, $value){
		$this->state->bindParam($param, $value);
	}
	// public function fetch(){
	// 	$this->execute();
	// 	$this->state->fetch)
	// }
}





