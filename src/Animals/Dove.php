<?php
namespace App\Animals;

class Dove extends \App\Animal {
// PROPERTIES
    // PROTECTED
    use \App\isDove;
// METHODS
    // PUBLIC
    use \App\canFly;
    // PROTECTED
	protected function getNoise(): string {
        return $this->noise;
	}
}