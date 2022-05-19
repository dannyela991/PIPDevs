<?php
// header
include 'app/views/header.php';
?>
<!-- content -->

<main>

    <section class="regForm">
        <div class="page-header">
            <div class="container">
                <h1>Cadastro<br><span>Ecossistema de Impacto<span></h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus possimus aliquid recusandae repellendus cupiditate nesciunt</p>
            </div>
        </div>
        <div class="container">

            <form id="regProject">

                <!-- SUBCATEGORIA -->
                <fieldset class="step">
                    <h2>Subcategoria</h2>
                    <div class="form-group">
                        <label>Em qual Ecossistema de Impacto se enquadra seu projeto</label>
                        <label for="">                            
                            <input type="radio" name="" value="Investidores">
                            Investidores
                        </label> 
                        <label for="">                            
                            <input type="radio" name="" value="Setor Público">
                            Setor Público
                        </label>  
                        <label for="">                            
                            <input type="radio" name="" value="Dinamizadores">
                            Dinamizadores
                        </label>  
                        <label for="">                            
                            <input type="radio" name="" value="Comunidades">
                            Comunidades
                        </label>  
                        <label for="">                            
                            <input type="radio" name="" value="Agências de fomento">
                            Grandes Empresas
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

                <!-- perfil INVESTIDORES -->
                <fieldset class="step">
                    <h2>Escolha um dos perfis abaixo</h2>
                        <div class="form-group">
                            <label>Escolha um dos perfis abaixo de acordo com o tipo de investidor que é</label>
                            <label for="">                            
                                <input type="radio" name="" value="Intermediário de serviços financeiros">
                                Intermediário de serviços financeiros
                            </label> 
                            <label for="">                            
                                <input type="radio" name="" value="Bancos privados">
                                Bancos privados
                            </label>  
                            <label for="">                            
                                <input type="radio" name="" value="Bancos comerciais públicos">
                                Bancos comerciais públicos
                            </label>  
                            <label for="">                            
                                <input type="radio" name="" value="Bancos de desenvolvimento">
                                Bancos de desenvolvimento
                            </label>  
                            <label for="">                            
                                <input type="radio" name="" value="Agências de fomento">
                                Agências de fomento
                            </label>  
                            <label for="">                            
                                <input type="radio" name="" value="Cooperativas de Crédito">
                                Cooperativas de Crédito
                            </label>  
                            <label for="">                            
                                <input type="radio" name="" value="OSCIPS de Microcrédito">
                                OSCIPS de Microcrédito
                            </label>  
                            <label for="">                            
                                <input type="radio" name="" value="Fintechs">
                                Fintechs
                            </label>  
                            <label for="">                            
                                <input type="radio" name="" value="Fundos de inovação Venture Capital">
                                Fundos de inovação Venture Capital
                            </label>  
                            <label for="">                            
                                <input type="radio" name="" value="Instituições de fomento">
                                Instituições de fomento
                            </label>  
                            <label for="">                            
                                <input type="radio" name="" value="Investidores-anjo">
                                Investidores-anjo
                            </label>    
                            <label for="">                            
                                <input type="radio" name="" value="Institutos">
                                Institutos
                            </label>  
                            <label for="">                            
                                <input type="radio" name="" value="Fundações">
                                Fundações
                            </label>   
                            <label for="">                            
                                <input type="radio" name="" value="Empresa">
                                Empresa
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

                <!-- perfil SETOR PÚBLICO -->
                <fieldset class="step">
                    <h2>Escolha um dos perfis abaixo</h2>
                    <div class="form-group">
                        <label>Escolha um dos perfis abaixo de acordo com o tipo de setor público:</label>
                        <label for="">                            
                            <input type="radio" name="" value="Intermediário de serviços financeiros">
                            Intermediário de serviços financeiros
                        </label> 
                        <label for="">                            
                            <input type="radio" name="" value="Gestor Público">
                            Gestor Público (Governo Estadual)
                        </label>  
                        <label for="">                            
                            <input type="radio" name="" value="Gestor Público">
                            Gestor Público (Governo Municipal)
                        </label>  
                        <label for="">                            
                            <input type="radio" name="" value="Laboratórios de Inovação Social">
                            Laboratórios de Inovação Social
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

                <!-- perfil DINAMIZADORES -->
                <fieldset class="step">
                    <h2>Escolha um dos perfis abaixo</h2>
                    <div class="form-group">
                        <label>Escolha um dos perfis abaixo de acordo com o tipo de dinamizador que é:</label>
                        <label for="">                            
                            <input type="radio" name="" value="Institutos">
                            Institutos
                        </label> 
                        <label for="">                            
                            <input type="radio" name="" value="Fundações">
                            Fundações
                        </label>  
                        <label for="">                            
                            <input type="radio" name="" value="Empresas">
                            Empresas
                        </label>  
                        <label for="">                            
                            <input type="radio" name="" value="Aceleradoras">
                            Aceleradoras
                        </label>  
                        <label for="">                            
                            <input type="radio" name="" value="Incubadoras e Parques Tecnológico">
                            Incubadoras e Parques Tecnológico
                        </label>  
                        <label for="">                            
                            <input type="radio" name="" value="Hubs e Comunidades de Negócios">
                            Hubs e Comunidades de Negócios
                        </label>  
                        <label for="">                            
                            <input type="radio" name="" value="Mentores">
                            Mentores
                        </label>  
                        <label for="">                            
                            <input type="radio" name="" value="Academia/Universidade">
                            Academia/Universidade (Centro de Pesquisa e Inovação), Laboratório, Empresas Juniores, Instituições Tecnológicas)
                        </label>  
                        <label for="">                            
                            <input type="radio" name="" value="Pesquisadores, técnicos, professores, estudantes universitários">
                            Pesquisadores, técnicos, professores, estudantes universitários
                        </label>  
                        <label for="">                            
                            <input type="radio" name="" value="Prestadora de Serviço, Consultoria de Avaliação e Monitoramento de impacto/certificadoras">
                            Prestadora de Serviço, Consultoria de Avaliação e Monitoramento de impacto/certificadoras
                        </label>  
                        <label for="">                            
                            <input type="radio" name="" value="Advogados e assessores jurídicos">
                            Advogados e assessores jurídicos
                        </label>  
                        <label for="">                            
                            <input type="radio" name="" value="Outros prestadores de serviços">
                            Outros prestadores de serviços
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

                <!-- perfil COMUNIDADES -->
                <fieldset class="step">
                    <h2>Escolha um dos perfis abaixo</h2>
                    <div class="form-group">
                        <label>Escolha um dos perfis abaixo de acordo com o tipo de Comunidade que representa:</label>
                        <label for="">                            
                            <input type="radio" name="" value="Organização Internacional ou multilateral, cooperação internacional">
                            Organização Internacional ou multilateral, cooperação internacional
                        </label> 
                        <label for="">                            
                            <input type="radio" name="" value="Organização Não Governamental">
                            Organização Não Governamental
                        </label>  
                        <label for="">                            
                            <input type="radio" name="" value="Associações">
                            Associações
                        </label>  
                        <label for="">                            
                            <input type="radio" name="" value="Movimentos Sociais">
                            Movimentos Sociais
                        </label>  
                        <label for="">                            
                            <input type="radio" name="" value="Cidadania">
                            Cidadania
                        </label>  
                        <label for="">                            
                            <input type="radio" name="" value="Institutos">
                            Institutos
                        </label>  
                        <label for="">                            
                            <input type="radio" name="" value="Fundações">
                            Fundações
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

                <!-- GRANDES EMPRESAS NÃO TEM PERFIL -->
                
                <!-- dados do responsavel -->
                <fieldset class="step">
                    <h2>Dados do Responsável</h2>
                    <div class="flex-form">
                        <div class="form-group">                    
                            <label for="name">Nome Completo</label>
                            <input type="text" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="cpf">CPF <span>Por favor, preencha o seu CPF com todos os números</span></label>
                            <input type="text" name="cpf" id="cpf">
                        </div>
                        <div class="form-group">
                            <label for="email">Email <span>Por favor, digite seu melhor e-mail</span></label>
                            <input type="email" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Senha <span>Digite uma senha com no mínimo 6 caracteres</span></label>
                            <input type="password" name="password" id="password">
                        </div>
                        <div class="form-group">
                            <label for="birth-date">Data de Nascimento <span>Por favor, preencha a sua data de nascimento</span></label>
                            <input type="date" name="birth-date" id="birth-date">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gênero <span>Por favor, selecione um gênero</span></label>
                            <select id="gender" name="gender">
                                <option value="" disabled selected></option>
                                <option value="feminino">Feminino</option>
                                <option value="masculino">Masculino</option>
                                <option value="nao_Binario">Não Binário</option>
                                <option value="nao_Responder">Prefiro não Responder</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="uf">Onde você reside?</label>
                            <select id="uf" name="uf">
                                <option value="" disabled selected>Selecione um Estado</option>
                                <option value="SP">São Paulo</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PR">Parana</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city">Selecione uma Cidade</label>
                            <select id="city" name="city">
                                <option value="" disabled selected></option>
                                <option value="SP">São Paulo</option>
                                <option value="RJ">Vila São José</option>
                                <option value="MG">Barueri</option>
                                <option value="PR">Lapa</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="formation">Formação</label>
                            <select id="formation" name="formation">
                                <option value="" disabled selected></option>
                                <option value="ensino_Fundamental">Ensino Fundamental</option>
                                <option value="ensino_Medio">Ensino Médio</option>
                                <option value="ensino_Superior">Ensino Superior</option>
                                <option value="pos_graduacao">Pós-graduação</option>
                                <option value="doutorado">Doutorado</option>
                                <option value="pos_doutorado">Pós-doutorado</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="function">Seu cargo</label>
                            <input type="text" name="function" id="function">
                        </div>
                        <div class="form-group">
                            <label for="tel-phone">Telefone Celular</label>
                            <input type="text" name="tel-phone" id="tel-phone">
                        </div>
                        <div class="form-group">
                            <label for="tel-fixed">Telefone Residencial ou Comercial</label>
                            <input type="tel" name="tel-fixed" id="tel-fixed">
                        </div>
                        <div class="form-group">
                            <label for="enterprise">Nome do Negócio/Empreendimento</label>
                            <input type="text" name="enterprise" id="enterprise">
                        </div>
                        <!-- SETOR PÚBLICO -->
                        <div class="form-group">
                            <label for="enterprise">Nome da Organização</label>
                            <input type="text" name="enterprise" id="enterprise">
                        </div>
                        <!-- SETOR PÚBLICO -->
                        <div class="form-group">
                            <label for="image">Adicione uma imagem de identificação <span>Dimensão recomendada para melhor visualização: 500x350px</span></label>
                            <input type="hidden" name="MAX_FILE_SIZE" value="4194304" />
                            <input type="file" name="image" multiple accept="image/png, image/jpg, image/jpeg">
                        </div>
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

                <!-- dados do negócio -->
                <fieldset class="step">
                    <h2>Dados do Negócio</h2>
                    <div class="form-group">
                        <label for="razao_Social">Razão Social</label>
                        <input type="text" name="razao_Social" id="razao_Social">
                    </div>              
                    <div class="form-group">
                        <label for="cnpj">CNPJ</label>  
                        <input type="text" id="cnpj" name="cnpj">
                    </div>
                    <!-- SETOR PÚBLICO -->
                    <div class="form-group">
                        <label for="area">Seção/Área (Detalhe)</label>  
                        <input type="text" id="area" name="area">
                    </div>
                    <!-- SETOR PÚBLICO -->
                    <div class="flex-form">
                        <div class="form-group">
                            <label for="uf_Company">Estado</label>
                            <select id="uf_Company" name="uf_Company">
                                <option value="" disabled selected>Selecione um Estado</option>
                                <option value="SP">São Paulo</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PR">Parana</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city_Company">Cidade</label>
                            <select id="city_Company" name="city_Company">
                                <option value="" disabled selected>Selecione uma Cidade</option>
                                <option value="SP">São Paulo</option>
                                <option value="RJ">Vila São José</option>
                                <option value="MG">Barueri</option>
                                <option value="PR">Lapa</option>
                            </select>
                        </div>
                    </div>                    
                    <div class="form-group">
                        <label for="address">Endereço</label>
                        <input type="text" name="address" id="address">
                    </div>
                    <div class="form-group">
                        <label>Em quais destes eixos temáticos se encaixa o seu negócio?</label>
                        <label for="eixo">                            
                            <input type="radio" name="eixo" value="Eixo Temático - Cidadania, Direitos Humanos e Sociedade">
                            Cidadania, Direitos Humanos e Sociedade
                        </label>
                        <label for="eixo">                            
                            <input type="radio" name="eixo" value="Eixo Temático - Cidades, Mobilidade, Serviços e Infraestrutura Urbana">
                            Cidades, Mobilidade, Serviços e Infraestrutura Urbana
                        </label>
                        <label for="eixo">                            
                            <input type="radio" name="eixo" value="Eixo Temático - Educação, cultura, economia criativa e tecnologia da informação">
                            Educação, cultura, economia criativa e tecnologia da informação
                        </label>
                        <label for="eixo">                            
                            <input type="radio" name="eixo" value="Eixo Temático - Saúde">
                            Saúde
                        </label>
                        <label for="eixo">                            
                            <input type="radio" name="eixo" value="Eixo - Finanças">
                            Finanças
                        </label>
                        <label for="eixo">                            
                            <input type="radio" name="eixo" value="Eixo Temático - Biodiversidade, Bioeconomia, Tecnologias Verdes e Indústria Sustentável ">
                            Biodiversidade, Bioeconomia, Tecnologias Verdes e Indústria Sustentável 
                        </label>
                    </div><div class="flex-form">
                        <div class="read-more">
                            <a href="#" class="btn bg-gray">Voltar</a>
                        </div>                            
                        <div class="read-more">
                            <a href="#" class="btn bg-gray">Próximo</a>
                        </div>
                    </div>   
                </fieldset>

                <!-- subárea eixos temáticos se encaixa o seu negócio - Cidadania, Direitos Humanos e Sociedade -->
                <fieldset class="step">
                    <h2>Cidadania, Direitos Humanos e Sociedade</h2>
                    <div class="form-group">
                        <h3>Qual a Subárea de Impacto? Assinale todas as alternativas pertinentes.</h3>
                        <label for="">                            
                            <input type="checkbox" name="" value="Soluções e tecnologias para democracia e participação cidadã">
                            Soluções e tecnologias para democracia e participação cidadã
                        </label>   
                        <label for="">                            
                            <input type="checkbox" name="" value="Soluções e tecnologias para administração pública, gestão de governo e transparência">
                            Soluções e tecnologias para administração pública, gestão de governo e transparência
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Soluções e tecnologias para inclusão social, igualdade, resolução de conflitos e coesão social">
                            Soluções e tecnologias para inclusão social, igualdade, resolução de conflitos e coesão social
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Soluções e tecnologias para diversidade, gênero, comunidade LGBTQIA+ e minorias étnicas">
                            Soluções e tecnologias para diversidade, gênero, comunidade LGBTQIA+ e minorias étnicas
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Soluções e tecnologias para comunidades tradicionais (indígenas, quilombolas, ribeirinhos, pescadores artesanais, extrativistas e outras)">
                            Soluções e tecnologias para comunidades tradicionais (indígenas, quilombolas, ribeirinhos, pescadores artesanais, extrativistas e outras)
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Soluções e tecnologias para comércio justo e economia solidária">
                            Soluções e tecnologias para comércio justo e economia solidária
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Soluções e tecnologias para Direitos Humanos, direitos e deveres do cidadão">
                            Soluções e tecnologias para Direitos Humanos, direitos e deveres do cidadão
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Soluções e tecnologias para direitos trabalhistas">
                            Soluções e tecnologias para direitos trabalhistas
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Soluções e tecnologias para garantir o acesso aos bens comuns (terra, ar, água, florestas, etc)">
                            Soluções e tecnologias para garantir o acesso aos bens comuns (terra, ar, água, florestas, etc)
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Soluções e tecnologias para garantir o acesso aos bens comuns (terra, ar, água, florestas, etc)">
                            Soluções e tecnologias para garantir o acesso aos bens comuns (terra, ar, água, florestas, etc)
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Soluções e tecnologias para segurança alimentar e gestão de alimentos ">
                            Soluções e tecnologias para segurança alimentar e gestão de alimentos 
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Soluções e tecnologias para segurança alimentar e gestão de alimentos ">
                            Soluções e tecnologias para segurança alimentar e gestão de alimentos 
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Soluções e tecnologias para ampliação do empreendedorismo e inovação">
                            Soluções e tecnologias para ampliação do empreendedorismo e inovação
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Soluções e tecnologias para geração de emprego e qualificação profissional">
                            Soluções e tecnologias para geração de emprego e qualificação profissional
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Soluções e tecnologias para promoção do Consumo sustentável">
                            Soluções e tecnologias para promoção do Consumo sustentável
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Soluções e tecnologias para apoio a processos de migração  e combate ao tráfico de pessoas e de drogas">
                            Soluções e tecnologias para apoio a processos de migração  e combate ao tráfico de pessoas e de drogas
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Soluções e tecnologias para promoção do Acesso público à informação">
                            Soluções e tecnologias para promoção do Acesso público à informação
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Soluções e tecnologias para proteção e salvaguarda do patrimônio cultural e natural">
                            Soluções e tecnologias para proteção e salvaguarda do patrimônio cultural e natural
                        </label>
                        <label for="other">                            
                            <input type="checkbox" name="other" value="outro">
                            Outro:
                            <input type="text" id="other" name="other" placeholder="Especifique">
                        </label>
                        <p><small>(A proposição da subárea será analisada e caso seja compatível será incluída na listagem)</small></p>
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

                <!-- subárea eixos temáticos se encaixa o seu negócio - Cidades, Mobilidade, Serviços e Infraestrutura Urbana -->
                <fieldset class="step">
                    <h2>Cidades, Mobilidade, Serviços e Infraestrutura Urbana</h2>
                    <div class="form-group">
                        <h3>Qual a Subárea de Impacto? Assinale todas as alternativas pertinentes.</h3>
                        <label for="">                            
                            <input type="checkbox" name="" value="Transporte, Logística, Mobilidade">
                            Transporte, Logística, Mobilidade
                        </label>   
                        <label for="">                            
                            <input type="checkbox" name="" value="Soluções e tecnologias para a Habitação, infraestrutura e construção, urbanização de favelas, moradia digna, acesso à habitação adequada e a preço acessível">
                            Soluções e tecnologias para a Habitação, infraestrutura e construção, urbanização de favelas, moradia digna, acesso à habitação adequada e a preço acessível
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Assistência técnica e financeira, para construções sustentáveis e resilientes, utilizando materiais locais">
                            Assistência técnica e financeira, para construções sustentáveis e resilientes, utilizando materiais locais
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Serviços relacionados à participação cidadã">
                            Serviços relacionados à participação cidadã
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Monitoramento e inteligência de dados em cidades">
                            Monitoramento e inteligência de dados em cidades
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Monitoramento e inteligência de dados em cidades">
                            Monitoramento e inteligência de dados em cidades
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Segurança Pública">
                            Segurança Pública
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Acesso universal a espaços públicos seguros, inclusivos, acessíveis e verdes">
                            Acesso universal a espaços públicos seguros, inclusivos, acessíveis e verdes
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Tratamento de efluentes e saneamento básico, construção ou gestão de infraestruturas para abastecimento de água, drenagem urbana, coleta e tratamento de efluentes líquidos">
                            Tratamento de efluentes e saneamento básico, construção ou gestão de infraestruturas para abastecimento de água, drenagem urbana, coleta e tratamento de efluentes líquidos
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Tratamento de resíduos urbanos e reciclagem">
                            Tratamento de resíduos urbanos e reciclagem
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Fornecimento de Energia sustentável">
                            Fornecimento de Energia sustentável
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Planejamento e gestão de assentamentos humanos participativos">
                            Planejamento e gestão de assentamentos humanos participativos
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Sistemas de transporte públicos seguros, acessíveis e sustentáveis">
                            Sistemas de transporte públicos seguros, acessíveis e sustentáveis
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Segurança rodoviária">
                            Segurança rodoviária
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Prevenção de catástrofes naturais e desastres, resiliência a desastres  e gerenciamento holístico do risco de desastres">
                            Prevenção de catástrofes naturais e desastres, resiliência a desastres  e gerenciamento holístico do risco de desastres
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Defesa civil e socorro a vítimas de catástrofes naturais e desastres">
                            Defesa civil e socorro a vítimas de catástrofes naturais e desastres
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Qualidade do ar e redução da poluição em cidades">
                            Qualidade do ar e redução da poluição em cidades
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Agricultura urbana, Hortas urbanas">
                            Agricultura urbana, Hortas urbanas
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Infraestruturas para pessoas com deficiências">
                            Infraestruturas para pessoas com deficiências 
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Relações econômicas, sociais e ambientais positivas entre áreas urbanas, periurbanas e rurais, reforçando o planejamento nacional e regional de desenvolvimento">
                            Relações econômicas, sociais e ambientais positivas entre áreas urbanas, periurbanas e rurais, reforçando o planejamento nacional e regional de desenvolvimento
                        </label>                        
                        <label for="">                            
                            <input type="checkbox" name="" value="Redução do impacto ambiental negativo das cidades com planos integrados para a inclusão, a eficiência dos recursos, mitigação e adaptação às mudanças climáticas">
                            Redução do impacto ambiental negativo das cidades com planos integrados para a inclusão, a eficiência dos recursos, mitigação e adaptação às mudanças climáticas
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Logística e mobilidade, movimentação de cargas e passageiros, com diversos  e modais de transportes (ex.: ferroviário, aquaviário, aeroviário e rodoviário)">
                            Logística e mobilidade, movimentação de cargas e passageiros, com diversos  e modais de transportes (ex.: ferroviário, aquaviário, aeroviário e rodoviário)
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Tecnologia da Informação e  Inteligência Artificial para área de cidades, mobilidade e infraestrutura urbana">
                            Tecnologia da Informação e  Inteligência Artificial para área de cidades, mobilidade e infraestrutura urbana
                        </label>
                        <label for="other">                            
                            <input type="checkbox" name="other" value="outro">
                            Outro:
                            <input type="text" id="other" name="other" placeholder="Especifique">
                        </label>
                        <p><small>(A proposição da subárea será analisada e caso seja compatível será incluída na listagem)</small></p>
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

                <!-- subárea eixos temáticos se encaixa o seu negócio - Educação, cultura, economia criativa e tecnologia da informação -->
                <fieldset class="step">
                    <h2>Educação, cultura, economia criativa e tecnologia da informação</h2>
                    <div class="form-group">
                        <h3>Qual a Subárea de Impacto? Assinale todas as alternativas pertinentes.</h3>
                        <label for="">                            
                            <input type="checkbox" name="" value="Soluções e tecnologias de educação para a primeira infância">
                            Soluções e tecnologias de educação para a primeira infância
                        </label>   
                        <label for="">                            
                            <input type="checkbox" name="" value="Soluções e tecnologias de educação para o ensino fundamental">
                            Soluções e tecnologias de educação para o ensino fundamental
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Soluções e tecnologias de educação para o ensino fundamental II">
                            Soluções e tecnologias de educação para o ensino fundamental II
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Soluções e tecnologias de educação para o ensino médio">
                            Soluções e tecnologias de educação para o ensino médio
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Soluções e tecnologias de educação para o ensino superior">
                            Soluções e tecnologias de educação para o ensino superior
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Soluções relacionadas à educação técnica e  profissional">
                            Soluções relacionadas à educação técnica e  profissional
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Educação em sustentabilidade, ciência e cidadania">
                            Educação em sustentabilidade, ciência e cidadania
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Ensino de artes">
                            Ensino de artes
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Formação de professores">
                            Formação de professores
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Soluções e tecnologia de educação relacionados à alfabetização">
                            Soluções e tecnologia de educação relacionados à alfabetização
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Educação de pessoas maiores">
                            Educação de pessoas maiores
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Cooperação científica">
                            Cooperação científica
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Marketing, mídias e jornalismo">
                            Marketing, mídias e jornalismo
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Acesso à informação, tecnologia da informação e telecomunicações">
                            Acesso à informação, tecnologia da informação e telecomunicações
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Acesso à cultura">
                            Acesso à cultura
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Economia criativa">
                            Economia criativa
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Economia do Turismo">
                            Economia do Turismo
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Gastronomia">
                            Gastronomia
                        </label>                        
                        <label for="">                            
                            <input type="checkbox" name="" value="Eventos e Lazer">
                            Eventos e Lazer
                        </label>                        
                        <label for="">                            
                            <input type="checkbox" name="" value="Construção e proteção do patrimônio histórico, artístico e cultural">
                            Construção e proteção do patrimônio histórico, artístico e cultural
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Tecnologia da Informação e  Inteligência Artificial para área de educação, cultura e economia criativa">
                            Tecnologia da Informação e  Inteligência Artificial para área de educação, cultura e economia criativa
                        </label>
                        <label for="other">                            
                            <input type="checkbox" name="other" value="outro">
                            Outro:
                            <input type="text" id="other" name="other" placeholder="Especifique">
                        </label>
                        <p><small>(A proposição da subárea será analisada e caso seja compatível será incluída na listagem)</small></p>
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

                <!-- subárea eixos temáticos se encaixa o seu negócio - Saúde -->
                <fieldset class="step">
                    <h2>Saúde</h2>
                    <div class="form-group">
                        <h3>Qual a Subárea de Impacto? Assinale todas as alternativas pertinentes.</h3>
                        <label for="">                            
                            <input type="checkbox" name="" value="Soluções para problemas de gestão de saúde: atendimento, governança, análise de dados, redução de custos">
                            Soluções para problemas de gestão de saúde: atendimento, governança, análise de dados, redução de custos
                        </label>   
                        <label for="">                            
                            <input type="checkbox" name="" value="Soluções para melhoria da qualidade de vida de pacientes: diagnósticos, tratamentos, prevenção, suporte, cura">
                            Soluções para melhoria da qualidade de vida de pacientes: diagnósticos, tratamentos, prevenção, suporte, cura
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Vacinas">
                            Vacinas
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Genética">
                            Genética
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Doação de sangue">
                            Doação de sangue
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Soluções para resistência microbiana">
                            Soluções para resistência microbiana
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Nutrição e Alimentação Saudável">
                            Nutrição e Alimentação Saudável
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Controle de epidemias e doenças transmissíveis">
                            Controle de epidemias e doenças transmissíveis
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Saúde mental">
                            Saúde mental
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Saúde animal">
                            Saúde animal
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Saúde ambiental (Redução de químicos para o ar, água e solo, para minimizar seus impactos negativos sobre a saúde humana e o meio ambiente)">
                            Saúde ambiental (Redução de químicos para o ar, água e solo, para minimizar seus impactos negativos sobre a saúde humana e o meio ambiente)
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Saúde sexual e reprodutiva, incluindo o planejamento familiar, informação e educação">
                            Saúde sexual e reprodutiva, incluindo o planejamento familiar, informação e educação
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Prevenção e tratamento de substâncias entorpecentes e uso nocivo do álcool e tabaco">
                            Prevenção e tratamento de substâncias entorpecentes e uso nocivo do álcool e tabaco
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Tecnologia da Informação e  Inteligência Artificial para área de saúde">
                            Tecnologia da Informação e  Inteligência Artificial para área de saúde
                        </label>
                        <label for="other">                            
                            <input type="checkbox" name="other" value="outro">
                            Outro:
                            <input type="text" id="other" name="other" placeholder="Especifique">
                        </label>
                        <p><small>(A proposição da subárea será analisada e caso seja compatível será incluída na listagem)</small></p>
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

                <!-- subárea eixos temáticos se encaixa o seu negócio - Finanças -->
                <fieldset class="step">
                    <h2>Finanças</h2>
                    <div class="form-group">
                        <h3>Qual a Subárea de Impacto? Assinale todas as alternativas pertinentes.</h3>
                        <label for="">                            
                            <input type="checkbox" name="" value="Serviços financeiros e tecnologias visando a redução de custo e escala em acesso à crédito">
                            Serviços financeiros e tecnologias visando a redução de custo e escala em acesso à crédito
                        </label>   
                        <label for="">                            
                            <input type="checkbox" name="" value="Serviços financeiros e tecnologias visando a redução de custo e escala em transações financeiras">
                            Serviços financeiros e tecnologias visando a redução de custo e escala em transações financeiras
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Serviços financeiros e tecnologias visando a redução de custo e escala em educação financeira">
                            Serviços financeiros e tecnologias visando a redução de custo e escala em educação financeira
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Serviços financeiros e tecnologias visando a redução de custo e escala em gestão pública">
                            Serviços financeiros e tecnologias visando a redução de custo e escala em gestão pública
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Serviços financeiros e tecnologias visando a inclusão financeira/bancarização">
                            Serviços financeiros e tecnologias visando a inclusão financeira/bancarização
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Novas tecnologias apropriadas e serviços financeiros, incluindo microfinanças">
                            Novas tecnologias apropriadas e serviços financeiros, incluindo microfinanças
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Sistemas de transparência financeira e eliminação da corrupção">
                            Sistemas de transparência financeira e eliminação da corrupção
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Serviços para ampliação dos recursos financeiros para a conservação e o uso sustentável da biodiversidade e dos ecossistemas">
                            Serviços para ampliação dos recursos financeiros para a conservação e o uso sustentável da biodiversidade e dos ecossistemas
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Tecnologia da Informação e Inteligência Artificial para a área financeira">
                            Tecnologia da Informação e Inteligência Artificial para a área financeira
                        </label>
                        <label for="other">                            
                            <input type="checkbox" name="other" value="outro">
                            Outro:
                            <input type="text" id="other" name="other" placeholder="Especifique">
                        </label>
                        <p><small>(A proposição da subárea será analisada e caso seja compatível será incluída na listagem)</small></p>
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

                <!-- subárea eixos temáticos se encaixa o seu negócio - Biodiversidade, Bioeconomia, Tecnologias Verdes e Indústria Sustentável  -->
                <fieldset class="step">
                    <h2>Biodiversidade, Bioeconomia, Tecnologias Verdes e Indústria Sustentável</h2>
                    <div class="form-group">
                        <h3>Qual a Subárea de Impacto? Assinale todas as alternativas pertinentes.</h3>
                        <label for="">                            
                            <input type="checkbox" name="" value="Agropecuária, sistemas sustentáveis de produção de alimentos, fornecimento de insumos e comercialização agrícola">
                            Agropecuária, sistemas sustentáveis de produção de alimentos, fornecimento de insumos e comercialização agrícola
                        </label>   
                        <label for="">                            
                            <input type="checkbox" name="" value="Água e saneamento, construção e gestão de infraestruturas para o abastecimento de água">
                            Água e saneamento, construção e gestão de infraestruturas para o abastecimento de água
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Florestas e uso do solo, produção de produtos madeireiros e não madeireiros (ex.: fibras, alimentos, extratos, etc.), bem como atividades de reflorestamento e manutenção de floresta nativa para fim de conservação.">
                            Florestas e uso do solo, produção de produtos madeireiros e não madeireiros (ex.: fibras, alimentos, extratos, etc.), bem como atividades de reflorestamento e manutenção de floresta nativa para fim de conservação
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Gestão de Resíduos, empresas que realizam o tratamento de resíduos sólidos, porém engloba também empresas que fazem a gestão, coleta, separação, reaproveitamento e reciclagem destes">
                            Gestão de Resíduos, empresas que realizam o tratamento de resíduos sólidos, porém engloba também empresas que fazem a gestão, coleta, separação, reaproveitamento e reciclagem destes
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Mitigação da mudança no clima">
                            Mitigação da mudança no clima
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Adaptação à mudança no clima">
                            Adaptação à mudança no clima
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Preservação da fauna e da flora">
                            Preservação da fauna e da flora
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Prevenção e combate aos maus tratos a animais">
                            Prevenção e combate aos maus tratos a animais
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Diversidade Genética de Sementes, plantas cultivadas, animais de criação">
                            Diversidade Genética de Sementes, plantas cultivadas, animais de criação 
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Acesso à energia">
                            Acesso à energia
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Conservação de oceanos, zonas costeiras e marinhas, prevenção  e redução da poluição marinha">
                            Conservação de oceanos, zonas costeiras e marinhas, prevenção  e redução da poluição marinha 
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Minimização e enfrentamento dos impactos da acidificação dos oceanos">
                            Minimização e enfrentamento dos impactos da acidificação dos oceanos
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Diminuição da sobrepesca e práticas de pesca destrutivas, Restauração das populações de peixes e da vida aquática">
                            Diminuição da sobrepesca e práticas de pesca destrutivas, Restauração das populações de peixes e da vida aquática
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Acesso dos pescadores artesanais de pequena escala aos recursos marinhos e mercados">
                            Acesso dos pescadores artesanais de pequena escala aos recursos marinhos e mercados
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Proteção e restauração de ecossistemas relacionados com a água, incluindo montanhas, florestas, zonas úmidas, rios, aquíferos e lagos">
                            Proteção e restauração de ecossistemas relacionados com a água, incluindo montanhas, florestas, zonas úmidas, rios, aquíferos e lagos
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Manejo ambientalmente saudável dos produtos químicos e todos os resíduos, ao longo de todo o ciclo de vida destes">
                            Manejo ambientalmente saudável dos produtos químicos e todos os resíduos, ao longo de todo o ciclo de vida destes
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Proteção, recuperação e promoção do uso sustentável dos ecossistemas terrestres e florestas">
                            Proteção, recuperação e promoção do uso sustentável dos ecossistemas terrestres e florestas
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Combate à  desertificação, deter e reverter a degradação da terra e deter a perda de biodiversidade, restauração de terra e solo degradados">
                            Combate à  desertificação, deter e reverter a degradação da terra e deter a perda de biodiversidade, restauração de terra e solo degradados
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Combate ao desmatamento, restauração de florestas degradadas e aumento do florestamento e o reflorestamento">
                            Combate ao desmatamento, restauração de florestas degradadas e aumento do florestamento e o reflorestamento
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Conservação dos ecossistemas de montanha, incluindo a sua biodiversidade">
                            Conservação dos ecossistemas de montanha, incluindo a sua biodiversidade
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Redução da degradação de habitats naturais e perda da biodiversidade">
                            Redução da degradação de habitats naturais e perda da biodiversidade
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Prevenção da extinção de espécies ameaçadas">
                            Prevenção da extinção de espécies ameaçadas
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Repartição justa e equitativa dos benefícios derivados da utilização dos recursos genéticos e acesso adequado aos recursos genéticos">
                            Repartição justa e equitativa dos benefícios derivados da utilização dos recursos genéticos e acesso adequado aos recursos genéticos
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Combate a caça ilegal e o  tráfico de espécies da flora e fauna protegidas">
                            Combate a caça ilegal e o  tráfico de espécies da flora e fauna protegidas
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Redução do impacto de espécies exóticas invasoras em ecossistemas terrestres e aquáticos">
                            Redução do impacto de espécies exóticas invasoras em ecossistemas terrestres e aquáticos
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Tecnologias e processos industriais limpos">
                            Tecnologias e processos industriais limpos
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Indústria Sustentável - Energia e biocombustíveis, empresas geradoras, transmissoras e distribuidoras de energia elétrica, produtores de biocombustíveis (principalmente etanol e biodiesel) energias renováveis o acesso a pesquisa e tecnologias de energia limpa, incluindo energias renováveis, eficiência energética, Tecnologias de combustíveis fósseis avançadas e mais limpas">
                            Indústria Sustentável - Energia e biocombustíveis, empresas geradoras, transmissoras e distribuidoras de energia elétrica, produtores de biocombustíveis (principalmente etanol e biodiesel) energias renováveis o acesso a pesquisa e tecnologias de energia limpa, incluindo energias renováveis, eficiência energética, Tecnologias de combustíveis fósseis avançadas e mais limpas
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Indústria Sustentável Fabricação de Alimentos e Bebidas">
                            Indústria Sustentável Fabricação de Alimentos e Bebidas
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Indústria Sustentável Farmoquímico e Farmacêutico">
                            Indústria Sustentável Farmoquímico e Farmacêutico
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Indústria Sustentável Madeira e Móveis">
                            Indústria Sustentável Madeira e Móveis
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Indústria Sustentável Metal-Mecânico e Metalurgia">
                            Indústria Sustentável Metal-Mecânico e Metalurgia
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Indústria Sustentável Papel e Celulose">
                            Indústria Sustentável Papel e Celulose
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Indústria Sustentável Químico">
                            Indústria Sustentável Químico
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Indústria Sustentável Têxtil, Confecção e Calçados">
                            Indústria Sustentável Têxtil, Confecção e Calçados
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Indústria Sustentável Petróleo e Gás">
                            Indústria Sustentável Petróleo e Gás
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Mineração">
                            Mineração
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Pesca e Aquicultura">
                            Pesca e Aquicultura
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Tecnologia da Informação, monitoramento geológico, e Inteligência Artificial aplicada à Biodiversidade, Bioeconomia, Tecnologias Verdes e Indústria Sustentável">
                            Tecnologia da Informação, monitoramento geológico, e Inteligência Artificial aplicada à Biodiversidade, Bioeconomia, Tecnologias Verdes e Indústria Sustentável
                        </label>
                        <label for="other">                            
                            <input type="checkbox" name="other" value="outro">
                            Outro:
                            <input type="text" id="other" name="other" placeholder="Especifique">
                        </label>
                        <p><small>(A proposição da subárea será analisada e caso seja compatível será incluída na listagem)</small></p>
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

                <!-- ODS -->
                <fieldset class="step">
                    <h2>A qual ou quais Objetivos do Desenvolvimento Sustentável a sua solução está vinculada? </h2>
                    <!-- objetivo 01 - Erradicação da pobreza -->
                    <div class="form-group">
                        <label for="">                            
                            <input type="checkbox" name="" value="Objetivo 1">
                            Objetivo 1. Acabar com a pobreza em todas as suas formas, em todos os lugares
                        </label>                   
                    </div>
                     <!-- objetivo 02 - Acabar com a fome -->
                     <div class="form-group">
                        <label for="">                            
                            <input type="checkbox" name="" value="Objetivo 2">
                            Objetivo 2. Acabar com a fome, alcançar a segurança alimentar e melhoria da nutrição e promover a agricultura sustentável
                        </label>                 
                    </div>
                    <!-- objetivo 03 - Assegurar uma vida saudável -->
                    <div class="form-group">
                        <label for="">                            
                            <input type="checkbox" name="" value="Objetivo 3">
                            Objetivo 3. Assegurar uma vida saudável e promover o bem-estar para todas e todos, em todas as idades
                        </label>                        
                    </div>
                    <!-- objetivo 04 - Assegurar a educação inclusiva -->
                    <div class="form-group">
                        <label for="">                            
                            <input type="checkbox" name="" value="Objetivo 4">
                            Objetivo 4. Assegurar a educação inclusiva e equitativa e de qualidade, e promover oportunidades de aprendizagem ao longo da vida para todas e todos
                        </label>                    
                    </div>                    
                    <!-- objetivo 05 - Alcançar a igualdade de gênero  -->
                    <div class="form-group">
                        <label for="">                            
                            <input type="checkbox" name="" value="Objetivo 5">
                            Objetivo 5. Alcançar a igualdade de gênero e empoderar todas as mulheres e meninas
                        </label>                        
                    </div>
                    <!-- objetivo 06 - Assegurar a disponibilidade -->
                    <div class="form-group">
                        <label for="">                            
                            <input type="checkbox" name="" value="Objetivo 6">
                            Objetivo 6. Assegurar a disponibilidade e gestão sustentável da água e saneamento para todas e todos
                        </label>                         
                    </div>
                    <!-- objetivo 07 - Assegurar o acesso confiável -->
                    <div class="form-group">
                        <label for="">                            
                            <input type="checkbox" name="" value="Objetivo 7">
                            Objetivo 7. Assegurar o acesso confiável, sustentável, moderno e a preço acessível à energia para todas e todos
                        </label>                     
                    </div>
                    <!-- objetivo 08 - Promover o crescimento econômico sustentado -->
                    <div class="form-group">
                        <label for="">                            
                            <input type="checkbox" name="" value="Objetivo 7">
                            Objetivo 8. Promover o crescimento econômico sustentado, inclusivo e sustentável, emprego pleno e produtivo e trabalho decente para todas e todos
                        </label>                       
                    </div>                    
                    <!-- objetivo 09 - Construir infraestruturas resilientes -->
                    <div class="form-group">
                        <label for="">                            
                            <input type="checkbox" name="" value="Objetivo 9">
                            Objetivo 9. Construir infraestruturas resilientes, promover a industrialização inclusiva e sustentável e fomentar a inovação
                        </label>                        
                    </div>                  
                    <!-- objetivo 10 - Reduzir a desigualdade dentro dos países e entre eles -->
                    <div class="form-group">
                        <label for="">                            
                            <input type="checkbox" name="" value="Objetivo 10">
                            Objetivo 10. Reduzir a desigualdade dentro dos países e entre eles
                        </label>                        
                    </div>                  
                    <!-- objetivo 11 - Reduzir a desigualdade dentro dos países e entre eles -->
                    <div class="form-group">
                        <label for="">                            
                            <input type="checkbox" name="" value="Objetivo 11">
                            Objetivo 11. Tornar as cidades e os assentamentos humanos inclusivos, seguros, resilientes e sustentáveis
                        </label>                        
                    </div>                  
                    <!-- objetivo 12 - Assegurar padrões de produção e de consumo sustentáveis -->
                    <div class="form-group">
                        <label for="">                            
                            <input type="checkbox" name="" value="Objetivo 12">
                            Objetivo 12. Assegurar padrões de produção e de consumo sustentáveis
                        </label>                       
                    </div>                 
                    <!-- objetivo 13 - Tomar medidas urgentes para combater a mudança climática e seus impactos -->
                    <div class="form-group">
                        <label for="">                            
                            <input type="checkbox" name="" value="Objetivo 13">
                            Objetivo 13. Tomar medidas urgentes para combater a mudança climática e seus impactos  (*)
                        </label>                       
                        <p><small>(*) Reconhecendo que a Convenção Quadro das Nações Unidas sobre Mudança do Clima [UNFCCC] é o fórum internacional intergovernamental primário para negociar a resposta global à mudança do clima.</small></p>                       
                    </div>                
                    <!-- objetivo 14 - Conservação e uso sustentável dos oceanos -->
                    <div class="form-group">
                        <label for="">                            
                            <input type="checkbox" name="" value="Objetivo 14">
                            Objetivo 14. Conservação e uso sustentável dos oceanos, dos mares e dos recursos marinhos para o desenvolvimento sustentável
                        </label>                        
                    </div>                   
                    <!-- objetivo 15 - Proteger, recuperar e promover o uso sustentável -->
                    <div class="form-group">
                        <label for="">                            
                            <input type="checkbox" name="" value="Objetivo 15">
                            Objetivo 15. Proteger, recuperar e promover o uso sustentável dos ecossistemas terrestres, gerir de forma sustentável as florestas, combater a desertificação, deter e reverter a degradação da terra e deter a perda de biodiversidade
                        </label>                        
                    </div>                     
                    <!-- objetivo 16 - Promover sociedades pacíficas e inclusivas  -->
                    <div class="form-group">
                        <label for="">                            
                            <input type="checkbox" name="" value="Objetivo 16">
                            Objetivo 16. Promover sociedades pacíficas e inclusivas para o desenvolvimento sustentável, proporcionar o acesso à justiça para todos e construir instituições eficazes, responsáveis e inclusivas em todos os níveis
                        </label>                        
                    </div>                     
                    <!-- objetivo 17 - Promover sociedades pacíficas e inclusivas  -->
                    <div class="form-group">
                        <label for="">                            
                            <input type="checkbox" name="" value="Objetivo 17">
                            Objetivo 17. Fortalecer os meios de implementação e revitalizar a parceria global para o desenvolvimento sustentável
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

                <!-- descrição do projeto -->
                <fieldset class="step">
                    <h2>Descrição do Projeto</h2>
                    <div class="form-group">                    
                        <label for="">Descreva as atividades de sua organização em até cinco linhas</label>
                        <textarea name="message" rows="5" cols="30">                        
                        </textarea>
                    </div>
                    <div class="form-group">                    
                        <label for="">Relacione três palavras-chave que melhor identificam a atuação de sua organização.  </label>
                        <textarea name="message" rows="2" cols="30">                        
                        </textarea>
                    </div>
                    <h3>Identifique o Site e Redes Sociais de seu negócio, se tiver</h3>
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
                        <label for="">Adicione pelo menos 5 fotos que ilustrem seu negócio</label>
                        <input type="file" name="image[]" multiple="multiple" accept=".png, .jpg, .jpeg">
                    </div> 
                     
                    <div class="form-group">                    
                        <label for="">Vídeo de Apresentação: Se tiver um vídeo que explique seu negócio e sua solução aproveite para compartilhá-lo aqui!</label>
                        <input type="file" name="" id="" accept="video/*">
                        <label for=""></label>
                        <label class="link-video">
                            <input type="url" name="" id="" placeholder="ou cole o link do Youtube ou Vimeo">
                            <a class="tooltip" href="#"><i class="fas fa-exclamation-circle"></i>
                                <span class="tooltiptext">Para que o video funcione, é aceito link no formato de embed. Ex: Youtube: https://www.youtube.com/embed/9tX2_69XGXE ou Vimeo https://player.vimeo.com/video/703751054</span>
                            </a>
                        </label>
                    </div>                     
                    <div class="form-group">                                          
                        <label for="">                            
                            <input type="checkbox" name="" value="concordo">
                            Concordância com os <a class="blue" href="regulamento.php" target="_blank">Termo de Uso, Política de Privacidade de Dados e Termo de Uso de Imagem</a>
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