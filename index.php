<?php

require __DIR__ . '/vendor/autoload.php';

for ($i = 0; $i < 5; $i++) {
    $pid = pcntl_fork();
    if (!$pid) {
	while (true) {
	$conn = r\connect('192.168.188.26', 28015, 'test');
	r\table('test')->run($conn);
	}
exit();
    }
}

