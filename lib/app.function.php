<?php
function part( $part = 'main', $c = 'default', $a = 'index', $layout = 'web' ) {
	$tfile = 'view' . DS . 'layout' . DS  . g( 'layout' ) . DS . $part . DS . g( 'c' ) . DS . g( 'a' ) . '.tpl.html';
	$tfileDefualt = 'view' . DS . 'layout' . DS  . g( 'layout' ) . DS . $part . DS . $c . DS . $a . '.tpl.html';
	if ( file_exists( AROOT . $tfile ) ) include_once AROOT . $tfile;
	else if ( file_exists( AROOT . $tfileDefualt ) ) include_once AROOT . $tfileDefualt;
		else @include_once CROOT . $tfile;
}
