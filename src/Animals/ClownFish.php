<?php
namespace App;

class ClownFish extends Animal {
// PROPERTIES
    private $noise = $shouts['fish'];
// METHODS

    // PROTECTED
	protected function getNoise(): string {
        return $this->noise;
	}
}