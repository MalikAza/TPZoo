<?php
namespace App;

class Parrot extends Animal {
// PROPERTIES
    private $noise = $shouts['parrot'];
// METHODS

    // PROTECTED
	protected function getNoise(): string {
        return $this->noise;
	}
}