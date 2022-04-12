<?php
// header
include 'app/views/header.php';
?>
<!-- content -->

<main>

    <section class="select-projetcs">
        <div class="container">
            <div class="flex-container">
                <div class="col-content">
                    <div class="page-header">
                        <h1>Escolha qual categoria se encaixa seu projeto</h1>
                    </div>
                    <div class="btn-project">
                        <div class="btn-img">
                            <a href="form-projects-bussiness.php"><img src="app/assets/images/icon-business.svg"/></a>
                        </div>
                        <div class="btn-txt">
                            <h3><a href="form-projects-bussiness.php">Negócio de Impacto</a> </h3>
                            <p>Negócios (empresas e iniciativas) que se destacam no ecossistema de impacto</p>
                            <p class="button"><a href="form-projects-bussiness.php" class="btn bg-gray">Inscrever agora</a></p>
                        </div>
                    </div>
                    <div class="btn-project">
                        <div class="btn-img">
                            <a href=""><img src="app/assets/images/icon-ecosystem.svg"/></a>
                        </div>
                        <div class="btn-txt">
                            <h3><a href="">Ecossistema de Impacto</a></h3>
                            <p>Regiões que estão desenvolvendo ecossistemas locais de impacto modelo</p>
                            <p class="button"><a href="#" class="btn bg-gray">Inscrever agora</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-ads">                    
                    <div class="img-ads">
                        <img class="ads-img" src="app/assets/images/ads-post.png" />
                    </div>                    
                    <div class="img-ads">
                        <img class="ads-img" src="app/assets/images/ads-post.png" />
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