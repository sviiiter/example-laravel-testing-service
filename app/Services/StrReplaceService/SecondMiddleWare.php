<?php

  namespace App\Services\StrReplaceService;


  class SecondMiddleWare
  {

    public function handle(string $content, \Closure $next) {
      return $content . 'алоха';
    }

  }
