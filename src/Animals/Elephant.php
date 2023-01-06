<?php
namespace App\Animals;

class Elephant extends \App\Animal {
// PROPERTIES
    protected $noise = 'toooooout';
// METHODS

    // PROTECTED
	protected function getNoise(): string {
        return $this->noise;
	}
}