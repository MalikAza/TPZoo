<?php
namespace App\Animals;

class Parrot
    extends \App\Animal
    implements \App\canFly {
// PROPERTIES
    // PROTECTED
    use \App\isParrot;
// METHODS
    // PUBLIC
    public function enclosure(): string {
        return 'Aviary';
    }
    // PROTECTED
	protected function getNoise(): string {
        return $this->noise;
	}
}