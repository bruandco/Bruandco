<?php     
    require_once ('../smarty/Smarty.class.php');
    $smarty = new Smarty;
    $smarty->setTemplateDir('../themes/');
    $smarty->setCacheDir('../cache/');
    $smarty->setCompileDir('../template_c/');
?>
<!DOCTYPE html>
<html>
    <head>                                                      
        <title></title>
        <link rel="stylesheet" name="general" href="../css/general.css" type="text/css" media="all" />
        <link rel="stylesheet" name="gabarit" href="../css/gabarit.css" type="text/css" media="all" />
        <link rel="stylesheet" name="gabarit" href="../css/framework.css" type="text/css" media="all" />
        <link rel="stylesheet" name="gabarit" href="../css/themes.css" type="text/css" media="all" />
        <link rel="stylesheet" name="base" href="../css/overcast/jquery-ui-1.8.21.custom.css" type="text/css" media="all" />
        <script type="text/javascript" href="../javascript/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" href="../javascript/jquery-ui-1.8.21.custom.min.js"></script>
    </head>
    <body>
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
    </body>
</html>

