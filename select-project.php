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
                        <h1>Escolha sua Categoria</h1>
                    </div>
                    <div class="btn-project">
                        <div class="btn-img">
                            <a href="form-projects-bus.php"><img src="app/assets/images/icon-business.svg"/></a>
                        </div>
                        <div class="btn-txt">
                            <h3><a href="form-projects-bus.php">Negócio de Impacto</a> </h3>
                            <p>Negócios (empresas e iniciativas) que se destacam no ecossistema de impacto</p>
                            <p class="button"><a href="form-projects-bus.php" class="btn bg-gray">Inscrever agora</a></p>
                        </div>
                    </div>
                    <div class="btn-project">
                        <div class="btn-img">
                            <a href="form-projects-eco.php"><img src="app/assets/images/icon-ecosystem.svg"/></a>
                        </div>
                        <div class="btn-txt">
                            <h3><a href="form-projects-eco.php">Ecossistema de Impacto</a></h3>
                            <p>Organizações do Ecossistema de Impacto do Brasil</p>
                            <p class="button"><a href="form-projects-eco.php" class="btn bg-gray">Inscrever agora</a></p>
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