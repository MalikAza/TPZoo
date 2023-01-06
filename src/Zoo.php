<?php
namespace App;

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
    public function getAquarium(): Enclosure {
        return $this::$aquarium;
    }

    public function getAviary(): Enclosure {
        return $this::$aviary;
    }

    public function getFence(): Enclosure {
        return $this::$fence;
    }

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