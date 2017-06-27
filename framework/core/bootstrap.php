<?php
class HandyEngine {
    protected 
        $setting,
        $uri,
        $app;
    function __construct($setting) {
        $this->setting = $setting;
        $this->url = urldecode(preg_replace('/\?.*/iu','',$_SERVER['REQUEST_URI']));
    }
    
    function process_path(){
        foreach ($this->setting['apps'] as $iterable_app){
            
        }
    }
}

