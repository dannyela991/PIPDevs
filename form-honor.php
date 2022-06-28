<?php
// header
include 'app/views/header.php';
?>
<!-- content -->

<main>

    <section class="regForm honor-form">
        <div class="page-header">
            <div class="container">
                <h1>Impactos Positivos 2022<br><span>homenagens<span></h1>                    
            </div>
        </div>
        <div class="container">
            <div class="flex-container">
                <div class="content-honor">
                    <p>Os <strong>Negócios de Impacto</strong> e todos seus atores desse novo <strong>Ecossistema</strong>, nascem da vontade de protagonizar soluções efetivas para os mais diversos desafios socioambientais da sociedade por meio de sua atividade principal, oferecendo modelos de negócios de uma forma escalável financeiramente sustentável com um propósito maior.</p>
                    <p>Para participar da <strong>edição 2022 do Prêmio Impactos Positivos</strong>, os projetos cadastrados em todas as categorias, deverão cumprir obrigatoriamente esse requisto acima.</p>
                    <p>Para honrar todos os outras iniciativas, como organizações sem fins lucrativos, projetos e pessoas incríveis que impactam positivamente seu universo, a sociedade civil poderá indicar um homenageado por fazer a diferença. Este homenageado receberá um certificado digital do Impactos Positivos 2022 que poderá ser baixado e compartilhado para todo o mundo saber suas nobres ações.</p>
                    <p>Poderão ser indicados de acordo com as categorias abaixo:</p>
                    <p><strong>Cidadão de Impacto</strong> nas subcategorias: Líderes que geram impacto positivo em nossa sociedade/comunidade</p>
                    <p><strong>Liderança no âmbito Ambiental, Cultural, Econômico ou Social.</strong></p>
                    <p><strong>Instituições de Impacto</strong> nas subcategorias: Instituições sem fins lucrativos que agem em frentes que impactam positivamente nossa sociedade/comunidade</p>
                    <p><strong>Ação no âmbito Ambiental, Cultural, Econômico ou Social.</strong></p>
                    <p><strong>Comunicador de Impacto</strong> nas subcategorias: Comunicadores e meios de comunicação que ativamente educam e informam de forma positiva nossa sociedade/comunidade</p>
                    <p><strong>Engajamento no âmbito Ambiental, Cultural, Econômico ou Social.</strong></p>
                </div> 
                <form id="regProject">
                    <!-- Indicação -->
                    <fieldset class="step">
                        <div class="form-group">
                            <h2>Indique aqui seu homenageado</h2>
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
        </div>
        
    </section>
    
</main>
    
    
<?php
// footer
include 'app/views/footer.php';
?>