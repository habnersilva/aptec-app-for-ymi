<?php

namespace Framework\Aquarium\Http;

abstract class Controller {

    protected $controller;
    protected $request;
    protected $response;
    protected $service;
    protected $app;

    public function __loadVars( $request, $response, $app )
    {

        $this->request = $request;
        $this->response = $response;
        $this->service = new View( $request, $response );
        $this->app = $app;

    }
  

}
?>