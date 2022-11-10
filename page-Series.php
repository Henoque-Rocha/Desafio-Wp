<?php 
    //Template name: Séries
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
		wp_head();
	?>
    <link rel="shortcut icon" href="<?php echo get_theme_root_uri(); ?>/Desafio-Wp-Oficial/images/Grupo 1.svg" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo get_theme_root_uri(); ?>/Desafio-Wp-Oficial/Filmes.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo"><a href="/wordpress/Home"><img src="<?php echo get_theme_root_uri(); ?>/Desafio-Wp-Oficial/images/Grupo 1.svg" alt="Logo PLay"></a></div><!---Logo-->
            <div class="menu-desktop">
                <ul>
                    <li><a href="/wordpress/Filmes">Filmes</a></li>
                    <li><a href="/wordpress/Documentarios">Documentários</a></li>
                    <li><a href="/wordpress/Series">Séries</a></li>
                </ul>
            </div><!--menu-desktop-->
        </div><!--container-->
    </header>
    <section class="Sessao_Filmes">
        <div class="container">
            <div class="w50">
                <div class="sobre-filme">
                    <h2 style="color: red;">Séries</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque sed felis eu commodo. Duis dapibus eu arcu varius ornare. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin vel lorem malesuada, pellentesque purus eget, porttitor purus. Etiam eleifend facilisis lobortis. Curabitur erat lacus, ullamcorper ut magna a, maximus pellentesque dolor.</p>
                </div><!--sobre-filme-->
            </div><!--w50-->
            <div class="w50">
                <div class="Filmes" id="Series">
                    
                </div><!--Filmes-->            
            </div><!--w50-->
        </div><!--container-->
    </section> 
    <section class="Sessao_menu_filmes">
        <div class="container">
            <div class="menu-fixed">
                <div class="menu-filmes">
                    <a href="/wordpress/Filmes"><img src="<?php echo get_theme_root_uri(); ?>/Desafio-Wp-Oficial/images/Caminho 7 (1).svg"></a>
                    <span style="color: white;">Filmes</span>
                </div><!--menu-filmes-->
                <div class="menu-filmes">
                    <a href="/wordpress/Documentarios"><img src="<?php echo get_theme_root_uri(); ?>/Desafio-Wp-Oficial/images/Caminho 7 (1).svg"></a>
                    <span style="color: white;">Documentários</span>
                </div><!--menu-filmes-->
                <div class="menu-filmes">
                    <a href="/wordpress/Series"><img src="<?php echo get_theme_root_uri(); ?>/Desafio-Wp-Oficial/images/Grupo 62 (1).svg"></a>
                    <span style="color: white;">Séries</span>
            </div><!--menu-filmes-->
        </div><!--container-->
    </section>
<?php get_footer(); ?>