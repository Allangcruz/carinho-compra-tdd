<?php

namespace AllanGCruz\Carrinho\Tests\Entities;

use AllanGCruz\Carrinho\Entities\Product;
use AllanGCruz\Carrinho\Entities\ProductInterface;

class ProductTest extends \PHPUnit_Framework_TestCase {
	
	public function testProductType() {
		$product = new Product();
		$this->assertInstanceOf(ProductInterface::class, $product);
	}
}
