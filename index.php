<?php
ini_set("display_errors", 1);
error_reporting(-1);

use Bezrukov\BezrukovException;
use Bezrukov\Square;
use Bezrukov\MyLog;

require_once 'Bezrukov/Line.php';
require_once 'Bezrukov/Square.php';
require_once 'Bezrukov/MyLog.php';
require_once 'core/LogAbstract.php';
require_once 'core/LogInterface.php';
require_once 'core/EquationInterface.php';
require_once 'Bezrukov/BezrukovException.php';

try {
	
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

