<?php
namespace App\Animals;

class Fish extends \App\Animal {
// PROPERTIES
    protected $noise = 'bloubloublou';
// METHODS

    // PROTECTED
	protected function getNoise(): string {
        return $this->noise;
	}
}