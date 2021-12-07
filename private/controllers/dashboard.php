<?php
class dashboard extends Controller{

    function Default () {
        $this->views('login');
    }

    function login () {
        $this->views('login');
    }

    function register () {
        $this->views('register');
    }

    function forgot () {
        $this->views('forgot');
    }
    
}