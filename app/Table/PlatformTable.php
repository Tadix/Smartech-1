<?php 

namespace App\Table;
use Core\Table\Table;

class PlatformTable extends Table {

	protected $table = 'platforms';

	/**
	 * Récupère l'id d'une plateforme à partir de son nom
	 * 
	 * @param $platName String
	 * @return App/Entity/PlatformEntity
	 */
	public function platIdByName($platName) {
		return $this->query("SELECT id FROM platforms WHERE nom = ?", [$platName], true);
	}

	/**
	* Recherche une plateforme dans la base de donnée à partir de l'attribut
	* 
	* @param $key string
	* @return object
	*/
	public function search($key) {
		return $this->query("
				SELECT platforms.id, platforms.nom, platforms.img 
				FROM {$this->table}
				WHERE platforms.nom LIKE '%$key%'");
	}

	/**
	 * Récupère 3 plateformes de la base de donnée ordonnées avec l'id de celles-ci
	 * 
	 * @return object
	 */
	public function threePlats() {
		return $this->query("SELECT * FROM {$this->table} ORDER BY id ASC LIMIT 3");
	}
}
?>