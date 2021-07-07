<?php

// abstract class a_shoes {
// 	abstract function put_on();
// }

// class shoes extends a_shoes {
// 	function put_on() {
// 		echo "Look at my shoes, my shoes are amazing! \n";
// 	}
// }

// class sandals {
// 	function put_on() {
// 		echo "Look at my sandals, my legs are breathing! \n";
// 	}
// }

// class snieckers {
// 	function put_on() {
// 		echo "Look at my snieckers, vut don't eat it! \n";
// 	}
// }

// class boots {
// 	function put_on() {
// 		echo "Winter boots, winter boots, walking are all the way! \n";
// 	}
// }

// class cutie {

// 	private $shoes;

// 	function get_ready($shoes) { 
// 		if (method_exists($shoes, 'put_on')) {
// 			$this->shoes = $shoes;
// 			$shoes->put_on();
// 		}
// 	}
// }

// $shoes = new shoes();
// $sandals = new sandals();
// $snieckers = new snieckers();
// $boots = new boots();

// $shoes_list = [$shoes, $sandals, $snieckers, $boots];

// $lady = new cutie();

// foreach ($shoes_list as $one_pair) {
// 	$lady->get_ready($one_pair);
// }






class Feather
{
    function write()
    {
        echo "I am writing with my feather \n";
    }
}

class Pen
{
    function write()
    {
        echo "I am writing with my pen.\n";
    }
}

class Knife
{
    function write()
    {
        echo "I am writing with my knife HAHAHAH.\n";
    }
}

class Pencil {

	private $color;

	function set_color($color) {
		$this->color = $color;
	}

	function write(){
		echo "I am writing with my $this->color pencil \n";
	}
}

class Person {

	public $age, $name, $surname, $gender;
	private $thing;

	function take_something($thing) {
		if (!is_object($thing)) return; {
			$this->thing = $thing;
		}
	}

	function get_info(){
		return $this->name . ' ' . $this->surname . "\n";
	}

	function write(){
		if(is_object($this->thing) && method_exists($this->thing, 'write')) {
			$this->thing->write();
		} else echo "Nothing to use";
	}
}

$blackPencil = new Pencil();
$feather = new Feather();
$pen = new Pen();
$knife = new Knife();

$blackPencil->set_color('black');

$Johnny = new Person();
$Johnny->take_something($blackPencil);
$Johnny->write();

$Johnny->take_something($feather);
$Johnny->write();

$Johnny->take_something($pen);
$Johnny->write();

$Johnny->take_something($knife);
$Johnny->write();

