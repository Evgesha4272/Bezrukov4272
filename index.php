<?php
ini_set("display_errors", 1);
error_reporting(-1);

use Bezrukov\BezrukovException;
use Bezrukov\Square;
use Bezrukov\MyLog;

require_once __DIR__ . './vendor/autoload.php';

try {
	if(!is_dir("log")) {
        mkdir("log", 0700);
    }
	
	MyLog::log("Версия программы : ".trim(file_get_contents('version')));
	
    echo "Enter 3 numbers\n\r";

    $a = (int)readline();
    $c = (int)readline();
	$b = (int)readline();

    MyLog::log("The equation is introduced:" . " $a*x^2 + $b*x + $c = 0");
	
    $test = new Square();
	
    $root = $test->solve($a, $b, $c);
	
    MyLog::log("Roots: " . implode(", ", $root));

} catch (BezrukovException $e) {
    MyLog::log($e->getMessage());
}
MyLog::write();

