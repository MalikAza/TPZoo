<?php
namespace App;

class Dove extends Animal {
// PROPERTIES
    private $noise = $shouts['dove'];
// METHODS

    // PROTECTED
	protected function getNoise(): string {
        return $this->noise;
	}
}