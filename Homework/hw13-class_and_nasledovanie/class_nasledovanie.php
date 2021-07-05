<?php

// Первый уровень

class Animals {

	public $wayOfEating, $locomotion, $size, $presenceOfOrgans;

	public function get_info() {
		return $this->wayOfEating."\n".$this->locomotion."\n".$this->size."\n".$this->presenceOfOrgans."\n";
	}  

}

class Cat extends Animals {
	
}

$cat = new Cat();

$cat->wayOfEating = 'carnivores';

$cat->locomotion = 'at the expense of paws';

$cat->presenceOfOrgans = 'like all animals';

$cat->size = 'Largest breed of domestic cats';

echo $cat->get_info();


// Второй уровень

class Animals {

	public $wayOfEating, $numberOfLimbs, $size, $lifespan;

	function get_info() {
		return $this->wayOfEating."\n".$this->locomotion."\n".$this->size."\n".$this->presenceOfOrgans."\n";
	}

}

class Mammals extends Animals {

	public $numberOfLimbs, $cover, $breath;

	// protected function

	public function get_info() {
		return parent::get_info() . $this->numberOfLimbs."\n". $this->cover."\n". $this->breath;
	}

}

class Cat extends Mammals {
	public $colors, $breed;

	public function get_info() {
		return parent::get_info() ."\n". $this->colors."\n". $this->breed."\n";
	}

}


$cat = new Cat();

$cat->wayOfEating = 'carnivores';

$cat->locomotion = 'at the expense of paws';

$cat->presenceOfOrgans = 'like all animals';

$cat->size = 'Largest breed of domestic cats';

$cat->numberOfLimbs = 4;

$cat->cover = 'wool';

$cat->breath = 'the presence of lungs';

$cat->colors = 'redhead';

$cat->breed = 'Maine Coon';

echo $cat->get_info();


// Третий уровень

class Animals {

	public $wayOfEating, $numberOfLimbs, $size, $lifespan;

	function get_info() {
		return $this->wayOfEating."\n".$this->locomotion."\n".$this->size."\n".$this->presenceOfOrgans."\n";
	}

}

class Mammals extends Animals {

	public $numberOfLimbs, $cover;

	protected $breath;

	public function set_Breath($newBreath) {
		$this->breath = $newBreath;
	}

	public function get_info() {
		return parent::get_info() . $this->numberOfLimbs."\n". $this->cover."\n". $this->breath;
	}

}

class Cat extends Mammals {
	public $colors, $breed;

	public function set_info($newColor) {
		$this->colors = $newColor;
	}

	public function get_info() {
		return parent::get_info() ."\n". $this->colors."\n". $this->breed."\n";
	}

}

$cat = new Cat();

$cat->wayOfEating = 'carnivores';

$cat->locomotion = 'at the expense of paws';

$cat->size = 'Largest breed of domestic cats';

$cat->presenceOfOrgans = 'like all animals';

$cat->numberOfLimbs = 4;

$cat->cover = 'wool';

// $cat->breath = 'the presence of lungs';

$cat->set_Breath('the');

$cat->colors = 'redhead';

$cat->breed = 'Maine Coon';

$cat->set_info('blue');

// echo $cat->colors;

echo $cat->get_info();