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






// class Feather
// {
//     function write()
//     {
//         echo "I am writing with my feather \n";
//     }
// }

// class Pen
// {
//     function write()
//     {
//         echo "I am writing with my pen.\n";
//     }
// }

// class Knife
// {
//     function write()
//     {
//         echo "I am writing with my knife HAHAHAH.\n";
//     }
// }

// class Pencil {

// 	private $color;

// 	function set_color($color) {
// 		$this->color = $color;
// 	}

// 	function write(){
// 		echo "I am writing with my $this->color pencil \n";
// 	}
// }

// class Person {

// 	public $age, $name, $surname, $gender;
// 	private $thing;

// 	function take_something($thing) {
// 		if (!is_object($thing)) return; {
// 			$this->thing = $thing;
// 		}
// 	}

// 	function get_info(){
// 		return $this->name . ' ' . $this->surname . "\n";
// 	}

// 	function write(){
// 		if(is_object($this->thing) && method_exists($this->thing, 'write')) {
// 			$this->thing->write();
// 		} else echo "Nothing to use";
// 	}
// }

// $blackPencil = new Pencil();
// $feather = new Feather();
// $pen = new Pen();
// $knife = new Knife();

// $blackPencil->set_color('black');

// $Johnny = new Person();
// $Johnny->take_something($blackPencil);
// $Johnny->write();

// $Johnny->take_something($feather);
// $Johnny->write();

// $Johnny->take_something($pen);
// $Johnny->write();

// $Johnny->take_something($knife);
// $Johnny->write();



// abstract class AbstractClass
// {
//     // Наш абстрактный метод требует только определить необходимые аргументы
//     abstract protected function prefixName($name);

// }

// class ConcreteClass extends AbstractClass
// {

//     // Наш дочерний класс может определить необязательные аргументы, не указанные в объявлении родительского метода
//     public function prefixName($name, $separator = ".") {
//         if ($name == "Pacman") {
//             $prefix = "Mr";
//         } elseif ($name == "Pacwoman") {
//             $prefix = "Mrs";
//         } else {
//             $prefix = "";
//         }
//         return "{$prefix}{$separator}{$name}";
//     }
// }

// $class = new ConcreteClass;
// echo $class->prefixName("Pacwoman"), "\n";
// // echo $class->prefixName("Pacwoman"), "\n";





// interface canWrite
// {
//     function write();
// }

// abstract class WritingThing implements canWrite
// {

//     function write()
//     {
//         echo "I am writing with my ".strtolower(get_class($this))." \n";
//         echo $this->additionalInfo() ."\n";
//     }

//     abstract protected function additionalInfo();

// }


// class Pencil extends WritingThing {
//     protected function additionalInfo(){
//         return "";
//     }
// }

// class Feather extends WritingThing
// {
//     protected function additionalInfo(){
//         return "";
//     }
// }

// class Pen extends WritingThing
// {
//     protected function additionalInfo(){
//         return "";
//     }
// }

// class Knife extends WritingThing
// {
//     protected function additionalInfo(){
//         return "HAHAHAH";
//     }

// }


// class Person {

//     public $age, $name, $surname, $gender;
//     private $thing;

//     function take_something($thing) {
//         if(!is_object($thing)) return false;
//         $this->thing = $thing;
//         return $this;
//     }

//     function get_info(){
//         return $this->name . ' ' . $this->surname . "\n";
//     }

//     function write(){
//         if(method_exists($this->thing, 'write')
//             && is_subclass_of($this->thing, "WritingThing"))
//         {
//             $this->thing->write();
//         } else echo "Nothing to use".PHP_EOL;
//     }

// }

// $blackPencil = new Pencil();
// $feather = new Feather();
// $pen = new Pen();
// $knife = new Knife();

// $Johnny = new Person();

// $things = [$blackPencil, $feather, $pen, $knife];

// foreach ($things as $thing)
// {
//     $Johnny->take_something($thing)->write();

// }






// 8 july solid tema

AInfo
- title
- genres
- length
- actors
- year
- IMDBraiting 
 
AInfo -> Movie
- partOfFranchise

Темный рыцарь
Фантастика-комикс-экранизация
150
2008
Nоlаn
Кристофер Нолан
Хит Леджер, Кристиан Бэйл
Бэтмен - Нолана
9.6

AInfo -> Serie
- inviteStars
- season

Movie -> Series
- numberOfSeries
- numberOfSeasons

Во все тяжкие
Криминал - триллер - драмма
40
2007
разные
Пол, Кренгстон, Эспозито
Во все тяжкие - вселенная
9.5
5 * 12
5

Users
- firstName
- lastName
- login
- password

PesronalPage
- recomendations
- selectedPoster
- favorite
- seen
- inProgress