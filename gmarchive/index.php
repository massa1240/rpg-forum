<?php

session_start();

if ( !$_SESSION['index'] ) {
	$_SESSION['index'] = (rand(1, 999*3) % 3) + 1;
}

include("gmarchive_{$_SESSION['index']}/index.html");