<?php
namespace App;

class Elephant extends Animal {
// PROPERTIES
    private $noise = $shouts['elephant'];
// METHODS

    // PROTECTED
	protected function getNoise(): string {
        return $this->noise;
	}
}