<?php

  namespace App\Services\StrReplaceService;

  use Illuminate\Support\ServiceProvider;

  class StrFormatterServiceProvider extends ServiceProvider
  {

    public function register() {
      /* @var ServiceProvider $this */
//      $this->app->bind(StrContract::class, StrFormatter::class);
      $this->app->bind(StrContract::class, StrTestFormatter::class);
    }

  }
