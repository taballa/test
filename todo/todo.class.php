<?php

class ToDo{
	
	/* 用来存储数据的一个数据 */
	
	private $data;
	
	/* 构造函数 */
	public function __construct($par){
		if(is_array($par))
			$this->data = $par;
	}
	
		
	public function __toString(){
		return '
			<li id="todo-'.$this->data['id'].'" class="todo">
			
				<div class="text">'.$this->data['text'].'</div>
				
				<div class="actions">
					<a href="#" class="edit">编辑</a>
					<a href="#" class="delete">删除</a>
				</div>
				
			</li>';
	}
	
	
	/*
		接下来的函数为静态方法
	*/
	
	
	
	/*
		编辑菜单项。
		id 菜单项的id，
		text 菜单项的文字
	*/
		
	public static function edit($id, $text){
		
		$text = self::esc($text);
		if(!$text) throw new Exception("编辑菜单项出错！");
		
		mysql_query("	UPDATE tz_todo
						SET text='".$text."'
						WHERE id=".$id
					);
		
		if(mysql_affected_rows($GLOBALS['link'])!=1)
			throw new Exception("不能编辑菜单项!");
	}
	
	/*
		删除菜单项
		id 菜单项的id
	*/
	
	public static function delete($id){
		
		mysql_query("DELETE FROM tz_todo WHERE id=".$id);
		
		if(mysql_affected_rows($GLOBALS['link'])!=1)
			throw new Exception("不能删除菜单项!");
	}
	
	/*
		对菜单项进行重新排序
	*/
	
	public static function rearrange($key_value){
		
		$updateVals = array();
		foreach($key_value as $k=>$v)
		{
			$strVals[] = 'WHEN '.(int)$v.' THEN '.((int)$k+1).PHP_EOL;
		}
		
		if(!$strVals) throw new Exception("No data!");
		
		
		mysql_query("	UPDATE tz_todo SET position = CASE id
						".join($strVals)."
						ELSE position
						END");
		
		if(mysql_error($GLOBALS['link']))
			throw new Exception("无法编辑菜单项位置");
	}
	
	/*
		创建个新的菜单项
		text 菜单项的文字
	*/
	
	public static function createNew($text){
		
		$text = self::esc($text);
		if(!$text) throw new Exception("输入框文字不合法！");
		
		$posResult = mysql_query("SELECT MAX(position)+1 FROM tz_todo");
		
		if(mysql_num_rows($posResult))
			list($position) = mysql_fetch_array($posResult);

		if(!$position) $position = 1;

		mysql_query("INSERT INTO tz_todo SET text='".$text."', position = ".$position);

		if(mysql_affected_rows($GLOBALS['link'])!=1)
			throw new Exception("无法添加新的菜单项");
		
		// 创建个新的ToDo对象，并输出
		
		echo (new ToDo(array(
			'id'	=> mysql_insert_id($GLOBALS['link']),
			'text'	=> $text
		)));
		
		exit;
	}
	
	/*
		过滤输入框文字
	*/
	
	public static function esc($str){
		
		if(ini_get('magic_quotes_gpc'))
			$str = stripslashes($str);
		
		return mysql_real_escape_string(strip_tags($str));
	}
	
}

?>