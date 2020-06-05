<?php
$GLOBALS['_ta_rp_key'] = '8bb228d841fde756195c18f9a372d22e';
$GLOBALS['_ta_reverse_proxy_id'] = 'i4o20c';

require 'bootloader_d015f489ce4a2a569b189f50f6c60dab.php';

$options = array();
/*
$options = array(
	'replace' => array(
		'This is the text to find' => 'The new text',
		'This is the text to find 2' => 'The new text 2',
	)
);
*/

$tarp = new TARPLoader($options);

$tarp->excute();
?>