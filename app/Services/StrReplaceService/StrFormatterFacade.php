<?php


  namespace App\Services\StrReplaceService;

  use Illuminate\Support\Facades\Facade;

  class StrFormatterFacade extends Facade
  {

    protected static function getFacadeAccessor() {
      return StrContract::class;
    }

  }