<?php

  namespace Waste\Services\StrReplaceService\Concretes;


  use Waste\Services\StrReplaceService\Contracts\StrContract;

  class StrConverter implements StrContract
  {

    private $_eos;

    public function __construct($end_of_string) {
      $this->_eos = $end_of_string;
    }


    public function format(string $s) {
      return strtr($s, ['привет' => 'пока']) . ' ' . $this->_eos;
    }

  }
