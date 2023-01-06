<?php
namespace App;

/* > The Enclosure class is a container for Animal objects */
class Enclosure {
// PROPERTIES
    public array $animals = [];

// METHODS

    /**
     * > This function takes an Animal object as an argument and adds it to the animals array
     * 
     * @param Animal animal The animal to add to the shelter.
     */
    public function addAnimal(Animal $animal): void {
        array_push($this->animals, $animal);
    }

    /**
     * The __toString() method is called when the object is used in a string context
     * 
     * @return string A string of the animals and their noises.
     */
    public function __toString(): string {
        $message = "";
        foreach ($this->animals as $animal) {
            $message .= "{$animal->getName()} : {$animal->noise()}\n";
        }

        return $message;
    }
}