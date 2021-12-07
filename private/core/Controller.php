<?php 
class Controller {

    public function models($modelName) {
        require_once('private/models/'.$modelName.'.php');
        return new $modelName;
    }
    public function views($viewName, $data = []) {
        require_once('private/views/'.$viewName.'.php');
    }
}