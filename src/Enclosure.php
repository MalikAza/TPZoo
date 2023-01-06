<?php
namespace App;

class Enclosure {
// PROPERTIES
    static $animals = array();

// METHODS
    public function addAnimal(Animal $animal): void {
        array_push($this->animals, $animal);
    }

    public function __toString(): string {
        $message = "";
        foreach ($this->animals as $animal) {
            $message .= "{$animal->getName()} : {$animal->noise()}\n";
        }

        return $message;
    }
}