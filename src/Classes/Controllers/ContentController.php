<?php

namespace App\Controllers;

class ContentController
{
    protected $container;
    
    // Passes the DIC to get the model.
    function __construct($container)
    {
        $this->container = $container;
    }
    
    function __invoke($request, $response, $args)
    {
        
        $datas = $this->container->get('contentModel');
       
        
        //$args['content'] = $datas->testContent();
        
        $db = $this->container->get('db');
        
        $args['content'] = $datas->getContent($db);
        
        
        // get the template renderer and pass response and datas to the template file.
        return $this->container->get('renderer')->render($response, 'content.php', $args);
    }
    
    
    /* public function getContent()
     {
     
     $db = $this->container->get('db');
     
     $datas = $this->container->get('contentModel');
     
     
     // get the template renderer and pass response and datas to the template file.
     return $this->container->get('renderer')->render($response, 'show.phtml', ["datas" => $datas]);
     } */
    
    
}