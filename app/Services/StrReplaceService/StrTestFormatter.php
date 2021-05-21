<?php


  namespace App\Services\StrReplaceService;


  use Illuminate\Pipeline\Pipeline;

  class StrTestFormatter implements StrContract
  {

    public function format(string $s) {
      $pipes = [
        FirstMiddleWare::class,
        SecondMiddleWare::class
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