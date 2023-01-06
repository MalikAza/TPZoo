<?php
namespace App\Animals;

class BubbleFish
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