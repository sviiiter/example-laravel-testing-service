<?php

  namespace Waste\Services\StrReplaceService;

  use Illuminate\Support\ServiceProvider;
  use Waste\Services\StrReplaceService\Concretes\StrConverter;
  use Waste\Services\StrReplaceService\Concretes\StrPipeConverter;
  use Waste\Services\StrReplaceService\Contracts\StrContract;

  class StrFormatterServiceProvider extends ServiceProvider
  {

    public function register() {
      $this->app->instance(StrContract::class, new StrConverter('see you down the road'));
//      $this->app->bind(StrContract::class, StrPipeConverter::class);
    }

  }
