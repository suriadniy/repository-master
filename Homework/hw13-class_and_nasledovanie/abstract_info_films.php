<?php

interface checkRaitingIMDB
{
	function checkRaitingIMDB();
}

interface checkYear
{
	function checkYear();
}

abstract class Info implements checkRaitingIMDB, checkYear
{
	public $title, $genres, $length, $actors, $year, $directors, $raitingIMDB;

	public function __construct($title, $genres, $length, $actors, $year, $directors, $raitingIMDB) {
		$this->title = $title;
		$this->genres = $genres;
		$this->length = $length;
		$this->actors = $actors;
		$this->year = $year;
		$this->directors = $directors;
		$this->raitingIMDB = $raitingIMDB;
	}

	function checkRaitingIMDB() {
		if ($this->raitingIMDB >'9') {
			return 'Это фильм с высоким рейтингом';
		}
	}

	function checkYear() {
		if ($this->year === '2008') {
			return $this->year;
		}
	}

	abstract function listActors();
}	

class Movie extends Info
{
	private $partOfFranchise;

	function listActors() {
		return $this->actors;
	}

	public function __set($var, $value) {
		$this->$var = $value;
	}

	public function __get($var) {
		return $this->$var;
	}
}

class Serie extends Info 
{
	protected $inviteStars, $season;

	function listActors() {
		return $this->actors;
	}

	public function setInviteStars($newInviteStars) {
		$this->inviteStars = $newInviteStars;
	}

	public function getInviteStars() {
		return $this->inviteStars;
	}

	public function setSeason($newSeason) {
		$this->season = $newSeason;
	}

	public function getSeason() {
		return $this->season;
	}
}

class Series extends Movie

{
	protected $numberOfSeries, $numberOfSeasons;

	public function setNumberOfSeries($newNumberOfSeries) {
		$this->numberOfSeries = $newNumberOfSeries;
	}

	public function getNumberOfSeries() {
		return $this->numberOfSeries;
	}

	public function setNumberOfSeasons($newNumberOfSeasons) {
		$this->numberOfSeasons = $newNumberOfSeasons;
	}

	public function getNumberOfSeasons() {
		return $this->numberOfSeasons;
	}
}

class Users 
{
	private $firstName, $lastName, $login, $password;

	public function __construct($firstName, $lastName, $login, $password) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->login = $login;
		$this->password = $password;
	}

	public function get_firstName () {
		return $this->firstName;
	}
}

class PersonalPage
{
	protected $recomendations, $selectedPoster, $favorite, $seen, $inProgress;

	public function __construct($firstName, $lastName, $login, $password) {
		$this->recomendations = $recomendations;
		$this->selectedPoster = $selectedPoster;
		$this->favorite = $favorite;
		$this->seen = $seen;
		$this->inProgress = $inProgress;
	}

}

$movie = new Movie('Темный рыцарь', 'Фантастика-комикс-экранизация', '150', 'Хит Леджер, Кристиан Бэйл', '2008', 'Кристофер Нолан
', '9.7' );
$movie->partOfFranchise = 'Бэтмен - Нолана
';

echo $movie->partOfFranchise;
echo $movie->genres."\n";
echo $movie->checkYear()."\n";
echo $movie->checkRaitingIMDB()."\n";
echo $movie->listActors()."\n";

$users = new Users('Владислав', 'Сурядный', '000', 'qwerty');
echo $users->get_firstName()."\n";

$serie = new Serie('Темный рыцарь', 'Фантастика-комикс-экранизация', '150', 'Хит Леджер, Кристиан Бэйл', '2008', 'Кристофер Нолан
', '9.7' );

echo $serie->listActors()."\n";