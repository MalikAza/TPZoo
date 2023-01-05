<?php
namespace App;

class CatFish extends Animal {
// PROPERTIES
    private $noise = $shouts['fish'];
// METHODS

    // PROTECTED
	protected function getNoise(): string {
        return $this->noise;
	}
}