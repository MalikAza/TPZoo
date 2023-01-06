<?php
namespace App\Animals;

class ClownFish extends Fish {
// PROPERTIES
    // PROTECTED
    use \App\isFish;
// METHODS

    // PROTECTED
	protected function getNoise(): string {
        return $this->noise;
	}
}