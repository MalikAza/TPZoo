<?php
namespace App;
require __DIR__ . '/vendor/autoload.php';

$animals = [
    new Animals\Fish('Fish1'),
    new Animals\Fish('Fish2'),
    new Animals\Fish('Fish3'),
    new Animals\Fish('Fish4'),
    new Animals\Fish('Fish5'),
    new Animals\BubbleFish('BubbleFish1'),
    new Animals\BubbleFish('BubbleFish2'),
    new Animals\BubbleFish('BubbleFish3'),
    new Animals\CatFish('CatFish1'),
    new Animals\CatFish('CatFish2'),
    new Animals\ClownFish('ClownFish1'),
    new Animals\Elephant('Elephant1'),
    new Animals\Elephant('Elephant2'),
    new Animals\Zebra('Zebra1'),
    new Animals\Parrot('Parrot1'),
    new Animals\Parrot('Parrot2'),
    new Animals\Parrot('Parrot3'),
    new Animals\Parrot('Parrot4'),
    new Animals\Parrot('Parrot5'),
    new Animals\Parrot('Parrot6'),
    new Animals\Parrot('Parrot7'),
    new Animals\Parrot('Parrot8'),
    new Animals\Parrot('Parrot9'),
    new Animals\Parrot('Parrot10'),
    new Animals\Dove('Dove1'),
    new Animals\Dove('Dove2')
];

$zoo = new Zoo;

foreach($animals as $animal) {
    $zoo->addAnimal($animal);
}

$zoo->visitZoo();