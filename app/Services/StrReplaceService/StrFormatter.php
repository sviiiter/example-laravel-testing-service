<?php

  namespace App\Services\StrReplaceService;


  class StrFormatter implements StrContract
  {
    public function format(string $s) {
        return strtr($s, ['привет' => 'пока']);
    }
  }
