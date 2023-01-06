<?php
namespace App\Animals;

class Zebra
    extends \App\Animal
    implements \App\CanWalk {
// PROPERTIES
    // PROTECTED
    use \App\isZebra;
// METHODS

    // PROTECTED
	protected function getNoise(): string {
        return $this->noise;
	}
}