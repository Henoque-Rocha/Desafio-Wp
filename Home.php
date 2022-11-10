<?php 
    //Template name: Home
?>
<?php get_header(); ?>

<section class="main" id="mainOver">
        <div class="overlay"></div><!--overlay-->
        <div class="container" id="home">

        </div><!--container-->
    </section>
    <section class="Sessao">
        <div class="container">
            <div class="Titulo_Filmes">
                <h2><a href="/wordpress/Filmes">Filmes</a></h2>
                <div class="Filmes_" id="Filmes">

                </div><!--Filmes-->
            </div><!--Titulo_Filmes-->
        </div><!--container-->
    </section>
    <section class="Sessao">
        <div class="container">
            <div class="Titulo_Documentarios">
                <h2><a href="/wordpress/Documentarios">Documentários</a></h2>
                <div class="Documentarios_" id="Documentarios">
                    
                </div><!--Documentarios-->
            </div><!--Titulo_Documentarios-->
        </div><!--container-->
    </section>
    <section class="Sessao">
        <div class="container">
            <div class="Titulo_Series">
                <h2><a href="/wordpress/Series">Séries</a></h2>
                <div class="Series_" id="Series">
                    
                </div><!--Séries-->
            </div><!--Titulo_Series-->
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