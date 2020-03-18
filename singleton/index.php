<?php

namespace Designpatterns\Singleton;

/*
	普通类
*/
class Db1 
{
	public static $instance = null;

	public function __construct()
	{

	}

	public function __clone()
	{

	}

	public static function getInstance()
	{
		if (null === static::$instance) {
			static::$instance = new Db1();
		}

		return static::$instance;
	}
}

$db1 = new Db1();
$db2 = new Db1();
$db3 = clone $db2;
$db4 = Db1::getInstance();


var_dump($db1);
echo "<br>";

var_dump($db2);
echo "<br>";

var_dump($db3);
echo "<br>";

var_dump($db4);
echo "<br>";


/*
	单例
*/

class Db2
{
	/*将instance 进行私有化*/
	private static $instance = null;

	/*将public的构造函数 私有化*/
	private function __construct()
	{

	}

	/*将public的克隆函数 私有化*/
	private function __clone()
	{

	}

	public static function getInstance()
	{
		if (null === static::$instance) {
			static::$instance = new Db2();
		}

		return static::$instance;
	}
}

// $db5 = new Db2(); //construct私有化 防止new多个实例
// $db6 = new Db2(); // 如果进行new会报错
// $db7 = clone $db5;   //clone 和上面new 实例类似
$db8 = Db2::getInstance();
$db9 = Db2::getInstance();

// var_dump($db5);
// echo"<br>";

// var_dump($db6);
// echo"<br>";

// var_dump($db7);
// echo"<br>";

var_dump($db8);
echo"<br>";

var_dump($db9);
echo"<br>";