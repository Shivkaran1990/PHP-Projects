<?php

include './bin/app.php';

class Router
{

    public function __construct($urlpathParts, $config)
    {
        $this->App = new App($config);
        
        switch ($urlpathParts[0]) {
            case "home":
                $this->App->startApp($urlpathParts);
                break;
            
            case "api":
                $this->App->startApp($urlpathParts);
                break;
            
            default :
                $this->App->startApp($urlpathParts);
                break;
        }
    }
}


?>