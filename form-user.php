<?php
// header
include 'app/views/header.php';
?>
<!--  content -->
<main>

    <section class="regForm">
        <div class="page-header">
            <div class="container">
                <h1>Cadastro</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus possimus aliquid recusandae repellendus cupiditate nesciunt</p>
            </div>
        </div>

        <div class="container">
            <form id="form_Users">
                <fieldset class="step">
                    <div class="form-group">                    
                        <label for="name">Nome Completo</label>
                        <input type="text" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email <span>Por favor, digite seu melhor e-mail</span></label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="flex-form">
                        <div class="form-group">
                            <label for="password">Senha <span>Digite uma senha com no mínimo 6 caracteres</span></label>
                            <input type="password" name="password" id="password">
                        </div>
                        <div class="form-group">
                            <label for="password-confirmed">Confirme sua senha</label>
                            <input type="password" name="password-confirmed" id="password-confirmed">
                        </div>
                    </div>
                    <div class="form-aceite">                                           
                        <div class="form-group">                                          
                            <label for="">                            
                                <input type="checkbox" name="" value="pol_Plataforma">
                                Eu declaro estar ciente com a <a class="blue" href="regulamento.php" target="_blank">Termo de Uso, Política de Privacidade de Dados.</a>
                            </label>
                        </div>                                                               
                        <div class="form-group">                                          
                            <label for="">                            
                                <input type="checkbox" name="" value="newsletter">
                                Eu aceito receber as newsletters e informações referentes ao prêmio e parceiros/patrocinadores.
                            </label>
                        </div>  
                    </div> 
                    <div class="flex-form">
                        <div class="read-more">
                            <a href="#" class="btn bg-gray">Cancelar</a>
                        </div>                            
                        <div class="read-more">
                            <a href="#" class="btn bg-gray">Cadastrar</a>
                        </div>
                    </div>    
                </fieldset>
            </form>
        </div>
    </section>

</main>

<?php
// footer
include 'app/views/footer.php';
?>