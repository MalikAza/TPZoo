<?php
namespace App\Animals;

class Whale
    extends \App\Animal
    implements \App\CanSwim {
// PROPERTIES
    // PROTECTED
    use \App\isWhale;
// METHODS

    // PROTECTED
	protected function getNoise(): string {
        return $this->noise;
	}
}