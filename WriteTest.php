<?php

require __DIR__ . '/vendor/autoload.php';
for ($i = 0; $i < 10; $i++) {
    $pid = pcntl_fork();
    if (!$pid) {
	while (true) {
	$random = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890"), 0, 7);
	$random1 = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890"), 0, 15);
	$doc = array('$random'=>'$random1');
	$conn = r\connect('192.168.188.26', 28015, 'test');
	r\table("test")->insert($doc)->run($conn);
	}
exit();
    }
}

