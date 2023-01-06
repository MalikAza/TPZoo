<?php
namespace App\Animals;

class Parrot extends \App\Animal {
// PROPERTIES
    // PROTECTED
    use \App\isParrot;
// METHODS
    // PUBLIC
    use \App\canFly;
    // PROTECTED
	protected function getNoise(): string {
        return $this->noise;
	}
}