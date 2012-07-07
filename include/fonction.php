<?php

function random($car) {
    $string = "";
    $chaine = "abcdefghijklmnpqrstuvwxyABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    srand((double)microtime()*1000000);
    for($i=0; $i<$car; $i++) {
    $string .= $chaine[rand()%strlen($chaine)];
    }
    return $string;
}

function redirection($link){
	header("location:".$link);
}
?>
