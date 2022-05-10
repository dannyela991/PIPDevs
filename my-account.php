<?php
// header
include 'app/views/header.php';
?>
<!-- content -->

<main>
    <section class="pages">
        <div class="page-header my-account">
            <div class="container">
                <h1>Minha Conta</h1>
                <p>Olá, <span class="username">Fulano</span></p>
            </div>
        </div>
        <div class="container">
            <div class="flex-container">
                <div class="content">                    
                    <div class="tab">
                        <!-- dados pessoais usuário comum -->
                        <button class="tablink" onclick="openPage('personal-comum-data')" id="defaultOpen">Dados Pessoais</button>
                        <!-- dados pessoais para usuários projetos -->
                        <button class="tablink" onclick="openPage('personal-data')" id="defaultOpen">Dados Pessoais</button>
                        <button class="tablink" onclick="openPage('buss-data')">Dados do Negócio</button>
                        <button class="tablink" onclick="openPage('project-data')">Descrição do Projeto</button>   
                    </div>
                    
                    <!-- tab usuário comum -->
                    <div id="personal-comum-data" class="tabcontent">
                        <h3>Meus dados pessoais</h3>
                        <div class="form-group">                    
                            <label for="name">Nome Completo</label>
                            <input type="text" id="name" name="name" value="Daniela Silva">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" value="danisilva.frontend@gmail.com">
                        </div>
                        <div class="flex-form">
                            <div class="read-more">
                                <a href="#" class="btn bg-green">Salvar</a>
                            </div>                            
                            <div class="read-more">
                                <a href="#" class="btn bg-gray">Cancelar</a>
                            </div>
                        </div>                          
                    </div>

                    <!-- tab usuário projetos -->
                    <div id="personal-data" class="tabcontent">
                        <h3>Meus dados pessoais</h3>
                        <div class="flex-form">
                            <div class="form-group">                    
                                <label for="name">Nome Completo</label>
                                <input type="text" id="name" name="name" value="Daniela Silva">
                            </div>
                            <div class="form-group">
                                <label for="cpf">CPF</label>
                                <input type="text" name="cpf" id="cpf" value="33355688877">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" value="danisilva.frontend@gmail.com">
                            </div>
                            <div class="form-group">
                                <label for="birth-date">Data de Nascimento</label>
                                <input type="date" name="birth-date" id="birth-date" value="06052022">
                            </div>
                            <div class="form-group">
                                <label for="gender">Gênero</label>
                                <select id="gender" name="gender">
                                    <option value="feminino" selected>Feminino</option>
                                    <option value="masculino">Masculino</option>
                                    <option value="nao_Binario">Não Binário</option>
                                    <option value="nao_Responder">Prefiro não Responder</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="uf">Onde você reside?</label>
                                <select id="uf" name="uf">
                                    <option value="SP" selected>São Paulo</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PR">Parana</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="city">Selecione uma Cidade</label>
                                <select id="city" name="city">
                                    <option value="SP" selected>São Paulo</option>
                                    <option value="RJ">Vila São José</option>
                                    <option value="MG">Barueri</option>
                                    <option value="PR">Lapa</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="formation">Formação</label>
                                <select id="formation" name="formation">
                                    <option value="ensino_Fundamental">Ensino Fundamental</option>
                                    <option value="ensino_Medio">Ensino Médio</option>
                                    <option value="ensino_Superior" selected>Ensino Superior</option>
                                    <option value="pos_graduacao">Pós-graduação</option>
                                    <option value="doutorado">Doutorado</option>
                                    <option value="pos_doutorado">Pós-doutorado</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="function">Seu cargo</label>
                                <input type="text" name="function" id="function" value="Cargo">
                            </div>
                            <div class="form-group">
                                <label for="tel-phone">Telefone Celular</label>
                                <input type="text" name="tel-phone" id="tel-phone" value="(11)956843665">
                            </div>
                            <div class="form-group">
                                <label for="tel-fixed">Telefone Residencial ou Comercial</label>
                                <input type="tel" name="tel-fixed" id="tel-fixed" value="(11)56843665">
                            </div>
                            <div class="form-group">
                                <label for="enterprise">Nome do Negócio/Empreendimento</label>
                                <input type="text" name="enterprise" id="enterprise" value="GVA">
                            </div>
                        </div>  
                        <div class="form-group">                    
                            <div id="project-images-container">
                                <ul class="project-images">
                                    <li class="image">
                                        <a target="_blank"href="app/assets/images/ods3.png">
                                            <img src="app/assets/images/ods3.png"/>
                                        </a>                                      
                                    </li>
                                </ul>
                                <a href="#" class="edit-images">Alterar imagem</a>
                            </div>
                        </div>            
                        <div class="flex-form">
                            <div class="read-more">
                                <a href="#" class="btn bg-green">Salvar</a>
                            </div>                            
                            <div class="read-more">
                                <a href="#" class="btn bg-gray">Cancelar</a>
                            </div>
                        </div>  
                        
                    </div>

                    <div id="buss-data" class="tabcontent">
                        <h3>Dados do meu negócio</h3>
                        <div class="form-group">
                            <label for="razao_Social">Razão Social</label>
                            <input type="text" name="razao_Social" id="razao_Social" value="Razão social da empresa">
                        </div>              
                        <div class="flex-form">
                            <div class="form-group">
                                <label for="cnpj">CNPJ</label>  
                                <input type="text" id="cnpj" name="cnpj" value="Meu CNPJ">
                            </div>
                            <div class="form-group">
                                <label for="foundation_Date">Data de Fundação</label>
                                <input type="date" name="foundation_Date" id="foundation_Date" value="Daniela Silva">
                            </div>
                            <div class="form-group">
                                <label for="uf_Company">Estado</label>
                                <select id="uf_Company" name="uf_Company">
                                    <option value="SP" selected>São Paulo</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PR">Parana</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="city_Company">Cidade</label>
                                <select id="city_Company" name="city_Company">
                                    <option value="SP" selected>São Paulo</option>
                                    <option value="RJ">Vila São José</option>
                                    <option value="MG">Barueri</option>
                                    <option value="PR">Lapa</option>
                                </select>
                            </div>
                        </div>                    
                        <div class="form-group">
                            <label for="address">Endereço</label>
                            <input type="text" name="address" id="address" value="Endereço da empresa aqui">
                        </div>                     
                        <div class="flex-form">
                            <div class="read-more">
                                <a href="#" class="btn bg-green">Salvar</a>
                            </div>                            
                            <div class="read-more">
                                <a href="#" class="btn bg-gray">Cancelar</a>
                            </div>
                        </div>  
                    </div>

                    <div id="project-data" class="tabcontent">
                        <h3>Descrição do Projeto</h3>
                        <div class="form-group">                    
                            <label for="">Descreva o problema social e/ou ambiental que seu negócio ou tecnologia resolve.</label>
                            <textarea name="message" rows="3">Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor sit amet consectetur adipisicing elit</textarea>
                        </div>
                        <div class="form-group">                    
                            <label for="">PITCH: Qual a solução (Produto/Serviço) que seu negócio ou tecnologia traz para esse problema? (50 palavras)</label>
                            <textarea name="message" rows="2" cols="30">Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor sit amet consectetur adipisicing elit</textarea>
                        </div>
                        <div class="form-group">                    
                            <label for="">Seu negócio incorpora uma inovação de produto, processo ou serviço?</label>                        
                            <label for="">                            
                                <input type="radio" name="" value="Objetivo 2">
                                Não
                            </label>
                            <label for="">                            
                                <input type="radio" name="" checked value="Objetivo 2">
                                Sim  (Descreva-a. 25 palavras)
                            </label>
                            <textarea name="message" rows="3" cols="30">Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor sit amet consectetur adipisicing elit</textarea>
                        </div>
                        <div class="flex-form">
                            <div class="form-group">                    
                                <label for="">Site</label>
                                <input type="text" name="" id="">
                            </div>
                            <div class="form-group">                    
                                <label for="">Instagram do Negócio</label>
                                <input type="text" name="" id="">
                            </div>                        
                            <div class="form-group">                    
                                <label for="">Facebook do Negócio</label>
                                <input type="text" name="" id="">
                            </div>
                            <div class="form-group">                    
                                <label for="">Linkedin do Negócio</label>
                                <input type="text" name="" id="">
                            </div>
                        </div>     
                        <div class="form-group">                    
                            <div id="project-images-container">
                                <ul class="project-images">
                                    <li class="image">
                                        <a target="_blank"href="app/assets/images/ods3.png">
                                            <img src="app/assets/images/ods3.png"/>
                                        </a>                                      
                                    </li>
                                    <li class="image">
                                        <a target="_blank"href="app/assets/images/ods3.png">
                                            <img src="app/assets/images/ods3.png"/>
                                        </a>                                   
                                    </li>
                                </ul>
                                <a href="#" class="edit-images">Alterar imagens</a>
                            </div>
                        </div>                        
                        <div class="flex-form">
                            <div class="read-more">
                                <a href="#" class="btn bg-green">Salvar</a>
                            </div>                            
                            <div class="read-more">
                                <a href="#" class="btn bg-gray">Cancelar</a>
                            </div>
                        </div>  
                    </div>

                </div>
                <div class="sidebar">
                    <ul class="links-account">
                        <li><a href="#" class="btn">Indicar homenagiados</a></li> 
                        <li><a href="#" class="btn">Votar em Projetos</a></li> 
                        <li><a href="#" class="btn">Alterar Senha</a></li> 
                    </ul>
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