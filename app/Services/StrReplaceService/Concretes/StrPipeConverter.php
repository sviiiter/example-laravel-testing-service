<?php


  namespace Waste\Services\StrReplaceService\Concretes;


  use Illuminate\Pipeline\Pipeline;
  use Waste\Services\StrReplaceService\Contracts\StrContract;
  use Waste\Services\StrReplaceService\Pipewares\HyphenWare;
  use Waste\Services\StrReplaceService\Pipewares\SuffixWare;

  class StrPipeConverter implements StrContract
  {

    public function format(string $s) {
      $pipes = [ // COR classes
        HyphenWare::class,
        SuffixWare::class
      ];

      $finalData = app(Pipeline::class)
        ->send($s)
        ->through($pipes)
        ->then(function ($result) {
          return $result;
        });

      return $finalData;
    }

  }