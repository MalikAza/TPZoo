<?php
namespace App;

/* The Zoo class is a container for three Enclosure objects, each of which is a container for Animal
objects */
class Zoo {
// PROPERTIES
    private static Enclosure $aquarium;
    private static Enclosure $aviary;
    private static Enclosure $fence;
// METHODS
    // CONSTRUCTOR
    public function __construct() {
        $this::$aquarium = new Enclosure;
        $this::$aviary = new Enclosure;
        $this::$fence = new Enclosure;
    }
    // PUBLIC
        // GETTERS
    public function getAquarium(): Enclosure {
        return $this::$aquarium;
    }

    public function getAviary(): Enclosure {
        return $this::$aviary;
    }

    public function getFence(): Enclosure {
        return $this::$fence;
    }

        // MISC

    /**
     * > If the animal can fly, add it to the aviary. If it can walk, add it to the fence. If it can swim,
     * add it to the aquarium
     * 
     * @param Animal animal The animal to be added to the zoo.
     */
    public function addAnimal(Animal $animal): void {
        switch(array_values(class_implements($animal))[0]) {

            case 'App\CanFly':
                $this::$aviary->addAnimal($animal);
                break;

            case 'App\CanWalk':
                $this::$fence->addAnimal($animal);
                break;
                
            case 'App\CanSwim':
                $this::$aquarium->addAnimal($animal);
                break;
        }
    }

    /**
     * It checks if there are any animals in the aviary, fence, or aquarium, and if there are, it
     * prints out the aviary, fence, or aquarium
     */
    public function visitZoo(): void {
        $message = "";
        // aviary
        if (count($this::$aviary->animals) != 0) {
            $message .= "===Aviary:===\n{$this::$aviary}";
        }
        // fence
        if (count($this::$fence->animals) != 0) {
            // Prevent str formating when count aviary == 0
            $message == "" ? $message .= "===Fence:===\n{$this::$fence}" : $message .= "\n===Fence:===\n{$this::$fence}";
        }
        // aquarium
        if (count($this::$aquarium->animals) != 0) {
            // Prevent str formating when count aviary and/or count fence == 0
            $message == "" ? $message .= "===Aquarium:===\n{$this::$aquarium}" : $message .= "\n===Aquarium:===\n{$this::$aquarium}";
        }

        echo $message;
    }
}