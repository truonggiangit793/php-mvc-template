<?php
class App {
    protected $controller = 'Home';
    protected $action = 'Default';
    protected $params = [];
    
    function __construct() {
        
        if (!empty($this->ReturnURL())) {
            $arr = $this->ReturnURL();
            if ( file_exists('private/controllers/'.$arr[0].'.php') ) {
                $this->controller = $arr[0];
            };
            unset($arr[0]);
        };

        require_once 'private/controllers/'.$this->controller.'.php';
        $this->controller = new $this->controller;

        if (isset($arr[1])) {
            if ( method_exists($this->controller, $arr[1]) ) {
                $this->action = $arr[1];
            }
            unset($arr[1]);
        };

        if (!empty($arr)) {
            $this->params = array_values($arr);
        } else {
            $this->params = [];
        }
        
        call_user_func_array([$this->controller, $this->action], $this->params);
        
    }

    function ReturnURL() {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(trim($_GET['url'], '/')));
        };
    }

}
