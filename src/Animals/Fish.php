<?php
namespace App;

class Fish extends Animal {
// PROPERTIES
    private $noise = $shouts['fish'];
// METHODS

    // PROTECTED
	protected function getNoise(): string {
        return $this->noise;
	}
}