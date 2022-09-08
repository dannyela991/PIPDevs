<?php
// header
include 'app/views/header.php';
?>
<!-- content -->

<main>
    <section class="list-projects fases archives">
        <div class="page-header resultado">
            <div class="container">
                <h1><small>Resutado de busca</small>
                <br>Notícias</h1> 
            </div>
        </div>
        <div  class="container">
            <div class="search-homenagens">
                <form class="form-homenagens" action="">
                    <input type="text" placeholder="Pesquisar notícias..." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="txt-resultado">
                <p>Você pesquisou por <span>Notícia</span>&nbsp;&nbsp;&nbsp;<a href=""> <i class="far fa-times-circle"></i> Limpar</a></p>
                <!-- not result -->
                <p>Não encontramos nenhum resultado referente a sua busca</p>
                <!-- not result -->
            </div>
            <div class="content result">
                <div class="content-archives">
                    <div class="card posts">
                        <a href="media-single.php">
                            <div class="img-card">
                                <span class="category">Vídeo</span>
                            </div>                                
                        </a>                            
                        <div class="description-article">
                            <a href="media-single.php"><h2>Noruega e o luxo inusitado IV com Liliana Calisto e Maria Alarcon de V.O.S.</h2></a>
                            <p>Antonella Braillard convida a equipe de V.O.S (DMC) para falar sobre os serviços que eles oferecem para os passageiros mais exigentes. Venha descobrir uma variedade de atividades que pode-se incluir ao considerar a Escandinávia como destino.</p>
                            <div class="read-more">
                                <a class="link-archives" href="media-single.php">Assistir</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            </div>
        </section>
    </main>
        
        
    <?php
    // footer
    include 'app/views/footer.php';
    ?>