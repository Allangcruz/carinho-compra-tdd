<?php

namespace AllanGCruz\Carrinho\Tests\Entities;

use AllanGCruz\Carrinho\Entities\Product;
use AllanGCruz\Carrinho\Entities\ProductInterface;

class ProductTest extends \PHPUnit_Framework_TestCase {
	
	public function testProductType() {
		$product = new Product();
		$this->assertInstanceOf(ProductInterface::class, $product);
	}

	public function testProductNameValue() {
		$product = new Product();
		$product->setName("Product 1");

		$this->assertEquals("Product 1", $product->getName());
	}

	public function testDescriptionValue() {
		$product = new Product();
		$product->setDescription("Description 1");

		$this->assertEquals("Description 1", $product->getDescription());
	}

	public function testPriceValue() {
		$product = new Product();
		$product->setPrice(10);

		$this->assertEquals(10, $product->getPrice());
	}

	/**
	* @expectedException InvalidArgumentException
	*/
	public function testPriceValueWhenANotNumericGiven() {
		$product = new Product();
		$product->setPrice("abc");
	}
}
