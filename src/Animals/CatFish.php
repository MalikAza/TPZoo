<?php
namespace App\Animals;

class CatFish
    extends Fish
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