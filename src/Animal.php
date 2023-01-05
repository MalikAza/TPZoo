<?
abstract class Animal {
// PROPERTIES

    // PRIVATE
    private $name;

// METHODS

    // CONSTRUCTOR
    public function __construct($name) {
        $this->name = $name;
    }

    // PUBLIC
    public function getName() {
        return $this->name;
    }
}