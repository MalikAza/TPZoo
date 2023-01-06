<?php
namespace App\Animals;

class Zebra extends \App\Animal {
// PROPERTIES
    protected $noise = 'hiiiii';
// METHODS

    // PROTECTED
	protected function getNoise(): string {
        return $this->noise;
	}
}