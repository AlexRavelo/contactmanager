<?php
    session_start();
    // Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json;charset=UTF-8');
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");

    session_unset(); 
    session_destroy();
    return;
?>