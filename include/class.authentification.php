<?php

class authentification{
    var $connect = '';

    public function __construct(){

    }

    public function connexion($u,$m,$l){
        $requete_connexion = sprintf('select * from utilisateur where login="%s" and password="%s"',mysql_real_escape_string($u),mysql_real_escape_string(hash('sha1',$m)));
        $sql_select = mysql_query($requete_connexion,$l);
        if(mysql_num_rows($sql_select) > 0){
            $data_user = mysql_fetch_array($sql_select);
            $_SESSION['auth_login'] = $data_user['login'];
			$_SESSION['auth_nom'] = $data_user['nom'];
			$_SESSION['auth_prenom'] = $data_user['prenom'];
			$_SESSION['auth_id'] = $data_user['id'];
            $_SESSION['auth_rand'] = random(25);
            return true;
        }else{
            return false;
        }
    }

    public function deconnexion(){
        $_SESSION = array();
        session_destroy();
        header("location:index.php");
    }
    
}
?>
