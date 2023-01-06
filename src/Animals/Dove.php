<?php
namespace App\Animals;

class Dove
    extends \App\Animal
    implements \App\canFly {
// PROPERTIES
    // PROTECTED
    use \App\isDove;
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