<?php
// header
include 'app/views/header.php';
?>
<!-- content -->

<main>

    <section class="regForm">
        <div class="page-header">
            <div class="container">
                <h1>Cadastro<br><span>Negócio de Impacto<span></h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus possimus aliquid recusandae repellendus cupiditate nesciunt</p>
            </div>
        </div>
        <div class="container">

            <form id="regProject">
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
                        <div class="form-group">
                            <label for="image">Adicione uma imagem de identificação <span>Dimensão recomendada para melhor visualização: 500x350px</span></label>
                            <input type="hidden" name="MAX_FILE_SIZE" value="4194304" />
                            <input type="file" name="image" multiple accept="image/png, image/jpg, image/jpeg">
                        </div>
                    </div>                    
                </fieldset>

                <fieldset class="step">
                    <h2>Dados do Negócio</h2>
                    <div class="form-group">
                        <label for="razao_Social">Razão Social</label>
                        <input type="text" name="razao_Social" id="razao_Social">
                    </div>              
                    <div class="flex-form">
                        <div class="form-group">
                            <label for="cnpj">CNPJ</label>  
                            <input type="text" id="cnpj" name="cnpj">
                        </div>
                        <div class="form-group">
                            <label for="foundation_Date">Data de Fundação</label>
                            <input type="date" name="foundation_Date" id="foundation_Date">
                        </div>
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
                            <input type="checkbox" name="" value="Administração pública, gestão de governo e transparência">
                            Administração pública, gestão de governo e transparência
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Inclusão social, igualdade, resolução de conflitos e coesão social">
                            Inclusão social, igualdade, resolução de conflitos e coesão social
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Diversidade, gênero e minorias étnicas">
                            Diversidade, gênero e minorias étnicas
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Comércio justo e economia solidária">
                            Comércio justo e economia solidária
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Direitos Humanos, Direitos e deveres do cidadão">
                            Direitos Humanos, Direitos e deveres do cidadão
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Acesso à terra e aos bens comuns ">
                            Acesso à terra e aos bens comuns
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Apoio a Pequenos Produtores Rurais">
                            Apoio a Pequenos Produtores Rurais
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Segurança Alimentar e gestão de alimentos ">
                            Segurança Alimentar e gestão de alimentos 
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Cultura de paz, não violência, discriminação e racismo">
                            Cultura de paz, não violência, discriminação e racismo
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Empreendedorismo e inovação">
                            Empreendedorismo e inovação
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Geração de emprego">
                            Geração de emprego
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Consumo sustentável">
                            Consumo sustentável
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Direitos trabalhistas">
                            Direitos trabalhistas
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Tráfico de pessoas">
                            Tráfico de pessoas
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Tráfico de drogas">
                            Tráfico de drogas
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Migração">
                            Migração
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Acesso público à informação">
                            Acesso público à informação
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Proteção e salvaguarda do patrimônio cultural - NATURAL">
                            Proteção e salvaguarda do patrimônio cultural - NATURAL
                        </label>
                        <label for="other">                            
                            <input type="checkbox" name="other" value="outro">
                            Outro:
                            <input type="text" id="other" name="other" placeholder="Especifique">
                        </label>
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
                            <input type="checkbox" name="" value="Soluções e tecnologias para a Habitação, infraestrutura e construção">
                            Soluções e tecnologias para a Habitação, infraestrutura e construção
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Acesso à habitação adequada e a preço acessível, mercado imobiliário">
                            Acesso à habitação adequada e a preço acessível, mercado imobiliário
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Serviços relacionados à participação cidadã">
                            Serviços relacionados à participação cidadã
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Urbanização de favelas">
                            Urbanização de favelas
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
                            <input type="checkbox" name="" value="Qualidade do ar e redução da poluição em cidades">
                            Qualidade do ar e redução da poluição em cidades
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Hortas urbanas">
                            Hortas urbanas
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Infraestrutura para deficientes físicos">
                            Infraestrutura para deficientes físicos
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
                            <input type="checkbox" name="" value="Assistência técnica e financeira, para construções sustentáveis e resilientes, utilizando materiais locais">
                            Assistência técnica e financeira, para construções sustentáveis e resilientes, utilizando materiais locais
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
                            <input type="checkbox" name="" value="Acesso à informação">
                            Acesso à informação
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Acesso à cultura">
                            Acesso à cultura
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Tecnologia da informação e telecomunicações">
                            Tecnologia da informação e telecomunicações
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
                            <input type="checkbox" name="" value="Tecnologia da Informação e  Inteligência Artificial para área de educação, cultura e economia criativa">
                            Tecnologia da Informação e  Inteligência Artificial para área de educação, cultura e economia criativa
                        </label>
                        <label for="other">                            
                            <input type="checkbox" name="other" value="outro">
                            Outro:
                            <input type="text" id="other" name="other" placeholder="Especifique">
                        </label>
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
                            <input type="checkbox" name="" value="Resistência microbiana">
                            Resistência microbiana
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
                            <input type="checkbox" name="" value="Novas tecnologias apropriadas e serviços financeiros, incluindo microfinanças">
                            Novas tecnologias apropriadas e serviços financeiros, incluindo microfinanças
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Sistemas de transparência financeira e eliminação da corrupção">
                            Sistemas de transparência financeira e eliminação da corrupção
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Mobilizar e aumentar significativamente, a partir de todas as fontes, os recursos financeiros para a conservação e o uso sustentável da biodiversidade e dos ecossistemas">
                            Mobilizar e aumentar significativamente, a partir de todas as fontes, os recursos financeiros para a conservação e o uso sustentável da biodiversidade e dos ecossistemas
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
                            <input type="checkbox" name="" value="Mudanças climáticas">
                            Mudanças climáticas
                        </label>
                        <label for="">                            
                            <input type="checkbox" name="" value="Preservação da fauna e da flora">
                            Preservação da fauna e da flora
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
                            <input type="checkbox" name="" value="Diminuição da sobrepesca e práticas de pesca destrutivas, Restauração das populações de peixes">
                            Diminuição da sobrepesca e práticas de pesca destrutivas, Restauração das populações de peixes 
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
                    </div>
                </fieldset>

                <!-- ODS -->
                <fieldset class="step">
                    <h2>A qual ou quais Objetivos do Desenvolvimento Sustentável a sua solução está vinculada? </h2>
                    <h3>A quais destes desafios socioambientais a sua solução está vinculada?  Assinale todas as alternativas pertinentes.</h3>
                    <!-- objetivo 01 - Erradicação da pobreza -->
                    <div class="form-group">
                        <label for="">                            
                            <input type="radio" name="" value="Objetivo 1. Acabar com a pobreza em todas as suas formas, em todos os lugares">
                            Objetivo 1. Acabar com a pobreza em todas as suas formas, em todos os lugares
                        </label>
                        <div class="form-group">
                            <label for="">                            
                                <input type="checkbox" name="" value="1.1 Até 2030, erradicar a pobreza extrema para todas as pessoas em todos os lugares, atualmente medida como pessoas vivendo com menos de US$ 1,90 por dia">
                                1.1 Até 2030, erradicar a pobreza extrema para todas as pessoas em todos os lugares, atualmente medida como pessoas vivendo com menos de US$ 1,90 por dia
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="1.2 Até 2030, reduzir pelo menos à metade a proporção de homens, mulheres e crianças, de todas as idades, que vivem na pobreza, em todas as suas dimensões, de acordo com as definições nacionais">
                                1.2 Até 2030, reduzir pelo menos à metade a proporção de homens, mulheres e crianças, de todas as idades, que vivem na pobreza, em todas as suas dimensões, de acordo com as definições nacionais
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="1.3 Implementar, em nível nacional, medidas e sistemas de proteção social adequados, para todos, incluindo pisos, e até 2030 atingir a cobertura substancial dos pobres e vulneráveis">
                                1.3 Implementar, em nível nacional, medidas e sistemas de proteção social adequados, para todos, incluindo pisos, e até 2030 atingir a cobertura substancial dos pobres e vulneráveis
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="1.4 Até 2030, garantir que todos os homens e mulheres, particularmente os pobres e vulneráveis, tenham direitos iguais aos recursos econômicos, bem como o acesso a serviços básicos, propriedade e controle sobre a terra e outras formas de propriedade, herança, recursos naturais, novas tecnologias apropriadas e serviços financeiros, incluindo microfinanças">
                                1.4 Até 2030, garantir que todos os homens e mulheres, particularmente os pobres e vulneráveis, tenham direitos iguais aos recursos econômicos, bem como o acesso a serviços básicos, propriedade e controle sobre a terra e outras formas de propriedade, herança, recursos naturais, novas tecnologias apropriadas e serviços financeiros, incluindo microfinanças
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="1.5 Até 2030, construir a resiliência dos pobres e daqueles em situação de vulnerabilidade, e reduzir a exposição e vulnerabilidade destes a eventos extremos relacionados com o clima e outros choques e desastres econômicos, sociais e ambientais">
                                1.5 Até 2030, construir a resiliência dos pobres e daqueles em situação de vulnerabilidade, e reduzir a exposição e vulnerabilidade destes a eventos extremos relacionados com o clima e outros choques e desastres econômicos, sociais e ambientais
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="1.a Garantir uma mobilização significativa de recursos a partir de uma variedade de fontes, inclusive por meio do reforço da cooperação para o desenvolvimento, para proporcionar meios adequados e previsíveis para que os países em desenvolvimento, em particular os países menos desenvolvidos, implementem programas e políticas para acabar com a pobreza em todas as suas dimensões">
                                1.a Garantir uma mobilização significativa de recursos a partir de uma variedade de fontes, inclusive por meio do reforço da cooperação para o desenvolvimento, para proporcionar meios adequados e previsíveis para que os países em desenvolvimento, em particular os países menos desenvolvidos, implementem programas e políticas para acabar com a pobreza em todas as suas dimensões
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="1.b Criar marcos políticos sólidos em níveis nacional, regional e internacional, com base em estratégias de desenvolvimento a favor dos pobres e sensíveis a gênero, para apoiar investimentos acelerados nas ações de erradicação da pobreza">
                                1.b Criar marcos políticos sólidos em níveis nacional, regional e internacional, com base em estratégias de desenvolvimento a favor dos pobres e sensíveis a gênero, para apoiar investimentos acelerados nas ações de erradicação da pobreza
                            </label>
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