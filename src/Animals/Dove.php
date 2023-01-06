<?php
namespace App\Animals;

class Dove extends \App\Animal {
// PROPERTIES
    protected $noise = 'Rou Rouuu';
// METHODS

    // PROTECTED
	protected function getNoise(): string {
        return $this->noise;
	}
}