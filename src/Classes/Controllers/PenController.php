<?php

namespace App\Controllers;

class PenController 
{ 
    protected $container;
    
    function __construct($container)
    {
        $this->container = $container;
    }
    
    function __invoke($request, $response, $args)
    {
        $pen = $this->container->get('penModel');
        
        $args['cowNoise'] = $pen->getCowNoise();
        $args['chickenNoise'] = $pen->getChickenNoise();
        
        // return $this->container->get('renderer')->render($response, 'show.phtml', $args);
        $this->test($request, $response, $args);
    }
    
    
    public function test($request, $response, $args)
    {

        $args['name'] = $this->container->get('penModel')->getTest();
        var_dump($args);
        return $this->container->get('renderer')->render($response, 'show.phtml', $args);
    }
    
}