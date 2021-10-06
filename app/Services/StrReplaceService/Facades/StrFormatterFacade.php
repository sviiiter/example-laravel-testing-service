<?php


  namespace Waste\Services\StrReplaceService\Facades;

  use Illuminate\Support\Facades\Facade;
  use Waste\Services\StrReplaceService\Contracts\StrContract;

  class StrFormatterFacade extends Facade
  {

    protected static function getFacadeAccessor() {
      return StrContract::class;
    }

  }