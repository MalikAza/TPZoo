<?php
namespace App;

trait canFly {
    public function enclos(): string {
        return "Aviary";
    }
}

// ABC CLASS
abstract class Animal {
// PROPERTIES
    // PUBLIC

    // PRIVATE
    private string $name;

// METHODS

    // CONSTRUCTOR
    public function __construct($name) {
        $this->name = $name;
    }

    // PUBLIC
    public function getName(): string {
        return $this->name;
    }

    public function noise(): string {
        return $this->getNoise();
    }

    // PROTECTED
    abstract protected function getNoise(): string;
}