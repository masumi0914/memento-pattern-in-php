<?php

namespace App\Caretaker;

use App\Memento\Memento;

/**
 * Memetoの世代管理を行うクラス
 */
class Caretaker {
  private $mementoList;

  public function setSnapShot(Memento $memento) {
    $this->mementoList[] = $memento;
  }

  public function getSnapShot($index) {
    return $this->mementoList[$index];
  }
}