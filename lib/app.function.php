<?php
// TODO: render 和 part 函数之间读取变量问题，现在用 render 内声明 global 方式，应该改成某种设计模式
function part( $part = 'main', $c = 'default', $a = 'default', $layout = 'web' ) {

	$tpl_file = 'view' . DS . 'layout' . DS  . g( 'layout' ) . DS . $part . DS . g( 'c' ) . DS . g( 'a' ) . '.tpl.html';
	$def_tpl_file = 'view' . DS . 'layout' . DS  . g( 'layout' ) . DS . $part . DS . $c . DS . $a . '.tpl.html';
	// $onlyFileDefault = 'view' . DS . 'layout' . DS  . g( 'layout' ) . DS . $part . DS . 'default' . DS . 'only.tpl.html';

	if ( file_exists( AROOT . $tpl_file ) ) {
		require AROOT . $tpl_file;
	}
	else if ( file_exists( AROOT . $def_tpl_file ) ) {
		require AROOT . $def_tpl_file;
	}
	else {
		@include CROOT . $def_tpl_file;
	}

	// c=default a=index 独有页面
	// if ( g( 'a' ) == 'index' && g( 'c' ) == 'default' && file_exists( AROOT . $onlyFileDefault ) ) require AROOT . $onlyFileDefault;
}
