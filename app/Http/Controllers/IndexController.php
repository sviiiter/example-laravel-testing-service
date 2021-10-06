<?php

  namespace Waste\Http\Controllers;


  use Illuminate\Http\Request;
  use Waste\Services\StrReplaceService\Concretes\StrPipeConverter;
  use Waste\Services\StrReplaceService\Contracts\StrContract;
  use Waste\Services\StrReplaceService\Facades\StrFormatterFacade;


  class IndexController extends Controller
  {

    public function usingInstance(StrContract $service, Request $r) {
      return $service->format('привет тебе');
    }


    public function usingFacade() {
      return StrFormatterFacade::format('привет тебе');
    }

  }
