<?php
namespace App;

class Zebra extends Animal {
// PROPERTIES
    private $noise = $shouts['zebra'];
// METHODS

    // PROTECTED
	protected function getNoise(): string {
        return $this->noise;
	}
}