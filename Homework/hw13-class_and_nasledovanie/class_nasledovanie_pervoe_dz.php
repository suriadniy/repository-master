<?php

// Первый уровень

class Animals {

	protected $wayOfEating, $locomotion, $size, $presenceOfOrgans;

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

	private $wayOfEating, $locomotion, $size, $presenceOfOrgans;

	public function set_wayOfEating($newWayOfEating) {
		$this->wayOfEating = $newWayOfEating;
	}

	public function set_locomotion($newLocomotion) {
		$this->locomotion = $newLocomotion;
	}

	public function set_size($newSize) {
		$this->size = $newSize;
	}

	public function set_presenceOfOrgans($newPresenceOfOrgans) {
		$this->presenceOfOrgans = $newPresenceOfOrgans;
	}

	public function get_info() {
		return $this->wayOfEating."\n".$this->locomotion."\n".$this->size."\n".$this->presenceOfOrgans."\n";
	}
}

class Mammals extends Animals {

	private $numberOfLimbs, $cover, $breath;

	public function set_Numb_of_limbs($newNumb_of_limbs) {
		$this->numberOfLimbs = $newNumb_of_limbs;
	}

	public function set_Cover($newCover) {
			$this->cover = $newCover;
		}

	public function set_Breath($newBreath) {
		$this->breath = $newBreath;
	}

	public function get_info() {
		return parent::get_info() . $this->numberOfLimbs."\n". $this->cover."\n". $this->breath;
	}
}

class Cat extends Mammals {

	private $colors, $breed;

	public function set_color($newColor) {
		$this->colors = $newColor;
	}

	public function set_breed($newBreed) {
		$this->breed = $newBreed;
	}

	public function get_info() {
		return parent::get_info() ."\n". $this->colors."\n". $this->breed."\n";
	}
}

$cat = new Cat();

// $cat->wayOfEating = 'carnivores';

$cat->set_wayOfEating('carnivores');

// $cat->locomotion = 'at the expense of paws';

$cat->set_locomotion('at the expense of paws');

// $cat->size = 'Largest breed of domestic cats';

$cat->set_size('Largest breed of domestic cats');

// $cat->presenceOfOrgans = 'like all animals';

$cat->set_presenceOfOrgans('like all animals');

// $cat->numberOfLimbs = 4;

$cat->set_Numb_of_limbs(4);

// $cat->cover = 'wool';

$cat->set_Cover('wool');

// $cat->breath = 'the presence of lungs';

$cat->set_Breath('the presence of lungs');

// $cat->colors = 'redhead';

$cat->set_color('blue');

// $cat->breed = 'Maine Coon';

$cat->set_breed('tiger');

echo $cat->get_info();

// закомментированное это если бы было все public, а не private