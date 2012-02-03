<?php

function __autoload( $classname ) {
    $clbase = strtolower( $classname ) . '.php';
    $classfile = $_SERVER['DOCUMENT_ROOT'] . '/class/' . $clbase;
    if (file_exists( $classfile )) {
        require( $classfile );
    } else {
        throwError( 'missing class file' );
    }
}

function throwError( $m ) {
    echo $m;
    exit;
}

?>
