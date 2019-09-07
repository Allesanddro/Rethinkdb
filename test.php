<?php

require __DIR__ . '/vendor/autoload.php';
for ($i = 0; $i < 5; $i++) {
    $pid = pcntl_fork();
    if (!$pid) {
	while (true) {
	$random = array(substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890"), 0, 32));
  $random1 = array(substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890"), 0, 32));
	$doc = array($random[0], $random1[0]);
	$conn = r\connect('192.168.188.26', 28015, 'test');
	r\table("test")->insert($doc)->run($conn);
	}
exit();
    }
}

