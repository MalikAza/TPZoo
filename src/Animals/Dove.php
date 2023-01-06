<?php
namespace App\Animals;

class Dove
    extends \App\Animal
    implements
        \App\CanFly,
        \App\CanWalk {
// PROPERTIES
    // PROTECTED
    use \App\isDove;
// METHODS
    // PUBLIC

    // PROTECTED
	protected function getNoise(): string {
        return $this->noise;
	}
}