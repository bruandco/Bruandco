<?php
class connexion{
	var $link		= '';
	var $log		= '';
	var $db_selected 	= '';

	public function connexion($parametre){

		$this->link = mysql_connect($parametre['host'],$parametre['user'],$parametre['pwd']);
		if(!$this->link){
			$this->log = 'Impossible de joindre le serveur';
		}elseif(!empty($parametre['base'])){
			$this->db_selected = mysql_select_db($parametre['base'],$this->link);
			if( $this->db_selected == ''){
				$this->log = 'base de données non trouvée';
			}else{
				$this->log = 'base de données trouvée';
			}
		}else{
			$this->log = 'aucune base de données voulue';
		}
		return $this->link;
	}

	public function get_log(){
		return $this->log;
	}

	public function close_bd($bd_link){
		mysql_close($bd_link);
	}

	public function select_active_db($db){
		$this->db_selected = mysql_select_db($db,$this->link);
		if($this->db_selected == ''){
			$this->log = 'base de données non trouvée';
		}else{
			$this->log = 'base de données trouvée';
		}
		return $this->db_selected;
	}

	public function get_active_db(){
		return $this->db_selected;
	}

	public function set_active_db($db){
		$this->db_selected = mysql_select_db($db,$this->link);
		if( $this->db_selected == ''){
			$this->log = 'base de données non trouvée';
			return false;
		}else{
			$this->log = 'base de données trouvée';
			return true;
		}
	}
}
?>