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
        $sql = "SELECT * FROM `douban_online_group` ORDER BY `id` DESC LIMIT 20";
        $data['event'] = get_data($sql);
        render( $data, null, 'default');
        // var_dump(g('sharp'), g('layout'));
    }
    
}