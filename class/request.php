<?php

class Request { 

    function __construct() {
        $this->uarg = array();
        if (isset( $_SERVER['PATH_INFO'] )) {
            $this->uarg = explode( '/', $_SERVER['PATH_INFO'] );
            array_shift( $this->uarg );
        }
        $this->restmeth = $_SERVER['REQUEST_METHOD'];
        if ($this->restmeth == 'GET') {
            $this->param = $_GET;
        }
    }

    function accomodate() {
    }

}

?>
