<?php 

defined('BASEPATH') OR exit('No direct script access allowed');



class PlayerStatisticsModel extends CI_Model {
	/* Definición de atributos */
	public $id;
	public $id_player;
	public $id_match;
	public $goals;
	public $yellow_cards;
	public $red_cards;
	public $assists;
	public $suspension;
	public $fouls_committed;
	public $fouls_received;

	/*
	* Constructor de clase vacio
	*/
	public function __construct() {
		parent::__construct();
	}

	public function insertar($id_player,$id_match,$goals,$yellow_cards,$red_cards,$assists,$suspension,$fouls_committed,$fouls_received){

	}

	public function modificar($id,$id_player,$id_match,$goals,$yellow_cards,$red_cards,$assists,$suspension,$fouls_committed,$fouls_received)

}