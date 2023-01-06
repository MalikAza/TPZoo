<?php
namespace App\Animals;

class Fish
    extends \App\Animal
    implements \App\CanSwim {
// PROPERTIES
    // PROTECTED
    use \App\isFish;
// METHODS

    // PROTECTED
	protected function getNoise(): string {
        return $this->noise;
	}
}