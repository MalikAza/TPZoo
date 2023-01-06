<?php
namespace App\Animals;

class Dove extends \App\Animal {
// PROPERTIES
    protected $noise = 'Rou Rouuu';
// METHODS
    // PUBLIC
    use \App\canFly;
    // PROTECTED
	protected function getNoise(): string {
        return $this->noise;
	}
}