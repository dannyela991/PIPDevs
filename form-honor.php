<?php
// header
include 'app/views/header.php';
?>
<!-- content -->

<main>

    <section class="regForm">
        <div class="page-header">
            <div class="container">
                <h1>Indique aqui seu<br><span>homenageado<span></h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus possimus aliquid recusandae repellendus cupiditate nesciunt</p>
            </div>
        </div>
        <div class="container">
            <form id="regProject">
                <!-- Indicação -->
                <fieldset class="step">
                    <div class="form-group">
                        <label>Qual será sua indicação?</label>
                        <label for="">                            
                            <input type="radio" name="" value="Cidadão de impacto">
                            Cidadão de impacto
                        </label> 
                        <label for="">                            
                            <input type="radio" name="" value="Instituição de Impacto">
                            Instituição de Impacto
                        </label>  
                        <label for="">                            
                            <input type="radio" name="" value="Comunicador de Impacto">
                            Comunicador de Impacto
                        </label>  
                    </div>
                    <div class="flex-form">
                        <div class="read-more">
                            <a href="#" class="btn bg-gray">Voltar</a>
                        </div>                            
                        <div class="read-more">
                            <a href="#" class="btn bg-gray">Próximo</a>
                        </div>
                    </div>
                </fieldset>
                <!-- dados do Cidadão de Impacto -->
                <fieldset class="step">
                    <h2>Cidadão de Impacto</h2>
                    <div class="form-group">                    
                        <label for="name">Nome da Pessoa</label>
                        <input type="text" id="name" name="name">
                    </div>
                    <div class="flex-form">
                        <div class="form-group">
                            <label for="function">Facebook</label>
                            <input type="url" name="facebook" id="facebook">
                        </div>
                        <div class="form-group">
                            <label for="tel-phone">Instagram</label>
                            <input type="url" name="instagram" id="instagram">
                        </div>
                        <div class="form-group">
                            <label for="tel-fixed">Linkedin</label>
                            <input type="url" name="linkedin" id="linkedin">
                        </div>
                        <div class="form-group">
                            <label for="enterprise">Youtube</label>
                            <input type="url" name="youtube" id="youtube">
                        </div>
                    </div> 
                    <div class="form-group">
                        <label>Por qual razão a indicação</label>
                        <label for="">                            
                            <input type="radio" name="" value="Liderança Ambiental">
                            Liderança Ambiental 
                        </label> 
                        <label for="">                            
                            <input type="radio" name="" value="Liderança Cultural">
                            Liderança Cultural
                        </label>  
                        <label for="">                            
                            <input type="radio" name="" value="Liderança Econômica">
                            Liderança Econômica
                        </label>  
                        <label for="">                            
                            <input type="radio" name="" value="Liderança Social">
                            Liderança Social
                        </label> 
                    </div>
                    <div class="flex-form">
                        <div class="read-more">
                            <a href="#" class="btn bg-gray">Voltar</a>
                        </div>                            
                        <div class="read-more">
                            <a href="#" class="btn bg-gray">Enviar</a>
                        </div>
                    </div>                   
                </fieldset>
                <!-- dados do Instituição de Impacto -->
                <fieldset class="step">
                    <h2>ONG</h2>
                    <div class="form-group">                    
                        <label for="name">Nome da Organização</label>
                        <input type="text" id="name" name="name">
                    </div>
                    <div class="flex-form">
                        <div class="form-group">
                            <label for="function">Facebook</label>
                            <input type="url" name="facebook" id="facebook">
                        </div>
                        <div class="form-group">
                            <label for="tel-phone">Instagram</label>
                            <input type="url" name="instagram" id="instagram">
                        </div>
                        <div class="form-group">
                            <label for="tel-fixed">Linkedin</label>
                            <input type="url" name="linkedin" id="linkedin">
                        </div>
                        <div class="form-group">
                            <label for="enterprise">Youtube</label>
                            <input type="url" name="youtube" id="youtube">
                        </div>
                    </div> 
                    <div class="form-group">
                        <label>Por qual razão a indicação</label>
                        <label for="">                            
                            <input type="radio" name="" value="Ação Ambiental">
                            Ação Ambiental 
                        </label> 
                        <label for="">                            
                            <input type="radio" name="" value="Ação Cultural">
                            Ação Cultural
                        </label>  
                        <label for="">                            
                            <input type="radio" name="" value="Ação Econômica">
                            Ação Econômica
                        </label>  
                        <label for="">                            
                            <input type="radio" name="" value="Ação Social">
                            Ação Social
                        </label> 
                    </div>
                    <div class="flex-form">
                        <div class="read-more">
                            <a href="#" class="btn bg-gray">Voltar</a>
                        </div>                            
                        <div class="read-more">
                            <a href="#" class="btn bg-gray">Enviar</a>
                        </div>
                    </div>                   
                </fieldset>
                <!-- dados do Comunicador de Impacto -->
                <fieldset class="step">
                    <h2>Comunicador de Impacto</h2>
                    <div class="form-group">                    
                        <label for="name">Nome</label>
                        <input type="text" id="name" name="name">
                    </div>
                    <div class="flex-form">
                        <div class="form-group">
                            <label for="function">Facebook</label>
                            <input type="url" name="facebook" id="facebook">
                        </div>
                        <div class="form-group">
                            <label for="tel-phone">Instagram</label>
                            <input type="url" name="instagram" id="instagram">
                        </div>
                        <div class="form-group">
                            <label for="tel-fixed">Linkedin</label>
                            <input type="url" name="linkedin" id="linkedin">
                        </div>
                        <div class="form-group">
                            <label for="enterprise">Youtube</label>
                            <input type="url" name="youtube" id="youtube">
                        </div>
                    </div> 
                    <div class="form-group">
                        <label>Por qual razão a indicação</label>
                        <label for="">                            
                            <input type="radio" name="" value="Comunicador de Impacto">
                            Comunicador de Impacto
                        </label> 
                        <label for="">                            
                            <input type="radio" name="" value="Engajamento Cultural">
                            Engajamento Cultural
                        </label>  
                        <label for="">                            
                            <input type="radio" name="" value="Engajamento Econômico">
                            Engajamento Econômico
                        </label>  
                        <label for="">                            
                            <input type="radio" name="" value="Engajamento Social">
                            Engajamento Social
                        </label> 
                    </div>
                    <div class="flex-form">
                        <div class="read-more">
                            <a href="#" class="btn bg-gray">Voltar</a>
                        </div>                            
                        <div class="read-more">
                            <a href="#" class="btn bg-gray">Enviar</a>
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