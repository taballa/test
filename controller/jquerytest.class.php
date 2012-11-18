<?php
if( !defined('IN') ) die('bad request');
include_once( AROOT . 'controller'.DS.'app.class.php' );

class jquerytestController extends appController
{
    function __construct()
    {
        parent::__construct();
    }
    
    function index()
    {
        render($data, 'web', 'default');
    }
    
}