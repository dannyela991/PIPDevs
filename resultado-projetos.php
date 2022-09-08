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
                <br>Projetos</h1> 
            </div>
        </div>
        <div  class="container">
            <div class="search-homenagens">
                <form class="form-homenagens" action="">
                    <input type="text" placeholder="Pesquisar projetos..." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="txt-resultado">
                <p>Você pesquisou por <span>Projeto</span>&nbsp;&nbsp;&nbsp;<a href=""> <i class="far fa-times-circle"></i> Limpar</a></p>
                <!-- not result -->
                <p>Não encontramos nenhum resultado referente a sua busca</p>
                <!-- not result -->
            </div>
            <div class="content result">
                <div class="content-archives">
                    <div class="card-project">
                        <div class="title-project flex-container">
                            <div class="logo-project">
                                <a href="project-single.php"><img src="app/assets/images/gva.png" alt=""/></a>
                            </div>
                            <div class="title">                                        
                                <a href="project-single.php"><h4>Ecoponto de entrega voluntária</h4></a>
                                <p class="eixo">Cidades</p>
                            </div>
                        </div>
                        <div class="description-project">
                            <p class="city-uf">TRÊS COROAS | RS</p>
                            <p>Promover a coleta seletiva nas escolas e entidades com foco na educação ambiental, através do incentivo da reciclagem, economia solidária e sustentabilidade.</p>
                            <div class="img-ods">
                                <ul>
                                    <li><img src="app/assets/images/img-ods/01.png" alt=""/></li>
                                    <li><img src="app/assets/images/img-ods/04.png" alt=""/></li>
                                    <li><img src="app/assets/images/img-ods/09.png" alt=""/></li>
                                    <li><img src="app/assets/images/img-ods/16.png" alt=""/></li>
                                </ul>
                            </div>
                            <div class="list-tags">
                                <ul>
                                    <li>categoria</li>
                                    <li>categoria</li>
                                    <li>categoria</li>
                                    <li>categoria</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="votos"><span class="number-votos">3521</span> voto(s)</div>
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