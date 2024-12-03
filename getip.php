<?php
//error_reporting(-1);
	$robots = array("HappyApps-WebCheck",
	"python-requests",
	"anonymousfox",
	"quic-go-HTTP",
	"Gather",
	"Expanse",
	"Linux Gnu (cow)",
	"gdnplus",
	"node-fetch",
	"masscan",
	"Go http package",
	"yandex",
	"Sogou",
	"census",
	"DotBot",
	"BLEXBot",
	"WinHttp-Autoproxy-Service",
	"CensysInspect");
	foreach ($robots as $robot) {
		if (stristr($_SERVER['HTTP_USER_AGENT'], $robot) !== false) {
			header('HTTP/1.0 403 Forbidden');
			die();
		}
	}
	/*echo "\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\rtest";
	var_dump(-1);*/
	header('HTTP/1.1 200 OK');
	header('Content-Type: text/plain');
	echo ($_GET['ip'] ? 'test' : $_SERVER['REMOTE_ADDR']);
	if ($_GET['more'] !== null) { echo "\r\n"; } else { die(); }
	echo gethostbyaddr(($_GET['ip'] ?: $_SERVER['REMOTE_ADDR'])) . "\r\n";
	//echo gethostbyname(($_GET['ip'] ?: $_SERVER['REMOTE_ADDR'])) . "\r\n";
	//echo gethostbyaddr(($_GET['host'] ?: $_SERVER['HTTP_HOST'])) . "\r\n";
	echo $_SERVER['REDIRECT_REMOTE_USER'] ?: $_SERVER['REMOTE_USER'] ?: $_SERVER['PHP_AUTH_USER'] ?: '';
	//if ($_SERVER['REMOTE_ADDR'] == '185.86.106.165' || $_SERVER['REMOTE_ADDR'] == '192.168.68.1' || $_REQUEST['stuff'] == 1) {
	//	var_dump($_SERVER);
	//}
//	} elseif ($_GET['ships'] == 'port') {
//		header('Content-Type: text/html');
//		echo "<html><head><style>body {font-size: 22px; font-family: 'Hack';}</style></head><body>";
/*    $host = (isset($_GET['self']) ? $_SERVER['REMOTE_ADDR'] : ($_GET['host'] ?: ($_GET['hostname'] ?: ($_GET['ip'] ?: $_SERVER['SERVER_ADDR']))));
    $ports = array_unique((($_GET['ports'] > 0) ? explode(',', $_GET['ports']) : array(21, 22, 80, 443, 13420, 19999)), SORT_NUMERIC);
	foreach ($ports as $port) {
		//echo $port;
		if (strpos($port, '-') != false) {
			$range = explode('-', $port);
			//print_r($range);
			$srange = $range[0];
			$erange = $range[1];
			$nrange = $erange - $srange;
			$i = 0;
			//echo $nrange;
			while ($i <= $nrange) {
				echo ($i + $srange);
				$i++;
				//echo 'test';
			}
			//die();
			//die(print_r($ranges));
		}
	}
	print_r($ranges);
	print_r($ports);
    sort($ports, SORT_NUMERIC);*/
    //echo is_array($ports);
    //print_r($ports);
    //die();
echo $host.'-'.$_SERVER['REMOTE_ADDR'].'-'.$_SERVER['SERVER_ADDR'].'-';
echo '-----'.$_SERVER['REMOTE_ADDR'].'----';
printf(fopen('http://api.ipify.org','r'));
/*    function check($host, $port) {
        $socket = @fsockopen($host, $port, $errno, $err, 0.1);
        if (!$socket) {
            return false;
        } else {
            fclose($socket);
            return true;
        }
    }*/
	echo "\r\n$host is " . gethostbyaddr($host) . "\r\n\r\n<br /><br />";
/*    foreach ($ports as $port) {
        $status = check($host, $port);
        if ($status == true) {
            echo $port . ' on ' . $host . ' is <font style="color: green; font-weight: bolder;">open!</font><br>';
        } else {
            echo $port . ' on ' . $host . ' is <font style="color: red; font-weight: bolder;">closed!</font><br>';
        }
    }*/
	echo "</body></html>";
//}
?>