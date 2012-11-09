<?php
if( !defined('IN') ) die('bad request');
include_once( AROOT . 'controller'.DS.'app.class.php' );
include_once( AROOT . 'lib'.DS.'simple_html_dom.php' );

class newsController extends appController
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'http://www.douban.com/group/youth26/');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		$output = curl_exec($ch);
		curl_close($ch);

		if ($output === FALSE) {
			echo "cURL Error: " . curl_error($ch);
		}

		// $output = ob_get_contents();
		// ob_end_clean();

		$html = new simple_html_dom();
		$html = str_get_html($output);
		// $html = file_get_html('http://www.douban.com/');

		$result = $html->find('table.olt a[title]');
		foreach ($result as $key => $value) {
			$i = $data['onlie_events_title'][$key] = $value->title;
			$sql = "INSERT INTO `douban_online_event` (`id`, `title`) VALUES (NULL, '" . $i . "');";
			run_sql($sql);
			// echo db_errno();
			// echo db_error();
			// echo last_error();
		}

		$html->clear();
		unset($html);


		$data['title'] = $data['top_title'] = '新闻';

		render( $data );

	}

	function events()
	{
		$data['top_title'] = '新闻列表';
		$sql = "SELECT * FROM `douban_online_event` ORDER BY `id` DESC LIMIT 0, 30 ";
		$data['events'] = $events = get_data($sql);

		render($data);
	}

	function tbs(){
		$TBS = new clsTinyButStrong;
		$TBS->loadTemplate('template.html');

		$message = 'hello TBS';
		$TBS->Show();
	}
	
	
}