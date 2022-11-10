<?php 
    //Template name: PaginaSolo
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
		wp_head();
	?>
    <link rel="shortcut icon" href="<?php echo get_theme_root_uri(); ?>/Desafio-Wp-Oficial/images/Grupo 1.svg" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo get_theme_root_uri(); ?>/Desafio-Wp-Oficial/page-single.css">
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
    <section class="title">
        <div class="container">
            <div id="home">

            </div><!--home-->
            <div class="video_player">
                <iframe width="95%" height="100%" id="mainOver" autoplay loop></iframe>
            </div><!--video_player-->
            <div class="sobre-single" id="sobre-single">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam dolor, reprehenderit reiciendis, deserunt cupiditate vel dolores voluptate, cumque porro repudiandae delectus omnis iure pariatur quas incidunt aspernatur ex quis. Voluptatem accusantium eius debitis culpa consequuntur impedit unde porro tempore, laboriosam voluptas cum quos labore a est quibusdam aut adipisci illo!</p>
            </div><!--sobre-single-->
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