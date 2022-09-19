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
                        <button class="tablink" onclick="openPage('projects-data')">Projetos</button> 
                        <button class="tablink" onclick="openPage('homenagens-data')">Homengens</button> 
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
                                <a href="#" class="btn bg-gray">Cancelar</a>
                            </div>
                            <div class="read-more">
                                <a href="#" class="btn bg-green">Salvar</a>
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
                                <input type="date" name="birth-date" id="birth-date">
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
                                <a href="#" class="btn bg-gray">Cancelar</a>
                            </div>
                            <div class="read-more">
                                <a href="#" class="btn bg-green">Salvar</a>
                            </div>               
                        </div>  
                        
                    </div>    

                    <div id="projects-data" class="tabcontent">
                        <h3>Meus Projetos</h3>
                        <div class="content-archives">
                            <div class="card-project">
                                <div class="title-project flex-container">
                                    <div class="logo-project">
                                        <a href="project-single.php"><img src="app/assets/images/gva.png" alt=""/></a>
                                    </div>
                                    <div class="title">                                        
                                        <a href="project-single.php"><h4>Ecoponto de entrega voluntária</h4></a>
                                    </div>
                                </div>
                                <div class="read-more">
                                    <a href="edit-project.php" class="btn bg-border"><i class="far fa-edit"></i> Editar Projeto</a>
                                </div>
                            </div>
                            <div class="card-project">
                                <div class="title-project flex-container">
                                    <div class="logo-project">
                                        <a href="project-single.php"><img src="app/assets/images/denario.png" alt=""/></a>
                                    </div>
                                    <div class="title">                                        
                                        <a href="project-single.php"><h4>ECOPONTO DE ENTREGA VOLUNTÁRIA</h4></a>
                                    </div>
                                </div>
                                <div class="read-more">
                                    <a href="edit-project.php" class="btn bg-border"><i class="far fa-edit"></i> Editar Projeto</a>
                                </div>
                            </div>
                            <div class="card-project">
                                <div class="title-project flex-container">
                                    <div class="logo-project">
                                        <a href="project-single.php"><img src="app/assets/images/denario.png" alt=""/></a>
                                    </div>
                                    <div class="title">                                        
                                        <a href="project-single.php"><h4>ECOPONTO DE ENTREGA VOLUNTÁRIA</h4></a>
                                    </div>
                                </div>
                                <div class="read-more">
                                    <a href="edit-project.php" class="btn bg-border"><i class="far fa-edit"></i> Editar Projeto</a>
                                </div>
                            </div>                            
                        </div>
                    </div>

                    <div id="homenagens-data" class="tabcontent">
                        <h3>Minhas Indicações</h3>
                        <div class="list-impacts">
                            <div class="list-item flex-container">
                                <div class="dados">
                                    <p class="name">Nome Cidadão de Impacto</p>
                                    <p class="indicacao">Indicado por: <span>Liderança Ambiental</span></p> 
                                    <ul class="list-social">
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>                          
                            </div>
                            <div class="list-item flex-container">
                                <div class="dados">
                                    <p class="name">Nome Cidadão de Impacto</p>
                                    <p class="indicacao">Indicado por: <span>Liderança Ambiental</span></p>
                                    <ul class="list-social">
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="list-item flex-container">
                                <div class="dados">
                                    <p class="name">Nome Cidadão de Impacto</p>
                                    <p class="indicacao">Indicado por: <span>Liderança Ambiental</span><span>Ação Econômica</span></p>
                                    <ul class="list-social">
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>   
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="sidebar">
                    <ul class="links-account">
                        <li><a href="projects.php" class="btn bg-green">Vote nos Negócios de Impacto</a></li> 
                        <li><a href="projects.php" class="btn bg-green">Vote nos Ecossistemas de Impacto</a></li> 
                        <li><a href="form-honor.php" class="btn">Indicar homenagiados</a></li> 
                        <li><a href="#" class="btn">Alterar Senha</a></li> 
                    </ul>
                </div>
            </div>
        </div>    
    </section>
</main>
    
    
<?php
// footer
include 'app/views/footer.php';
?>