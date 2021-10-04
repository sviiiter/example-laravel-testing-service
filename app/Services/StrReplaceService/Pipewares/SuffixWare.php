<?php

  namespace Waste\Services\StrReplaceService\Pipewares;


  class SuffixWare
  {

    public function handle(string $content, \Closure $next) {
      return $content . 'алоха';
    }

  }
