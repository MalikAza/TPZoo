<?
abstract class Animal {
// PROPERTIES

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