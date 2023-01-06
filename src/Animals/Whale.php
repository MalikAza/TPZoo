<?php
namespace App\Animals;

class Whale extends \App\Animal {
// PROPERTIES
    // PROTECTED
    use \App\isWhale;
// METHODS

    // PROTECTED
	protected function getNoise(): string {
        return $this->noise;
	}
}