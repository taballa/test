<?php
if( !defined('IN') ) die('bad request');
include_once( AROOT . 'controller'.DS.'app.class.php' );

class defaultController extends appController
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$data['title'] = $data['top_title'] = 'default class index function page';
		render( $data );
	}

	function effect()
	{
		render($data, 'web', 'default');
	}

	function message()
	{
		render($data, 'web', 'default');
	}

	function datetime()
	{
		render($data, 'web', 'default');
	}
}
