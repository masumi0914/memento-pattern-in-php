<?php

require_once 'vendor/autoload.php';

use App\Caretaker\Caretaker;
use App\Originator\Originator;

$caretaker = new Caretaker();
$originator = new Originator();

$originator->addList('music1');
$originator->addList('music2');
$originator->addList('music3');

echo 'play music';
echo '</br>';
echo 'snap shot';
echo '</br>';
echo '</br>';

$originator->playList();
$caretaker->setSnapShot($originator->createMemento());

$originator->addList('music4');
$originator->addList('music6');

echo '</br>';
echo 'play music';
echo '</br>';

$originator->playList();
$originator->restoreMemento($caretaker->getSnapShot(0));

echo '</br>';
echo 'play music';
echo '</br>';
echo 'restore';
echo '</br>';

$originator->playList();

$originator->addList('music4');
$originator->addList('music5');
$originator->addList('music6');

echo '</br>';
echo 'play music';
echo '</br>';

$originator->playList();
$caretaker->setSnapShot($originator->createMemento());