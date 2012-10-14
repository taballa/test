<?php
if( !defined('IN') ) die('bad request');
include_once( AROOT . 'controller'.DS.'app.class.php' );

class effectController extends appController
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		render($data, 'web', 'effect');
	}

	function message()
	{
		render($data, 'web', 'effect');
	}
	
}