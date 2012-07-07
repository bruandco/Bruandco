$(document).ready(function(){
    $('.verification_formulaire').submit(
        function(){
            var nombre_de_champs = $('.obligatoire');
                nombre_de_champs = nombre_de_champs.length;
            var erreur_saisie = 0;
            $('.obligatoire').each(function(){
                if($(this).val() == ''){
                    erreur_saisie++;
                    $(this).addClass('alert_message_obligatoire');
                }else{
                    $(this).removeClass('alert_message_obligatoire');
                }
            });
            if(erreur_saisie <= 0){
                return true;
            }else{
                return false;
            }
        }
    );
    
    function change_class_champ_obligatoire(obj){
        $(obj).attr('class','alert_message_obligatoire');
    }
});