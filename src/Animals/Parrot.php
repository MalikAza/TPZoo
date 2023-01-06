<?php
namespace App\Animals;

class Parrot
    extends \App\Animal
    implements 
        \App\CanFly,
        \App\CanWalk {
// PROPERTIES
    // PROTECTED
    use \App\isParrot;
// METHODS
    // PUBLIC

    // PROTECTED
	protected function getNoise(): string {
        return $this->noise;
	}
}