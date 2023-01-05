<?php
namespace App;

class Whale extends Animal {
// PROPERTIES
    private $noise = $shouts['whale'];
// METHODS

    // PROTECTED
	protected function getNoise(): string {
        return $this->noise;
	}
}