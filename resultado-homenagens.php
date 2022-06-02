<?php
// header
include 'app/views/header.php';
?>
<!-- content -->

<main>
    <section class="pages homenagens">
        <div class="page-header resultado">
            <div class="container">
                <h1><small>Resutado de busca</small>
                <br>Homenagiados</h1> 
            </div>
        </div>
        <div  class="container">
            <div class="search-homenagens">
                <form class="form-homenagens" action="">
                    <input type="text" placeholder="Pesquisar indicados..." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="txt-resultado">
                <p>Você pesquisou por <span>Fulano de Tal</span>&nbsp;&nbsp;&nbsp;<a href=""> <i class="far fa-times-circle"></i> Limpar</a></p>
                <!-- not result -->
                <p>Não encontramos nenhum resultado referente a sua busca</p>
                <!-- not result -->
            </div>
            <div class="content result">
                <!-- CIDADÃO DE IMPACTO -->
                <div class="list-item">
                    <div class="flex-container">
                        <div class="votos">
                            <span class="number-votos">521</span>
                            <br>indicações
                        </div>
                        <div class="dados">
                            <p class="name">Nome Cidadão de Impacto</p>
                            <p class="categoria-honor">Cidadão de Impacto</p>
                            <p class="indicacao">Indicado por: <span>Liderança Ambiental</span></p> 
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                        <div class="btn-voto">
                            <button type="button" class="btn"><i class="far fa-thumbs-up"></i> Indicar</button>   
                            <a href="#" class="gray">Quero indicar para outra categoria</a>                         
                        </div>
                    </div>                                                      
                </div>         
                <!-- CIDADÃO DE IMPACTO -->

                <!-- INSTITUIÇÃO DE IMPACTO -->
                <div class="list-item">
                    <div class="flex-container">
                        
                        <div class="votos">
                            <span class="number-votos">521</span>
                            <br>indicações
                        </div>
                        <div class="dados">
                            <p class="name">Nome Instituição de Impacto</p>
                            <p class="categoria-honor">Instituição de Impacto</p>
                            <p class="indicacao">Indicado por: <span>Liderança Ambiental</span></p> 
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                        <div class="btn-voto">
                            <button type="button" class="btn"><i class="far fa-thumbs-up"></i> Indicar</button>   
                            <a href="#" class="gray">Quero indicar para outra categoria</a>                         
                        </div>
                    </div>                                                       
                </div>
                <!-- INSTITUIÇÃO DE IMPACTO -->

                <!-- COMUNICADOR DE IMPACTO -->
                <div class="list-item">
                    <div class="flex-container">
                        <div class="votos">
                            <span class="number-votos">521</span>
                            <br>indicações
                        </div>
                        <div class="dados">
                            <p class="name">Nome Comunicador de Impacto</p>
                            <p class="categoria-honor">Comunicador de Impacto</p>
                            <p class="indicacao">Indicado por: <span>Liderança Ambiental</span></p> 
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                        <div class="btn-voto">
                            <button type="button" class="btn"><i class="far fa-thumbs-up"></i> Indicar</button>
                            <a href="#" class="gray">Quero indicar para outra categoria</a>                         
                        </div>
                    </div>                                                      
                </div>
                <!-- COMUNICADOR DE IMPACTO -->
            </div>
            
        </div>
    </section>
</main>
    
    
<?php
// footer
include 'app/views/footer.php';
?>