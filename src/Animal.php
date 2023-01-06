<?php
namespace App;

// TRAITS
    // NOISES
trait isFish {
    protected $noise = 'bloubloublou';
}

trait isElephant {
    protected $noise = 'toooooout';
}

trait isZebra {
    protected $noise = 'hiiiii';
}

trait isWhale {
    protected $noise = 'splash';
}

trait isParrot {
    protected $noise = 'coco';
}

trait isDove {
    protected $noise = 'Rou Rouuu';
}

    // ENCLOSURE
interface CanFly{};
interface CanWalk{};
interface CanSwim{};

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