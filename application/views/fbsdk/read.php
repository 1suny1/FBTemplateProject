<?php
echo nl2br(APPPATH).'<br/>';

echo nl2br(__DIR__).'<br/>';

echo nl2br($_SESSION['facebook_access_token']).'<br/>';

// print_r($my_adaccount->getData());

foreach ($my_adaccount as $key => $value) {
	echo "$key : $value<br />\n";
}


/*
 * 
array_keys()
array_values()
 * 
 */