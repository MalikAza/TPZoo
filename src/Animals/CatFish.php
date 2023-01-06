<?php
namespace App\Animals;

class CatFish extends Fish {
// PROPERTIES
    // PROTECTED
    use \App\isFish;
// METHODS

    // PROTECTED
	protected function getNoise(): string {
        return $this->noise;
	}
}