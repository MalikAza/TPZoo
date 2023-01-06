<?php
namespace App\Animals;

class Whale extends \App\Animal {
// PROPERTIES
    private $noise = 'splash';
// METHODS

    // PROTECTED
	protected function getNoise(): string {
        return $this->noise;
	}
}