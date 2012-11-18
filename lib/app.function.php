<?php
// FIXME: render 和 block 函数之间读取变量问题，现在用 render 内声明 global 方式，应该改成某种设计模式
function block( $block = 'main', $data = null, $c = 'default', $a = 'default', $layout = 'web') {


	is_array($data) && extract( $data );


	$tpl_file = 'view' . DS . 'layout' . DS  . g( 'layout' ) . DS . $block . DS . g( 'c' ) . DS . g( 'a' ) . '.tpl.html';
	$def_tpl_file = 'view' . DS . 'layout' . DS  . g( 'layout' ) . DS . $block . DS . $c . DS . $a . '.tpl.html';

	if ( file_exists( AROOT . $tpl_file ) ) {
		include_once AROOT . $tpl_file;
	}
	else if ( file_exists( AROOT . $def_tpl_file ) ) {
		include_once AROOT . $def_tpl_file;
	}
	else {
		@include_once CROOT . $def_tpl_file;
	}

}
