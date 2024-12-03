<?php
error_reporting(0);
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
	"CensysInspect",
	"Archive");

foreach ($robots as $robot) {
	if (stristr($_SERVER['HTTP_USER_AGENT'], $robot) !== false) {
		header('HTTP/1.0 403 Forbidden');
		die();
	}
}

if (isset($_GET['menorca'])) {
	readfile('sveland.htm');
	die();
}

if (isset($_GET['blin'])) {
	readfile('blin.htm');
	die();
}

$hattar = 'avbr.yt,hathyllan.se,åthelvetemedhelaskiten.se,zaint.se,xn--thelvetemedhelaskiten-r2b.se';
$slumpen = '0b.yt,omgz.wtf,put.in.net,ipmi.se,ragnwald.com,ragnwald.se,roflzombie.com,xab.yt';

$surl = strtolower($_SERVER['SERVER_NAME'] ? : $_SERVER['HOST_NAME']);

if (stristr($hattar, $surl) || stristr($hattar, str_replace('www.', '', $surl))) {
	readfile('sveland.htm');
	die();
} elseif (stristr('put.in.net', $surl)) {
	readfile('blin.htm');
	die();
} else {
	readfile('anlan.htm');
	die();
}

// foreach($_SERVER as $key_name => $key_value) {
// 
// 	print $key_name . " = " . $key_value . "<br>";
// 	
// }

//if (in_array(strtolower($_SERVER['SERVER_NAME']), $hattar) || in_array('www.' . strtolower($_SERVER['SERVER_NAME']), $hattar)) {
//} elseif (in_array(strtolower($_SERVER['HTTP_HOST']), $hattar) || in_array('www.' . strtolower($_SERVER['HTTP_HOST']), $hattar)) {
//}
?>