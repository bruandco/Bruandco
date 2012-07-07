<?php     
    require_once ('../include/init.php');
?>

<?php
    $smarty->assign("titre_page",$GLOBALS['titre_site']);
    $smarty->display('head.tpl');
?>

<div id="main_haut">                  
   <?php
    $smarty->assign('keywords','Recherche');
    $smarty->display('menu_haut.tpl');
   ?>
</div>
 <div id="main_banniere">                  
   <?php
    $smarty->display('banniere.tpl');
   ?>
</div>
<div id="main_bloc">
    <div id="mb_gauche">
    <?php
        $smarty->display('menu_gauche.tpl');
    ?>
    </div>
    <div id="mb_centre">
        <div id="mbc_haut"></div>
        <div id="mbc_centre">
        <?php
            $smarty->display('accueil.tpl');
        ?>
        </div>
        <div id="mbc_bas"></div>
    </div>
    <div id="mb_droite"></div>
    <div class="clear"></div>
</div>
<div id="main_bas">
 <?php
    $smarty->display('bas_page.tpl');
   ?>
</div>
        
<?=$smarty->display('foot.tpl');?>