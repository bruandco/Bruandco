<?php

class formulaire{
	
	function __construct(){
	
	}
	
	public function addLabel($value,$for='',$classe='',$id='',$style='',$fonction=''){
	
		$champ = '';
		
		$champ .= '<label ';
		
		if(!empty($id))		$champ .= 'id="'.$id.'" ';
		if(!empty($for))	$champ .= 'for="'.$for.'" ';
		if(!empty($classe))	$champ .= 'class="'.$classe.'" ';
		if(!empty($style))	$champ .= 'style="'.$style.'" ';
		
		if($fonction != ''){
			foreach($fonction as $fct){
				$champ .= $fct.' ';
			}
		}
		
		$champ .= '>'.$value.'</label>';
		
		return $champ;
	
	}
	
	
	public function addField($type,$id='',$name='',$valueDefault='',$classe='',$style='',$tab='',$fonction=''){
	
		if($name == '') $name = $id;
	
		$champ = '';
		
		$champ .= '<input type="'.$type.'" ';
		
		
		switch($type){
			case 'input': case 'hidden' : case 'password' : case 'button' : case 'submit' :
			if($valueDefault != '')	$champ .= 'value="'.$valueDefault.'" ';
			break;
			
			case 'checkbox' :
			$champ .= 'value="1" ';			
			if($valueDefault == 1){
				$champ .= ' checked="checked" ';
			}
			break;
		}
		
		if(!empty($id))				$champ .= 'id="'.$id.'" ';
		if(!empty($name))			$champ .= 'name="'.$name.'" ';
		if(!empty($classe))			$champ .= 'class="'.$classe.'" ';
		if(!empty($style))			$champ .= 'style="'.$style.'" ';
		
		if($fonction != ''){
			foreach($fonction as $fct){
				$champ .= $fct.' ';
			}
		}
		
		$champ .= '/>';
		
		return $champ;
	}
	
	public function addFieldListe($id,$valueDefault='',$name='',$classe='',$style='',$vide=1,$fetch='',$value='',$display='',$fonction=''){
	
		if($name == '') $name = $id;
	
		$champ = '';
		
		$champ .= '<select ';
	
		if(!empty($id))				$champ .= 'id="'.$id.'" ';
		if(!empty($name))			$champ .= 'name="'.$name.'" ';
		if(!empty($classe))			$champ .= 'class="'.$classe.'" ';
		if(!empty($style))			$champ .= 'style="'.$style.'" ';
		
		if($fonction != ''){
			foreach($fonction as $fct){
				$champ .= $fct.' ';
			}
		}
		
		$champ .= '>';
		
		if($vide == 1){
			$champ .= '<option></option>';
		}		
		
		if(mysql_num_rows($fetch) > 0){
			while($data_select = mysql_fetch_assoc($fetch)){
				$champ .= '<option value="'.$data_select[$value].'" ';
				
				if($data_select[$value] == $valueDefault){
					$champ .= 'selected="selected" ';
				}
				
				$champ .= '>';
				
				foreach($display as $c=>$v){
					$champ .= $data_select[$v].' ';
				}
				
				$champ .= '</option>';
			}
		}

		$champ .= '</select>';
		
		return $champ;
	}
	
	
	function addFieldListetab($id,$valueDefault='',$name='',$classe='',$style='',$vide=1,$fetch='',$fonction=''){
		if($name == '') $name = $id;
	
		$champ = '';
		
		$champ .= '<select ';
	
		if(!empty($id))				$champ .= 'id="'.$id.'" ';
		if(!empty($name))			$champ .= 'name="'.$name.'" ';
		if(!empty($classe))			$champ .= 'class="'.$classe.'" ';
		if(!empty($style))			$champ .= 'style="'.$style.'" ';
		
		if($fonction != ''){
			foreach($fonction as $fct){
				$champ .= $fct.' ';
			}
		}
		
		$champ .= '>';
		
		if($vide == 1){
			$champ .= '<option></option>';
		}

		foreach($fetch as $c=>$v){
			$champ .= '<option value="'.$c.'" ';
			
			if($c === $valueDefault){
				$champ .= 'selected="selected" ';
			}
			
			$champ .= '>'.$v.'</option>';
		}
		
		$champ .= '</select>';
		
		return $champ;
	}
    
    function erreur($message,$bt_close,$timeout=0){
        $class_timeout = '';
        if($timeout == 1){
            $class_timeout = 'timeout';
        }

        $erreur = '';
        $erreur .= '<div class="alert_message erreur '.$class_timeout.'">';
            $erreur .= '<img src="theme/img/exclamation.png" alt="" title=""/>';
            $erreur .= '<span class="alert_message_content">'.$message.'</span>';
            if($bt_close == 1){
                $erreur .= '<img src="theme/img/bt_close_petite.png" alt="" title="" class="alert_message_button"/>';
            }
            $erreur .= '<div class="clear"></div>';
        $erreur .= '</div>';
        
        return $erreur;
    }
    
    function valide($message,$bt_close,$timeout=0){
        $class_timeout = '';
        if($timeout == 1){
         $class_timeout = 'timeout';
        }

        $valide = '';
        $valide .= '<div class="alert_message valide '.$class_timeout.'">';
            $valide .= '<img src="theme/img/information_moyenne.png" alt="" title=""/>';
            $valide .= '<span class="alert_message_content">'.$message.'</span>';
            if($bt_close == 1){
                $valide .= '<img src="theme/img/bt_close_petite.png" alt="" title="" class="alert_message_button"/>';
            }
            $valide .= '<div class="clear"></div>';
        $valide .= '</div>';

        return $valide;
    }

}