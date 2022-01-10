<?php

namespace App\Originator;

use App\Memento\Memento;

/**
 * Memetoクラスを使って状態の保持をする
 */
class Originator {

  private $list;

  public function addList($music) {
    $this->list[] = $music;
  }

  public function createMemento() {
    return new Memento($this->list);
  }

  public function restoreMemento(Memento $memento) {
    $this->list = $memento->getList();
  }

  public function playList() {
    foreach($this->list as $music) {
      echo $music . '</br>';
    }
  }
}