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

	public function get_wayOfEating() {
		return $this->wayOfEating;
	}

	public function set_locomotion($newLocomotion) {
		$this->locomotion = $newLocomotion;
	}

	public function get_locomotion() {
		return $this->locomotion;
	}

	public function set_size($newSize) {
		$this->size = $newSize;
	}

	public function get_size() {
		return $this->size;
	}

	public function set_presenceOfOrgans($newPresenceOfOrgans) {
		$this->presenceOfOrgans = $newPresenceOfOrgans;
	}

	public function get_presenceOfOrgans() {
		return $this->presenceOfOrgans;
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

	public function get_Numb_of_limbs() {
		return $this->numberOfLimbs;
	}

	public function set_Cover($newCover) {
			$this->cover = $newCover;
		}

	public function get_Cover() {
			return $this->cover;
		}	

	public function set_Breath($newBreath) {
		$this->breath = $newBreath;
	}

	public function get_Breath() {
		return $this->breath;
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

	public function get_color($newColor) {
		return $this->colors;
	}

	public function set_breed($newBreed) {
		$this->breed = $newBreed;
	}

	public function get_breed($newBreed) {
		return $this->breed;
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

echo $cat->get_color()."\n";
echo $cat->get_Cover();

// echo $cat->get_info();

// закомментированное это если бы было все public, а не private