<?php
namespace App\Animals;

class Parrot extends \App\Animal {
// PROPERTIES
    protected $noise = 'coco';
// METHODS

    // PROTECTED
	protected function getNoise(): string {
        return $this->noise;
	}
}