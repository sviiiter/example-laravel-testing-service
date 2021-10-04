<?php

  namespace Waste\Services\StrReplaceService\Pipewares;


  class HyphenWare
  {

    public function handle(string $content, \Closure $next) {
      return $next($content . '-');
    }

  }
