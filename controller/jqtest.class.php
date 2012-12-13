<?php
if( !defined('IN') ) die('bad request');
include_once( AROOT . 'controller'.DS.'app.class.php' );

class jqtestController extends appController
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

    function getevents()
    {
        $sql = "SELECT * FROM `douban_online_group` ORDER BY `id` DESC LIMIT 20";
        $title = array();
        $events = get_data($sql);
        if (!empty($events)) {
            foreach ($events as $i=>$value) {
                array_push($title, $events[$i]['title']);
            }
        };
        echo json_encode( (object)$title );
    }

    function photos()
    {
        render( $data, null, 'default' );
    }
    
}