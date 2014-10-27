<?php
include('CarInterface.php');
include('EngineInterface.php');
include('RaceCarInterface.php');
class Car implements CarInterface, EngineInterface, RaceCarInterface
{
	public $vMax;
	public $s;
	public $t;
	public $acceleration;
	public $hp;
	public $model;
	private $engine;
	protected $wheel;
	
	public function __construct($model){
		$this->model = $model;
	}
	
	public function helloCar()
	{
		echo 'Hello';
	}

	public function setEngine($engine)
	{
		$this->engine = $engine;
		return $this;
	}
	
	public function getEngine()
	{ 
		return $this->engine;
	}
	public function getModel()
	{
		return $this->model;
	}
	public function drive()
	{
		echo ' driving...';
	}
	public function setVMax($s,$t)
	{
		$this->vMax = $s*$t;
		return $this;
	}
	public function getVMax()
	{
		return $this->vMax;
	}
	
	public function setAcceleration()
	{
		$this->acceleration = $this->vMax/$this->hp;
		return $this;
	}
	public function getAcceleration()
	{
		return $this->acceleration;
	}
	
	public function setHP($hp)
	{
		$this->hp = $hp;
		return $this;
	}
	public function getHP()
	{
		return $this->hp;
	}
}