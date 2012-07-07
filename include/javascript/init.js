$(document).ready(function(){
    
    // Bouton fermer des alertes formulaires
    $('.alert_message_button').click(function(){
        $(this).parent().hide("slow",function(){ $(this).remove(); });    
    });
    
    $('.timeout').each(function(){
        
        var fx = function(){
            $('.alert_message').hide("slow",function(){ $(this).remove(); });
        }; 
        
        setTimeout(fx,5000);    
    });
    
    
    
});