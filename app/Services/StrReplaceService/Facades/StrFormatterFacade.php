<?php


  namespace Waste\Services\StrReplaceService\Facades;

  use Illuminate\Support\Facades\Facade;

  class StrFormatterFacade extends Facade
  {

    protected static function getFacadeAccessor() {
      return StrContract::class;
    }

  }