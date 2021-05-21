<?php

  namespace App\Services\StrReplaceService;


  class FirstMiddleWare
  {

    public function handle(string $content, \Closure $next) {
      return $next($content . '-');
    }

  }
