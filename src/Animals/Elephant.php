<?php
namespace App\Animals;

class Elephant extends \App\Animal {
// PROPERTIES
    // PROTECTED
    use \App\isElephant;
// METHODS

    // PROTECTED
	protected function getNoise(): string {
        return $this->noise;
	}
}