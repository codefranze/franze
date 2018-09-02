<?php

namespace franze\franze;

class User{
	
	private $name;
	private $gender;
	
	public function setName($name){
	    $this->name = $name;	
	}
	
	public function getName(){
		return $this->name;
	}
	
	public function setGender($gender){
		$this->gender = $gender;
	}
	
	public function getGender(){
		return $this->gender;
	}
	
	
	
}
