<?php 

namespace App\Table;
use Core\Table\Table;

class Game_catTable extends Table {

    protected $table = 'game_cat';

    /**
	* Supprime les tuplés de la base de donnée où game_id est égal à l'attribut id
	* 
	* @param $id int
	* @return boolean
	*/
	public function delGByGId($id) {
		return $this->query("DELETE FROM {$this->table} WHERE game_id = ?", [$id]);
	}

	/**
	* Supprime les tuplés de la base de donnée où cat_id est égal à l'attribut id
	* 
	* @param $id int
	* @return boolean
	*/
	public function delCByCId($id) {
		return $this->query("DELETE FROM {$this->table} WHERE cat_id = ?", [$id]);
	}

	/**
	* Récupère tous les ids des catégories où l'id des jeux est égal a l'attribut id
	* 
	* @param $id int
	* @return object
	*/
	public function catIdByGameId($id) {
		return $this->query("SELECT cat_id FROM {$this->table} WHERE game_id = ?", [$id]);
	}

}