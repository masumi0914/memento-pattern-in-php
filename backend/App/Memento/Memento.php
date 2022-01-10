<?php

namespace App\Memento;

/**
 * Origintorの状態を保持するクラス
 */
class Memento {

  private $list;

  public function __construct($list) {
    $this->list = $list;    
  }

  public function getList() {
    return $this->list;
  }
}