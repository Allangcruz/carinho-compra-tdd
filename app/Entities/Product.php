<?php

namespace AllanGCruz\Carrinho\Entities;

use Doctrine\Instantiator\Exception\InvalidArgumentException;

class Product implements ProductInterface {
	protected $name;
	protected $description;
	protected $price;

	
	public function setName($name) {
		$this->name = $name;
	}	

	public function getName() {
		return $this->name;
	}
	
	public function setDescription($description) {
		$this->description = $description;
	}

	public function getDescription() {
		return $this->description;
	}
	
	public function setPrice($price) {

		if(!is_numeric($price)) {
			throw new InvalidArgumentException;
		}

		$this->price = $price;
	}

	public function getPrice() {
		return $this->price;
	}

}
