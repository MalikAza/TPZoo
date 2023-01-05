<?php
namespace App;
require __DIR__ . '/vendor/autoload.php';

$animals = [
    new Fish('Fish1'),
    new Fish('Fish2'),
    new Fish('Fish3'),
    new Fish('Fish4'),
    new Fish('Fish5'),
    new BubbleFish('BubbleFish1'),
    new BubbleFish('BubbleFish2'),
    new BubbleFish('BubbleFish3'),
    new CatFish('CatFish1'),
    new CatFish('CatFish2'),
    new ClownFish('ClownFish1'),
    new Elephant('Elephant1'),
    new Elephant('Elephant2'),
    new Zebra('Zebra1'),
    new Parrot('Parrot1'),
    new Parrot('Parrot2'),
    new Parrot('Parrot3'),
    new Parrot('Parrot4'),
    new Parrot('Parrot5'),
    new Parrot('Parrot6'),
    new Parrot('Parrot7'),
    new Parrot('Parrot8'),
    new Parrot('Parrot9'),
    new Parrot('Parrot10'),
    new Dove('Dove1'),
    new Dove('Dove2')
];

foreach($animals as $animal) {
    echo $animal->name . "\n";
}