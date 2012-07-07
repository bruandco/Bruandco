<?php

function format_date($date,$format=''){

	if(isset($format) && $format == 'us'){
		$date_jour	= substr($date,0,2);
		$date_mois	= substr($date,3,2);
		$date_annee	= substr($date,6,4);
	}elseif(isset($format) && $format == 'fr' || $format == ''){
		$date_jour	= substr($date,8,2);
		$date_mois	= substr($date,5,2);
		$date_annee	= substr($date,0,4);
	}
	if(isset($format) && $format == 'us'){
		$separateur = '-';
		$date		= $date_annee.$separateur.$date_mois.$separateur.$date_jour;
	}elseif(isset($format) && $format == 'fr' || $format == ''){
		$separateur = '/';
		$date		= $date_jour.$separateur.$date_mois.$separateur.$date_annee;
	}
	return $date;
}