<?php
// header
include 'app/views/header.php';
?>
<!-- content -->

<main>

    <section class="regForm honor-form">
        <div class="page-header">
            <div class="container">
                <h1>Indique aqui seu <br><span>homenageado<span></h1>                    
            </div>
        </div>
        <div class="container">
            <form id="regProject">
                <!-- Indicação -->
                <fieldset class="step">
                    <div class="form-group">
                        <label>Qual será sua indicação?</label>
                        <label for="indicacao">                            
                            <input type="radio" name="indicacao" value="Cidadão de impacto">
                            Cidadão de impacto
                        </label> 
                        <label for="indicacao">                            
                            <input type="radio" name="indicacao" value="Instituição de Impacto">
                            Instituição de Impacto
                        </label>  
                        <label for="indicacao">                            
                            <input type="radio" name="indicacao" value="Comunicador de Impacto">
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
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email">
                    </div>
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
                        <label for="indicacao">                            
                            <input type="radio" name="indicacao" value="Liderança Ambiental">
                            Liderança Ambiental 
                        </label> 
                        <label for="indicacao">                            
                            <input type="radio" name="indicacao" value="Liderança Cultural">
                            Liderança Cultural
                        </label>  
                        <label for="indicacao">                            
                            <input type="radio" name="indicacao" value="Liderança Econômica">
                            Liderança Econômica
                        </label>  
                        <label for="indicacao">                            
                            <input type="radio" name="indicacao" value="Liderança Social">
                            Liderança Social
                        </label> 
                    </div>
                    <div class="form-group">
                        <label for="">Descreva a atvidade que ele(a) desenvolve (50 palavras)</label>
                        <textarea name="message" rows="3" cols="30"></textarea>
                    </div>
                    <div class="flex-form">
                        <div class="read-more">
                            <a href="#" class="btn bg-gray">Voltar</a>
                        </div>                            
                        <div class="read-more">
                            <a href="#" class="btn bg-green">Enviar</a>
                        </div>
                    </div>                   
                </fieldset>
                <!-- dados do Instituição de Impacto -->
                <fieldset class="step">
                    <h2>ONG</h2>
                    <div class="form-group">                    
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email">
                    </div>
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
                        <label for="indicacao">                            
                            <input type="radio" name="indicacao" value="Ação Ambiental">
                            Ação Ambiental 
                        </label> 
                        <label for="indicacao">                            
                            <input type="radio" name="indicacao" value="Ação Cultural">
                            Ação Cultural
                        </label>  
                        <label for="indicacao">                            
                            <input type="radio" name="indicacao" value="Ação Econômica">
                            Ação Econômica
                        </label>  
                        <label for="indicacao">                            
                            <input type="radio" name="indicacao" value="Ação Social">
                            Ação Social
                        </label> 
                    </div>
                    <div class="form-group">
                        <label for="">Descreva a atvidade que a instituição desenvolve (50 palavras)</label>
                        <textarea name="message" rows="3" cols="30"></textarea>
                    </div>
                    <div class="flex-form">
                        <div class="read-more">
                            <a href="#" class="btn bg-gray">Voltar</a>
                        </div>                            
                        <div class="read-more">
                            <a href="#" class="btn bg-green">Enviar</a>
                        </div>
                    </div>                   
                </fieldset>
                <!-- dados do Comunicador de Impacto -->
                <fieldset class="step">
                    <h2>Comunicador de Impacto</h2>
                    <div class="form-group">                    
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email">
                    </div>
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
                        <label for="indicacao">                            
                            <input type="radio" name="indicacao" value="Comunicador de Impacto">
                            Comunicador de Impacto
                        </label> 
                        <label for="indicacao">                            
                            <input type="radio" name="indicacao" value="Engajamento Cultural">
                            Engajamento Cultural
                        </label>  
                        <label for="indicacao">                            
                            <input type="radio" name="indicacao" value="Engajamento Econômico">
                            Engajamento Econômico
                        </label>  
                        <label for="indicacao">                            
                            <input type="radio" name="indicacao" value="Engajamento Social">
                            Engajamento Social
                        </label> 
                    </div>
                    <div class="form-group">
                        <label for="">Descreva a atvidade que ele(a) desenvolve (50 palavras)</label>
                        <textarea name="message" rows="3" cols="30"></textarea>
                    </div>
                    <div class="flex-form">
                        <div class="read-more">
                            <a href="#" class="btn bg-gray">Voltar</a>
                        </div>                            
                        <div class="read-more">
                            <a href="#" class="btn bg-green">Enviar</a>
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