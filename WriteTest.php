<?php
require __DIR__ . '/vendor/autoload.php';
for ($i = 0; $i < 10; $i++) {
    $pid = pcntl_fork();
    if (!$pid) {
        while (true) {
	$doc = array('DATAKEY' => 'xd' );
        $conn = r\connect('192.168.188.26', 28015, 'test');
        r\table("test")->insert(r\http('https://i.sandrotracker.biz/41c20d5900d505d10042476ed80f564e.json'))->run($conn);
        }
exit();
    }
}

