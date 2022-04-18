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
                        <label for="eixo">                            
                            <input type="radio" name="eixo" value="todos">
                            todos
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
                        <!-- Subárea - Objetivo 01 -->
                        <div class="form-group sub-ods">
                            <h3>A quais destes desafios socioambientais a sua solução está vinculada?  Assinale todas as alternativas pertinentes.</h3>
                            <label for="">                            
                                <input type="checkbox" name="" value="1.1">
                                1.1 Até 2030, erradicar a pobreza extrema para todas as pessoas em todos os lugares, atualmente medida como pessoas vivendo com menos de US$ 1,90 por dia
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="1.2">
                                1.2 Até 2030, reduzir pelo menos à metade a proporção de homens, mulheres e crianças, de todas as idades, que vivem na pobreza, em todas as suas dimensões, de acordo com as definições nacionais
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="1.3">
                                1.3 Implementar, em nível nacional, medidas e sistemas de proteção social adequados, para todos, incluindo pisos, e até 2030 atingir a cobertura substancial dos pobres e vulneráveis
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="1.4">
                                1.4 Até 2030, garantir que todos os homens e mulheres, particularmente os pobres e vulneráveis, tenham direitos iguais aos recursos econômicos, bem como o acesso a serviços básicos, propriedade e controle sobre a terra e outras formas de propriedade, herança, recursos naturais, novas tecnologias apropriadas e serviços financeiros, incluindo microfinanças
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="1.5">
                                1.5 Até 2030, construir a resiliência dos pobres e daqueles em situação de vulnerabilidade, e reduzir a exposição e vulnerabilidade destes a eventos extremos relacionados com o clima e outros choques e desastres econômicos, sociais e ambientais
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="1.a">
                                1.a Garantir uma mobilização significativa de recursos a partir de uma variedade de fontes, inclusive por meio do reforço da cooperação para o desenvolvimento, para proporcionar meios adequados e previsíveis para que os países em desenvolvimento, em particular os países menos desenvolvidos, implementem programas e políticas para acabar com a pobreza em todas as suas dimensões
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="1.b">
                                1.b Criar marcos políticos sólidos em níveis nacional, regional e internacional, com base em estratégias de desenvolvimento a favor dos pobres e sensíveis a gênero, para apoiar investimentos acelerados nas ações de erradicação da pobreza
                            </label>
                        </div>                         
                    </div>
                     <!-- objetivo 02 - Acabar com a fome -->
                     <div class="form-group">
                        <label for="">                            
                            <input type="checkbox" name="" value="Objetivo 2">
                            Objetivo 2. Acabar com a fome, alcançar a segurança alimentar e melhoria da nutrição e promover a agricultura sustentável
                        </label>
                        <!-- Subárea - Objetivo 02 -->
                        <div class="form-group sub-ods">
                            <h3>A quais destes desafios socioambientais a sua solução está vinculada?  Assinale todas as alternativas pertinentes.</h3>
                            <label for="">                            
                                <input type="checkbox" name="" value="2.1">
                                2.1 Até 2030, acabar com a fome e garantir o acesso de todas as pessoas, em particular os pobres e pessoas em situações vulneráveis, incluindo crianças, a alimentos seguros, nutritivos e suficientes durante todo o ano
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="2.2">
                                2.2 Até 2030, acabar com todas as formas de desnutrição, incluindo atingir, até 2025, as metas acordadas internacionalmente sobre nanismo e caquexia em crianças menores de cinco anos de idade, e atender às necessidades nutricionais dos adolescentes, mulheres grávidas e lactantes e pessoas idosas
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="2.3">
                                2.3 Até 2030, dobrar a produtividade agrícola e a renda dos pequenos produtores de alimentos, particularmente das mulheres, povos indígenas, agricultores familiares, pastores e pescadores, inclusive por meio de acesso seguro e igual à terra, outros recursos produtivos e insumos, conhecimento, serviços financeiros, mercados e oportunidades de agregação de valor e de emprego não agrícola
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="2.4">
                                2.4 Até 2030, garantir sistemas sustentáveis de produção de alimentos e implementar práticas agrícolas resilientes, que aumentem a produtividade e a produção, que ajudem a manter os ecossistemas, que fortaleçam a capacidade de adaptação às mudanças climáticas, às condições meteorológicas extremas, secas, inundações e outros desastres, e que melhorem progressivamente a qualidade da terra e do solo
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="2.5">
                                2.5 Até 2020, manter a diversidade genética de sementes, plantas cultivadas, animais de criação e domesticados e suas respectivas espécies selvagens, inclusive por meio de bancos de sementes e plantas diversificados e bem geridos em nível nacional, regional e internacional, e garantir o acesso e a repartição justa e equitativa dos benefícios decorrentes da utilização dos recursos genéticos e conhecimentos tradicionais associados, como acordado internacionalmente
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="2.a">
                                2.a Aumentar o investimento, inclusive via o reforço da cooperação internacional, em infraestrutura rural, pesquisa e extensão de serviços agrícolas, desenvolvimento de tecnologia, e os bancos de genes de plantas e animais, para aumentar a capacidade de produção agrícola nos países em desenvolvimento, em particular nos países menos desenvolvidos
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="2.b">
                                2.b Corrigir e prevenir as restrições ao comércio e distorções nos mercados agrícolas mundiais, incluindo a eliminação paralela de todas as formas de subsídios à exportação e todas as medidas de exportação com efeito equivalente, de acordo com o mandato da Rodada de Desenvolvimento de Doha
                            </label>                            
                            <label for="">                            
                                <input type="checkbox" name="" value="2.c">
                                2.c Adotar medidas para garantir o funcionamento adequado dos mercados de commodities de alimentos e seus derivados, e facilitar o acesso oportuno à informação de mercado, inclusive sobre as reservas de alimentos, a fim de ajudar a limitar a volatilidade extrema dos preços dos alimentos
                            </label>
                        </div>                         
                    </div>
                    <!-- objetivo 03 - Assegurar uma vida saudável -->
                    <div class="form-group">
                        <label for="">                            
                            <input type="checkbox" name="" value="Objetivo 3">
                            Objetivo 3. Assegurar uma vida saudável e promover o bem-estar para todas e todos, em todas as idades
                        </label>
                        <!-- Subárea - Objetivo 02 -->
                        <div class="form-group sub-ods">
                            <h3>A quais destes desafios socioambientais a sua solução está vinculada?  Assinale todas as alternativas pertinentes.</h3>
                            <label for="">                            
                                <input type="checkbox" name="" value="3.1">
                                3.1 Até 2030, reduzir a taxa de mortalidade materna global para menos de 70 mortes por 100.000 nascidos vivos
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="3.2">
                                3.2 Até 2030, acabar com as mortes evitáveis de recém-nascidos e crianças menores de 5 anos, com todos os países objetivando reduzir a mortalidade neonatal para pelo menos 12 por 1.000 nascidos vivos e a mortalidade de crianças menores de 5 anos para pelo menos 25 por 1.000 nascidos vivos
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="3.3">
                                3.3 Até 2030, acabar com as epidemias de AIDS, tuberculose, malária e doenças tropicais negligenciadas, e combater a hepatite, doenças transmitidas pela água, e outras doenças transmissíveis
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="3.4">
                                3.4 Até 2030, reduzir em um terço a mortalidade prematura por doenças não transmissíveis via prevenção e tratamento, e promover a saúde mental e o bem-estar
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="3.5">
                                3.5 Reforçar a prevenção e o tratamento do abuso de substâncias, incluindo o abuso de drogas entorpecentes e uso nocivo do álcool
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="3.6">
                                3.6 Até 2020, reduzir pela metade as mortes e os ferimentos globais por acidentes em estradas
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="3.7">
                                3.7 Até 2030, assegurar o acesso universal aos serviços de saúde sexual e reprodutiva, incluindo o planejamento familiar, informação e educação, bem como a integração da saúde reprodutiva em estratégias e programas nacionais
                            </label>                            
                            <label for="">                            
                                <input type="checkbox" name="" value="3.8">
                                3.8 Atingir a cobertura universal de saúde, incluindo a proteção do risco financeiro, o acesso a serviços de saúde essenciais de qualidade e o acesso a medicamentos e vacinas essenciais seguros, eficazes, de qualidade e a preços acessíveis para todos
                            </label>                         
                            <label for="">                            
                                <input type="checkbox" name="" value="3.9">
                                3.9 Até 2030, reduzir substancialmente o número de mortes e doenças por produtos químicos perigosos, contaminação e poluição do ar e água do solo
                            </label>                         
                            <label for="">                            
                                <input type="checkbox" name="" value="3.a">
                                3.a Fortalecer a implementação da Convenção-Quadro para o Controle do Tabaco em todos os países, conforme apropriado
                            </label>                         
                            <label for="">                            
                                <input type="checkbox" name="" value="3.b">
                                3.b Apoiar a pesquisa e o desenvolvimento de vacinas e medicamentos para as doenças transmissíveis e não transmissíveis, que afetam principalmente os países em desenvolvimento, proporcionar o acesso a medicamentos e vacinas essenciais a preços acessíveis, de acordo com a Declaração de Doha, que afirma o direito dos países em desenvolvimento de utilizarem plenamente as disposições do acordo TRIPS sobre flexibilidades para proteger a saúde pública e, em particular, proporcionar o acesso a medicamentos para todos
                            </label>                         
                            <label for="">                            
                                <input type="checkbox" name="" value="3.c">
                                3.c Aumentar substancialmente o financiamento da saúde e o recrutamento, desenvolvimento e formação, e retenção do pessoal de saúde nos países em desenvolvimento, especialmente nos países menos desenvolvidos e nos pequenos Estados insulares em desenvolvimento
                            </label>                         
                            <label for="">                            
                                <input type="checkbox" name="" value="3.d">
                                3.d Reforçar a capacidade de todos os países, particularmente os países em desenvolvimento, para o alerta precoce, redução de riscos e gerenciamento de riscos nacionais e globais de saúde
                            </label>
                        </div>                         
                    </div>
                    <!-- objetivo 04 - Assegurar a educação inclusiva -->
                    <div class="form-group">
                        <label for="">                            
                            <input type="checkbox" name="" value="Objetivo 4">
                            Objetivo 4. Assegurar a educação inclusiva e equitativa e de qualidade, e promover oportunidades de aprendizagem ao longo da vida para todas e todos
                        </label>
                        <!-- Subárea - Objetivo 04 -->
                        <div class="form-group sub-ods">
                            <h3>A quais destes desafios socioambientais a sua solução está vinculada?  Assinale todas as alternativas pertinentes.</h3>
                            <label for="">                            
                                <input type="checkbox" name="" value="4.1">
                                4.1 Até 2030, garantir que todas as meninas e meninos completem o ensino primário e secundário livre, equitativo e de qualidade, que conduza a resultados de aprendizagem relevantes e eficazes
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="4.2">
                                4.2 Até 2030, garantir que todos as meninas e meninos tenham acesso a um desenvolvimento de qualidade na primeira infância, cuidados e educação pré-escolar, de modo que eles estejam prontos para o ensino primário
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="4.3">
                                4.3 Até 2030, assegurar a igualdade de acesso para todos os homens e mulheres à educação técnica, profissional e superior de qualidade, a preços acessíveis, incluindo universidade
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="4.4">
                                4.4 Até 2030, aumentar substancialmente o número de jovens e adultos que tenham habilidades relevantes, inclusive competências técnicas e profissionais, para emprego, trabalho decente e empreendedorismo
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="4.5">
                                4.5 Até 2030, eliminar as disparidades de gênero na educação e garantir a igualdade de acesso a todos os níveis de educação e formação profissional para os mais vulneráveis, incluindo as pessoas com deficiência, povos indígenas e as crianças em situação de vulnerabilidade
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="4.6">
                                4.6 Até 2030, garantir que todos os jovens e uma substancial proporção dos adultos, homens e mulheres estejam alfabetizados e tenham adquirido o conhecimento básico de matemática
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="4.7">
                                4.6 Até 2030, garantir que todos os jovens e uma substancial proporção dos adultos, homens e mulheres estejam alfabetizados e tenham adquirido o conhecimento básico de matemática
                            </label>                            
                            <label for="">                            
                                <input type="checkbox" name="" value="4.a">
                                4.a Construir e melhorar instalações físicas para educação, apropriadas para crianças e sensíveis às deficiências e ao gênero, e que proporcionem ambientes de aprendizagem seguros e não violentos, inclusivos e eficazes para todos
                            </label>                         
                            <label for="">                            
                                <input type="checkbox" name="" value="4.b">
                                4.b Até 2020, substancialmente ampliar globalmente o número de bolsas de estudo para os países em desenvolvimento, em particular os países menos desenvolvidos, pequenos Estados insulares em desenvolvimento e os países africanos, para o ensino superior, incluindo programas de formação profissional, de tecnologia da informação e da comunicação, técnicos, de engenharia e programas científicos em países desenvolvidos e outros países em desenvolvimento
                            </label>                         
                            <label for="">                            
                                <input type="checkbox" name="" value="4.c">
                                4.c Até 2030, substancialmente aumentar o contingente de professores qualificados, inclusive por meio da cooperação internacional para a formação de professores, nos países em desenvolvimento, especialmente os países menos desenvolvidos e pequenos Estados insulares em desenvolvimento
                            </label>    
                        </div>                         
                    </div>                    
                    <!-- objetivo 05 - Alcançar a igualdade de gênero  -->
                    <div class="form-group">
                        <label for="">                            
                            <input type="checkbox" name="" value="Objetivo 5">
                            Objetivo 5. Alcançar a igualdade de gênero e empoderar todas as mulheres e meninas
                        </label>
                        <!-- Subárea - Objetivo 05 -->
                        <div class="form-group sub-ods">
                            <h3>A quais destes desafios socioambientais a sua solução está vinculada?  Assinale todas as alternativas pertinentes.</h3>
                            <label for="">                            
                                <input type="checkbox" name="" value="5.1">
                                5.1 Acabar com todas as formas de discriminação contra todas as mulheres e meninas em toda parte
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="5.2">
                                5.2 Eliminar todas as formas de violência contra todas as mulheres e meninas nas esferas públicas e privadas, incluindo o tráfico e exploração sexual e de outros tipos
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="5.3">
                                5.3 Eliminar todas as práticas nocivas, como os casamentos prematuros, forçados e de crianças e mutilações genitais femininas
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="5.4">
                                5.4 Reconhecer e valorizar o trabalho de assistência e doméstico não remunerado, por meio da disponibilização de serviços públicos, infraestrutura e políticas de proteção social, bem como a promoção da responsabilidade compartilhada dentro do lar e da família, conforme os contextos nacionais
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="5.5">
                                5.5 Garantir a participação plena e efetiva das mulheres e a igualdade de oportunidades para a liderança em todos os níveis de tomada de decisão na vida política, econômica e pública
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="5.6">
                                5.6 Assegurar o acesso universal à saúde sexual e reprodutiva e os direitos reprodutivos, como acordado em conformidade com o Programa de Ação da Conferência Internacional sobre População e Desenvolvimento e com a Plataforma de Ação de Pequim e os documentos resultantes de suas conferências de revisão
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="5.a">
                                5.a Realizar reformas para dar às mulheres direitos iguais aos recursos econômicos, bem como o acesso a propriedade e controle sobre a terra e outras formas de propriedade, serviços financeiros, herança e os recursos naturais, de acordo com as leis nacionais
                            </label>                            
                            <label for="">                            
                                <input type="checkbox" name="" value="5.b">
                                5.b Aumentar o uso de tecnologias de base, em particular as tecnologias de informação e comunicação, para promover o empoderamento das mulheres
                            </label>                         
                            <label for="">                            
                                <input type="checkbox" name="" value="5.c">
                                5.b Aumentar o uso de tecnologias de base, em particular as tecnologias de informação e comunicação, para promover o empoderamento das mulheres
                            </label>     
                        </div>                         
                    </div>
                    <!-- objetivo 06 - Assegurar a disponibilidade -->
                    <div class="form-group">
                        <label for="">                            
                            <input type="checkbox" name="" value="Objetivo 6">
                            Objetivo 6. Assegurar a disponibilidade e gestão sustentável da água e saneamento para todas e todos
                        </label>
                        <!-- Subárea - Objetivo 06 -->
                        <div class="form-group sub-ods">
                            <h3>A quais destes desafios socioambientais a sua solução está vinculada?  Assinale todas as alternativas pertinentes.</h3>
                            <label for="">                            
                                <input type="checkbox" name="" value="6.1">
                                Objetivo 6. Assegurar a disponibilidade e gestão sustentável da água e saneamento para todas e todos
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="6.2">
                                6.2 Até 2030, alcançar o acesso a saneamento e higiene adequados e equitativos para todos, e acabar com a defecação a céu aberto, com especial atenção para as necessidades das mulheres e meninas e daqueles em situação de vulnerabilidade
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="6.3">
                                6.2 Até 2030, alcançar o acesso a saneamento e higiene adequados e equitativos para todos, e acabar com a defecação a céu aberto, com especial atenção para as necessidades das mulheres e meninas e daqueles em situação de vulnerabilidade
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="6.4">
                                6.4 Até 2030, aumentar substancialmente a eficiência do uso da água em todos os setores e assegurar retiradas sustentáveis e o abastecimento de água doce para enfrentar a escassez de água, e reduzir substancialmente o número de pessoas que sofrem com a escassez de água
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="6.5">
                                6.4 Até 2030, aumentar substancialmente a eficiência do uso da água em todos os setores e assegurar retiradas sustentáveis e o abastecimento de água doce para enfrentar a escassez de água, e reduzir substancialmente o número de pessoas que sofrem com a escassez de água
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="6.6">
                                6.6 Até 2020, proteger e restaurar ecossistemas relacionados com a água, incluindo montanhas, florestas, zonas úmidas, rios, aquíferos e lagos
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="6.a">
                                6.a Até 2030, ampliar a cooperação internacional e o apoio à capacitação para os países em desenvolvimento em atividades e programas relacionados à água e saneamento, incluindo a coleta de água, a dessalinização, a eficiência no uso da água, o tratamento de efluentes, a reciclagem e as tecnologias de reuso
                            </label>                            
                            <label for="">                            
                                <input type="checkbox" name="" value="6.b">
                                6.b Apoiar e fortalecer a participação das comunidades locais, para melhorar a gestão da água e do saneamento
                            </label>  
                        </div>                         
                    </div>
                    <!-- objetivo 07 - Assegurar o acesso confiável -->
                    <div class="form-group">
                        <label for="">                            
                            <input type="checkbox" name="" value="Objetivo 7">
                            Objetivo 7. Assegurar o acesso confiável, sustentável, moderno e a preço acessível à energia para todas e todos
                        </label>
                        <!-- Subárea - Objetivo 07 -->
                        <div class="form-group sub-ods">
                            <h3>A quais destes desafios socioambientais a sua solução está vinculada?  Assinale todas as alternativas pertinentes.</h3>
                            <label for="">                            
                                <input type="checkbox" name="" value="7.1">
                                7.1 Até 2030, assegurar o acesso universal, confiável, moderno e a preços acessíveis a serviços de energia
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="7.2">
                                7.2 Até 2030, aumentar substancialmente a participação de energias renováveis na matriz energética global
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="7.3">
                                7.3 Até 2030, dobrar a taxa global de melhoria da eficiência energética
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="7.a">
                                7.a Até 2030, reforçar a cooperação internacional para facilitar o acesso a pesquisa e tecnologias de energia limpa, incluindo energias renováveis, eficiência energética e tecnologias de combustíveis fósseis avançadas e mais limpas, e promover o investimento em infraestrutura de energia e em tecnologias de energia limpa
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="7.b">
                                7.b Até 2030, expandir a infraestrutura e modernizar a tecnologia para o fornecimento de serviços de energia modernos e sustentáveis para todos nos países em desenvolvimento, particularmente nos países menos desenvolvidos, nos pequenos Estados insulares em desenvolvimento e nos países em desenvolvimento sem litoral, de acordo com seus respectivos programas de apoio
                            </label>
                        </div>                         
                    </div>
                    <!-- objetivo 08 - Promover o crescimento econômico sustentado -->
                    <div class="form-group">
                        <label for="">                            
                            <input type="checkbox" name="" value="Objetivo 7">
                            Objetivo 8. Promover o crescimento econômico sustentado, inclusivo e sustentável, emprego pleno e produtivo e trabalho decente para todas e todos
                        </label>
                        <!-- Subárea - Objetivo 08 -->
                        <div class="form-group sub-ods">
                            <h3>A quais destes desafios socioambientais a sua solução está vinculada?  Assinale todas as alternativas pertinentes.</h3>
                            <label for="">                            
                                <input type="checkbox" name="" value="8.1">
                                8.1 Sustentar o crescimento econômico per capita de acordo com as circunstâncias nacionais e, em particular, um crescimento anual de pelo menos 7% do produto interno bruto [PIB] nos países menos desenvolvidos
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="8.2">
                                8.2 Atingir níveis mais elevados de produtividade das economias por meio da diversificação, modernização tecnológica e inovação, inclusive por meio de um foco em setores de alto valor agregado e dos setores intensivos em mão de obra
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="8.3">
                                8.3 Promover políticas orientadas para o desenvolvimento que apoiem as atividades produtivas, geração de emprego decente, empreendedorismo, criatividade e inovação, e incentivar a formalização e o crescimento das micro, pequenas e médias empresas, inclusive por meio do acesso a serviços financeiros
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="8.4">
                                8.4 Melhorar progressivamente, até 2030, a eficiência dos recursos globais no consumo e na produção, e empenhar-se para dissociar o crescimento econômico da degradação ambiental, de acordo com o Plano Decenal de Programas sobre Produção e Consumo Sustentáveis, com os países desenvolvidos assumindo a liderança
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="8.5">
                                8.5 Até 2030, alcançar o emprego pleno e produtivo e trabalho decente para todas as mulheres e homens, inclusive para os jovens e as pessoas com deficiência, e remuneração igual para trabalho de igual valor
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="8.6">
                                8.6 Até 2020, reduzir substancialmente a proporção de jovens sem emprego, educação ou formação
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="8.7">
                                8.7 Tomar medidas imediatas e eficazes para erradicar o trabalho forçado, acabar com a escravidão moderna e o tráfico de pessoas, e assegurar a proibição e eliminação das piores formas de trabalho infantil, incluindo recrutamento e utilização de crianças-soldado, e até 2025 acabar com o trabalho infantil em todas as suas formas
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="8.8">
                                8.8 Proteger os direitos trabalhistas e promover ambientes de trabalho seguros e protegidos para todos os trabalhadores, incluindo os trabalhadores migrantes, em particular as mulheres migrantes, e pessoas em empregos precários
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="8.9">
                                8.9 Até 2030, elaborar e implementar políticas para promover o turismo sustentável, que gera empregos e promove a cultura e os produtos locais
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="8.10">
                                8.10 Fortalecer a capacidade das instituições financeiras nacionais para incentivar a expansão do acesso aos serviços bancários, de seguros e financeiros para todos
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="8.a">
                                8.a Aumentar o apoio da Iniciativa de Ajuda para o Comércio [Aid for Trade] para os países em desenvolvimento, particularmente os países menos desenvolvidos, inclusive por meio do Quadro Integrado Reforçado para a Assistência Técnica Relacionada com o Comércio para os países menos desenvolvidos
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="8.b">
                                8.b Até 2020, desenvolver e operacionalizar uma estratégia global para o emprego dos jovens e implementar o Pacto Mundial para o Emprego da Organização Internacional do Trabalho [OIT]
                            </label>
                        </div>                         
                    </div>                    
                    <!-- objetivo 09 - Construir infraestruturas resilientes -->
                    <div class="form-group">
                        <label for="">                            
                            <input type="checkbox" name="" value="Objetivo 9">
                            Objetivo 9. Construir infraestruturas resilientes, promover a industrialização inclusiva e sustentável e fomentar a inovação
                        </label>
                        <!-- Subárea - Objetivo 09 -->
                        <div class="form-group sub-ods">
                            <h3>A quais destes desafios socioambientais a sua solução está vinculada?  Assinale todas as alternativas pertinentes.</h3>
                            <label for="">                            
                                <input type="checkbox" name="" value="9.1">
                                9.1 Desenvolver infraestrutura de qualidade, confiável, sustentável e resiliente, incluindo infraestrutura regional e transfronteiriça, para apoiar o desenvolvimento econômico e o bem-estar humano, com foco no acesso equitativo e a preços acessíveis para todos
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="9.2">
                                9.2 Promover a industrialização inclusiva e sustentável e, até 2030, aumentar significativamente a participação da indústria no setor de emprego e no PIB, de acordo com as circunstâncias nacionais, e dobrar sua participação nos países menos desenvolvidos
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="9.3">
                                9.3 Aumentar o acesso das pequenas indústrias e outras empresas, particularmente em países em desenvolvimento, aos serviços financeiros, incluindo crédito acessível e sua integração em cadeias de valor e mercados
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="9.4">
                                9.4 Até 2030, modernizar a infraestrutura e reabilitar as indústrias para torná-las sustentáveis, com eficiência aumentada no uso de recursos e maior adoção de tecnologias e processos industriais limpos e ambientalmente corretos; com todos os países atuando de acordo com suas respectivas capacidades
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="9.5">
                                9.5 Fortalecer a pesquisa científica, melhorar as capacidades tecnológicas de setores industriais em todos os países, particularmente os países em desenvolvimento, inclusive, até 2030, incentivando a inovação e aumentando substancialmente o número de trabalhadores de pesquisa e desenvolvimento por milhão de pessoas e os gastos público e privado em pesquisa e desenvolvimento
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="9.a">
                                9.a Facilitar o desenvolvimento de infraestrutura sustentável e resiliente em países em desenvolvimento, por meio de maior apoio financeiro, tecnológico e técnico aos países africanos, aos países menos desenvolvidos, aos países em desenvolvimento sem litoral e aos pequenos Estados insulares em desenvolvimento
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="9.b">
                                9.b Apoiar o desenvolvimento tecnológico, a pesquisa e a inovação nacionais nos países em desenvolvimento, inclusive garantindo um ambiente político propício para, entre outras coisas, a diversificação industrial e a agregação de valor às commodities
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="9.c">
                                9.c Aumentar significativamente o acesso às tecnologias de informação e comunicação e se empenhar para oferecer acesso universal e a preços acessíveis à internet nos países menos desenvolvidos
                            </label>
                        </div>                         
                    </div>                  
                    <!-- objetivo 10 - Reduzir a desigualdade dentro dos países e entre eles -->
                    <div class="form-group">
                        <label for="">                            
                            <input type="checkbox" name="" value="Objetivo 10">
                            Objetivo 10. Reduzir a desigualdade dentro dos países e entre eles
                        </label>
                        <!-- Subárea - Objetivo 10 -->
                        <div class="form-group sub-ods">
                            <h3>A quais destes desafios socioambientais a sua solução está vinculada?  Assinale todas as alternativas pertinentes.</h3>
                            <label for="">                            
                                <input type="checkbox" name="" value="10.1">
                                10.1 Até 2030, progressivamente alcançar e sustentar o crescimento da renda dos 40% da população mais pobre a uma taxa maior que a média nacional
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="10.2">
                                10.2 Até 2030, empoderar e promover a inclusão social, econômica e política de todos, independentemente da idade, gênero, deficiência, raça, etnia, origem, religião, condição econômica ou outra
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="10.3">
                                10.3 Garantir a igualdade de oportunidades e reduzir as desigualdades de resultados, inclusive por meio da eliminação de leis, políticas e práticas discriminatórias e da promoção de legislação, políticas e ações adequadas a este respeito
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="10.4">
                                10.4 Adotar políticas, especialmente fiscal, salarial e de proteção social, e alcançar progressivamente uma maior igualdade
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="10.5">
                                10.4 Adotar políticas, especialmente fiscal, salarial e de proteção social, e alcançar progressivamente uma maior igualdade
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="10.6">
                                10.6 Assegurar uma representação e voz mais forte dos países em desenvolvimento em tomadas de decisão nas instituições econômicas e financeiras internacionais globais, a fim de produzir instituições mais eficazes, críveis, responsáveis e legítimas
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="10.7">
                                10.7 Facilitar a migração e a mobilidade ordenada, segura, regular e responsável das pessoas, inclusive por meio da implementação de políticas de migração planejadas e bem geridas
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="10.a">
                                10.a Implementar o princípio do tratamento especial e diferenciado para países em desenvolvimento, em particular os países menos desenvolvidos, em conformidade com os acordos da OMC
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="10.b">
                                10.b Incentivar a assistência oficial ao desenvolvimento e fluxos financeiros, incluindo o investimento externo direto, para os Estados onde a necessidade é maior, em particular os países menos desenvolvidos, os países africanos, os pequenos Estados insulares em desenvolvimento e os países em desenvolvimento sem litoral, de acordo com seus planos e programas nacionais
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="10.c">
                                10.c Até 2030, reduzir para menos de 3% os custos de transação de remessas dos migrantes e eliminar os corredores de remessas com custos superiores a 5%
                            </label>
                        </div>                         
                    </div>                  
                    <!-- objetivo 11 - Reduzir a desigualdade dentro dos países e entre eles -->
                    <div class="form-group">
                        <label for="">                            
                            <input type="checkbox" name="" value="Objetivo 11">
                            Objetivo 11. Tornar as cidades e os assentamentos humanos inclusivos, seguros, resilientes e sustentáveis
                        </label>
                        <!-- Subárea - Objetivo 11 -->
                        <div class="form-group sub-ods">
                            <h3>A quais destes desafios socioambientais a sua solução está vinculada?  Assinale todas as alternativas pertinentes.</h3>
                            <label for="">                            
                                <input type="checkbox" name="" value="11.1">
                                11.1 Até 2030, garantir o acesso de todos à habitação segura, adequada e a preço acessível, e aos serviços básicos e urbanizar as favelas
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="11.2">
                                11.2 Até 2030, proporcionar o acesso a sistemas de transporte seguros, acessíveis, sustentáveis e a preço acessível para todos, melhorando a segurança rodoviária por meio da expansão dos transportes públicos, com especial atenção para as necessidades das pessoas em situação de vulnerabilidade, mulheres, crianças, pessoas com deficiência e idosos
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="11.3">
                                11.3 Até 2030, aumentar a urbanização inclusiva e sustentável, e as capacidades para o planejamento e gestão de assentamentos humanos participativos, integrados e sustentáveis, em todos os países
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="11.4">
                                11.4 Fortalecer esforços para proteger e salvaguardar o patrimônio cultural e natural do mundo
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="11.5">
                                11.5 Até 2030, reduzir significativamente o número de mortes e o número de pessoas afetadas por catástrofes e substancialmente diminuir as perdas econômicas diretas causadas por elas em relação ao produto interno bruto global, incluindo os desastres relacionados à água, com o foco em proteger os pobres e as pessoas em situação de vulnerabilidade
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="11.6">
                                11.6 Até 2030, reduzir o impacto ambiental negativo per capita das cidades, inclusive prestando especial atenção à qualidade do ar, gestão de resíduos municipais e outros
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="11.7">
                                11.7 Até 2030, proporcionar o acesso universal a espaços públicos seguros, inclusivos, acessíveis e verdes, particularmente para as mulheres e crianças, pessoas idosas e pessoas com deficiência
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="11.a">
                                11.a Apoiar relações econômicas, sociais e ambientais positivas entre áreas urbanas, periurbanas e rurais, reforçando o planejamento nacional e regional de desenvolvimento
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="11.b">
                                11.b Até 2020, aumentar substancialmente o número de cidades e assentamentos humanos adotando e implementando políticas e planos integrados para a inclusão, a eficiência dos recursos, mitigação e adaptação às mudanças climáticas, a resiliência a desastres; e desenvolver e implementar, de acordo com o Marco de Sendai para a Redução do Risco de Desastres 2015-2030, o gerenciamento holístico do risco de desastres em todos os níveis
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="11.c">
                                11.c Apoiar os países menos desenvolvidos, inclusive por meio de assistência técnica e financeira, para construções sustentáveis e resilientes, utilizando materiais locais
                            </label>
                        </div>                         
                    </div>                  
                    <!-- objetivo 12 - Assegurar padrões de produção e de consumo sustentáveis -->
                    <div class="form-group">
                        <label for="">                            
                            <input type="checkbox" name="" value="Objetivo 12">
                            Objetivo 12. Assegurar padrões de produção e de consumo sustentáveis
                        </label>
                        <!-- Subárea - Objetivo 12 -->
                        <div class="form-group sub-ods">
                            <h3>A quais destes desafios socioambientais a sua solução está vinculada?  Assinale todas as alternativas pertinentes.</h3>
                            <label for="">                            
                                <input type="checkbox" name="" value="12.1">
                                12.1 Implementar o Plano Decenal de Programas sobre Produção e Consumo Sustentáveis, com todos os países tomando medidas, e os países desenvolvidos assumindo a liderança, tendo em conta o desenvolvimento e as capacidades dos países em desenvolvimento
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="12.2">
                                12.2 Até 2030, alcançar a gestão sustentável e o uso eficiente dos recursos naturais
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="12.3">
                                12.3 Até 2030, reduzir pela metade o desperdício de alimentos per capita mundial, nos níveis de varejo e do consumidor, e reduzir as perdas de alimentos ao longo das cadeias de produção e abastecimento, incluindo as perdas pós-colheita
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="12.4">
                                12.4 Até 2020, alcançar o manejo ambientalmente saudável dos produtos químicos e todos os resíduos, ao longo de todo o ciclo de vida destes, de acordo com os marcos internacionais acordados, e reduzir significativamente a liberação destes para o ar, água e solo, para minimizar seus impactos negativos sobre a saúde humana e o meio ambiente
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="12.5">
                                12.4 Até 2020, alcançar o manejo ambientalmente saudável dos produtos químicos e todos os resíduos, ao longo de todo o ciclo de vida destes, de acordo com os marcos internacionais acordados, e reduzir significativamente a liberação destes para o ar, água e solo, para minimizar seus impactos negativos sobre a saúde humana e o meio ambiente
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="12.6">
                                12.6 Incentivar as empresas, especialmente as empresas grandes e transnacionais, a adotar práticas sustentáveis e a integrar informações de sustentabilidade em seu ciclo de relatórios
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="12.7">
                                12.7 Promover práticas de compras públicas sustentáveis, de acordo com as políticas e prioridades nacionais
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="12.8">
                                12.8 Até 2030, garantir que as pessoas, em todos os lugares, tenham informação relevante e conscientização para o desenvolvimento sustentável e estilos de vida em harmonia com a natureza
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="12.a">
                                12.a Apoiar países em desenvolvimento a fortalecer suas capacidades científicas e tecnológicas para mudar para padrões mais sustentáveis de produção e consumo
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="12.b">
                                12.b Desenvolver e implementar ferramentas para monitorar os impactos do desenvolvimento sustentável para o turismo sustentável, que gera empregos, promove a cultura e os produtos locais
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="12.c">
                                12.c Racionalizar subsídios ineficientes aos combustíveis fósseis, que encorajam o consumo exagerado, eliminando as distorções de mercado, de acordo com as circunstâncias nacionais, inclusive por meio da reestruturação fiscal e a eliminação gradual desses subsídios prejudiciais, caso existam, para refletir os seus impactos ambientais, tendo plenamente em conta as necessidades específicas e condições dos países em desenvolvimento e minimizando os possíveis impactos adversos sobre o seu desenvolvimento de uma forma que proteja os pobres e as comunidades afetadas
                            </label>
                        </div>                         
                    </div>                 
                    <!-- objetivo 13 - Tomar medidas urgentes para combater a mudança climática e seus impactos -->
                    <div class="form-group">
                        <label for="">                            
                            <input type="checkbox" name="" value="Objetivo 13">
                            Objetivo 13. Tomar medidas urgentes para combater a mudança climática e seus impactos  (*)
                        </label>
                        <!-- Subárea - Objetivo 13 -->
                        <div class="form-group sub-ods">
                            <h3>A quais destes desafios socioambientais a sua solução está vinculada?  Assinale todas as alternativas pertinentes.</h3>
                            <label for="">                            
                                <input type="checkbox" name="" value="13.1">
                                13.1 Reforçar a resiliência e a capacidade de adaptação a riscos relacionados ao clima e às catástrofes naturais em todos os países
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="13.2">
                                13.2 Integrar medidas da mudança do clima nas políticas, estratégias e planejamentos nacionais
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="13.3">
                                13.3 Melhorar a educação, aumentar a conscientização e a capacidade humana e institucional sobre mitigação, adaptação, redução de impacto e alerta precoce da mudança do clima
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="13.a">
                                13.a Implementar o compromisso assumido pelos países desenvolvidos partes da Convenção Quadro das Nações Unidas sobre Mudança do Clima [UNFCCC] para a meta de mobilizar conjuntamente US$ 100 bilhões por ano a partir de 2020, de todas as fontes, para atender às necessidades dos países em desenvolvimento, no contexto das ações de mitigação significativas e transparência na implementação; e operacionalizar plenamente o Fundo Verde para o Clima por meio de sua capitalização o mais cedo possível
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="13.b">
                                13.b Promover mecanismos para a criação de capacidades para o planejamento relacionado à mudança do clima e à gestão eficaz, nos países menos desenvolvidos, inclusive com foco em mulheres, jovens, comunidades locais e marginalizadas
                            </label>
                        </div>                         
                        <p><small>(*) Reconhecendo que a Convenção Quadro das Nações Unidas sobre Mudança do Clima [UNFCCC] é o fórum internacional intergovernamental primário para negociar a resposta global à mudança do clima.</small></p>                       
                    </div>                
                    <!-- objetivo 14 - Conservação e uso sustentável dos oceanos -->
                    <div class="form-group">
                        <label for="">                            
                            <input type="checkbox" name="" value="Objetivo 14">
                            Objetivo 14. Conservação e uso sustentável dos oceanos, dos mares e dos recursos marinhos para o desenvolvimento sustentável
                        </label>
                        <!-- Subárea - Objetivo 14 -->
                        <div class="form-group sub-ods">
                            <h3>A quais destes desafios socioambientais a sua solução está vinculada?  Assinale todas as alternativas pertinentes.</h3>
                            <label for="">                            
                                <input type="checkbox" name="" value="14.1">
                                14.1 Até 2025, prevenir e reduzir significativamente a poluição marinha de todos os tipos, especialmente a advinda de atividades terrestres, incluindo detritos marinhos e a poluição por nutrientes
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="14.2">
                                14.2 Até 2020, gerir de forma sustentável e proteger os ecossistemas marinhos e costeiros para evitar impactos adversos significativos, inclusive por meio do reforço da sua capacidade de resiliência, e tomar medidas para a sua restauração, a fim de assegurar oceanos saudáveis e produtivos
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="14.3">
                                14.3 Minimizar e enfrentar os impactos da acidificação dos oceanos, inclusive por meio do reforço da cooperação científica em todos os níveis
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="14.4">
                                14.4 Até 2020, efetivamente regular a coleta, e acabar com a sobrepesca, ilegal, não reportada e não regulamentada e as práticas de pesca destrutivas, e implementar planos de gestão com base científica, para restaurar populações de peixes no menor tempo possível, pelo menos a níveis que possam produzir rendimento máximo sustentável, como determinado por suas características biológicas
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="14.5">
                                14.5 Até 2020, conservar pelo menos 10% das zonas costeiras e marinhas, de acordo com a legislação nacional e internacional, e com base na melhor informação científica disponível
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="14.6">
                                14.6 Até 2020, proibir certas formas de subsídios à pesca, que contribuem para a sobrecapacidade e a sobrepesca, e eliminar os subsídios que contribuam para a pesca ilegal, não reportada e não regulamentada, e abster-se de introduzir novos subsídios como estes, reconhecendo que o tratamento especial e diferenciado adequado e eficaz para os países em desenvolvimento e os países menos desenvolvidos deve ser parte integrante da negociação sobre subsídios à pesca da Organização Mundial do Comércio
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="14.7">
                                14.7 Até 2030, aumentar os benefícios econômicos para os pequenos Estados insulares em desenvolvimento e os países menos desenvolvidos, a partir do uso sustentável dos recursos marinhos, inclusive por meio de uma gestão sustentável da pesca, aquicultura e turismo
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="14.a">
                                14.a Aumentar o conhecimento científico, desenvolver capacidades de pesquisa e transferir tecnologia marinha, tendo em conta os critérios e orientações sobre a Transferência de Tecnologia Marinha da Comissão Oceanográfica Intergovernamental, a fim de melhorar a saúde dos oceanos e aumentar a contribuição da biodiversidade marinha para o desenvolvimento dos países em desenvolvimento, em particular os pequenos Estados insulares em desenvolvimento e os países menos desenvolvidos
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="14.b">
                                14.b Proporcionar o acesso dos pescadores artesanais de pequena escala aos recursos marinhos e mercados
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="14.c">
                                14.c Assegurar a conservação e o uso sustentável dos oceanos e seus recursos pela implementação do direito internacional, como refletido na UNCLOS [Convenção das Nações Unidas sobre o Direito do Mar], que provê o arcabouço legal para a conservação e utilização sustentável dos oceanos e dos seus recursos, conforme registrado no parágrafo 158 do “Futuro Que Queremos”
                            </label>
                        </div>                         
                    </div>                   
                    <!-- objetivo 15 - Proteger, recuperar e promover o uso sustentável -->
                    <div class="form-group">
                        <label for="">                            
                            <input type="checkbox" name="" value="Objetivo 15">
                            Objetivo 15. Proteger, recuperar e promover o uso sustentável dos ecossistemas terrestres, gerir de forma sustentável as florestas, combater a desertificação, deter e reverter a degradação da terra e deter a perda de biodiversidade
                        </label>
                        <!-- Subárea - Objetivo 15 -->
                        <div class="form-group sub-ods">
                            <h3>A quais destes desafios socioambientais a sua solução está vinculada?  Assinale todas as alternativas pertinentes.</h3>
                            <label for="">                            
                                <input type="checkbox" name="" value="15.1">
                                15.1 Até 2020, assegurar a conservação, recuperação e uso sustentável de ecossistemas terrestres e de água doce interiores e seus serviços, em especial florestas, zonas úmidas, montanhas e terras áridas, em conformidade com as obrigações decorrentes dos acordos internacionais
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="15.2">
                                15.2 Até 2020, promover a implementação da gestão sustentável de todos os tipos de florestas, deter o desmatamento, restaurar florestas degradadas e aumentar substancialmente o florestamento e o reflorestamento globalmente
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="15.3">
                                15.3 Até 2030, combater a desertificação, restaurar a terra e o solo degradado, incluindo terrenos afetados pela desertificação, secas e inundações, e lutar para alcançar um mundo neutro em termos de degradação do solo
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="15.4">
                                15.4 Até 2030, assegurar a conservação dos ecossistemas de montanha, incluindo a sua biodiversidade, para melhorar a sua capacidade de proporcionar benefícios que são essenciais para o desenvolvimento sustentável
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="15.5">
                                15.5 Tomar medidas urgentes e significativas para reduzir a degradação de habitat naturais, deter a perda de biodiversidade e, até 2020, proteger e evitar a extinção de espécies ameaçadas
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="15.6">
                                15.6 Garantir uma repartição justa e equitativa dos benefícios derivados da utilização dos recursos genéticos e promover o acesso adequado aos recursos genéticos
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="15.7">
                                15.7 Tomar medidas urgentes para acabar com a caça ilegal e o tráfico de espécies da flora e fauna protegidas e abordar tanto a demanda quanto a oferta de produtos ilegais da vida selvagem
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="15.8">
                                15.8 Até 2020, implementar medidas para evitar a introdução e reduzir significativamente o impacto de espécies exóticas invasoras em ecossistemas terrestres e aquáticos, e controlar ou erradicar as espécies prioritárias
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="15.9">
                                15.9 Até 2020, integrar os valores dos ecossistemas e da biodiversidade ao planejamento nacional e local, nos processos de desenvolvimento, nas estratégias de redução da pobreza e nos sistemas de contas
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="15.a">
                                15.a Mobilizar e aumentar significativamente, a partir de todas as fontes, os recursos financeiros para a conservação e o uso sustentável da biodiversidade e dos ecossistemas
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="15.b">
                                15.b Mobilizar recursos significativos de todas as fontes e em todos os níveis para financiar o manejo florestal sustentável e proporcionar incentivos adequados aos países em desenvolvimento para promover o manejo florestal sustentável, inclusive para a conservação e o reflorestamento
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="15.c">
                                15.c Reforçar o apoio global para os esforços de combate à caça ilegal e ao tráfico de espécies protegidas, inclusive por meio do aumento da capacidade das comunidades locais para buscar oportunidades de subsistência sustentável
                            </label>
                        </div>                         
                    </div>                     
                    <!-- objetivo 16 - Promover sociedades pacíficas e inclusivas  -->
                    <div class="form-group">
                        <label for="">                            
                            <input type="checkbox" name="" value="Objetivo 16">
                            Objetivo 16. Promover sociedades pacíficas e inclusivas para o desenvolvimento sustentável, proporcionar o acesso à justiça para todos e construir instituições eficazes, responsáveis e inclusivas em todos os níveis
                        </label>
                        <!-- Subárea - Objetivo 16 -->
                        <div class="form-group sub-ods">
                            <h3>A quais destes desafios socioambientais a sua solução está vinculada?  Assinale todas as alternativas pertinentes.</h3>
                            <label for="">                            
                                <input type="checkbox" name="" value="16.1">
                                16.1 Reduzir significativamente todas as formas de violência e as taxas de mortalidade relacionada em todos os lugares
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="16.2">
                                16.2 Acabar com abuso, exploração, tráfico e todas as formas de violência e tortura contra crianças
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="16.3">
                                16.3 Promover o Estado de Direito, em nível nacional e internacional, e garantir a igualdade de acesso à justiça para todos
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="16.4">
                                16.4 Até 2030, reduzir significativamente os fluxos financeiros e de armas ilegais, reforçar a recuperação e devolução de recursos roubados e combater todas as formas de crime organizado
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="16.5">
                                16.5 Reduzir substancialmente a corrupção e o suborno em todas as suas formas
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="16.6">
                                16.6 Desenvolver instituições eficazes, responsáveis e transparentes em todos os níveis
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="16.7">
                                16.7 Garantir a tomada de decisão responsiva, inclusiva, participativa e representativa em todos os níveis
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="16.8">
                                16.8 Ampliar e fortalecer a participação dos países em desenvolvimento nas instituições de governança global
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="16.9">
                                16.9 Até 2030, fornecer identidade legal para todos, incluindo o registro de nascimento
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="16.10">
                                16.10 Assegurar o acesso público à informação e proteger as liberdades fundamentais, em conformidade com a legislação nacional e os acordos internacionais
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="16.a">
                                16.a Fortalecer as instituições nacionais relevantes, inclusive por meio da cooperação internacional, para a construção de capacidades em todos os níveis, em particular nos países em desenvolvimento, para a prevenção da violência e o combate ao terrorismo e ao crime
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="16.b">
                                16.b Promover e fazer cumprir leis e políticas não discriminatórias para o desenvolvimento sustentável
                            </label>
                        </div>                         
                    </div>                     
                    <!-- objetivo 17 - Promover sociedades pacíficas e inclusivas  -->
                    <div class="form-group">
                        <label for="">                            
                            <input type="checkbox" name="" value="Objetivo 17">
                            Objetivo 17. Fortalecer os meios de implementação e revitalizar a parceria global para o desenvolvimento sustentável
                        </label>
                        <!-- Subárea - Objetivo 16 -->
                        <div class="form-group sub-ods">
                            <h3>A quais destes desafios socioambientais a sua solução está vinculada?  Assinale todas as alternativas pertinentes.</h3>
                            <label for="">                            
                                <input type="checkbox" name="" value="17.1">
                                17.1 Fortalecer a mobilização de recursos internos, inclusive por meio do apoio internacional aos países em desenvolvimento, para melhorar a capacidade nacional para arrecadação de impostos e outras receitas
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="17.2">
                                17.2 Países desenvolvidos implementarem plenamente os seus compromissos em matéria de assistência oficial ao desenvolvimento [AOD], inclusive fornecer 0,7% da renda nacional bruta [RNB] em AOD aos países em desenvolvimento, dos quais 0,15% a 0,20% para os países menos desenvolvidos; provedores de AOD são encorajados a considerar a definir uma meta para fornecer pelo menos 0,20% da renda nacional bruta em AOD para os países menos desenvolvidos
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="17.3">
                                17.3 Mobilizar recursos financeiros adicionais para os países em desenvolvimento a partir de múltiplas fontes
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="17.4">
                                17.4 Ajudar os países em desenvolvimento a alcançar a sustentabilidade da dívida de longo prazo por meio de políticas coordenadas destinadas a promover o financiamento, a redução e a reestruturação da dívida, conforme apropriado, e tratar da dívida externa dos países pobres altamente endividados para reduzir o superendividamento
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="17.5">
                                17.5 Adotar e implementar regimes de promoção de investimentos para os países menos desenvolvidos
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="17.6">
                                17.6 Melhorar a cooperação Norte-Sul, Sul-Sul e triangular regional e internacional e o acesso à ciência, tecnologia e inovação, e aumentar o compartilhamento de conhecimentos em termos mutuamente acordados, inclusive por meio de uma melhor coordenação entre os mecanismos existentes, particularmente no nível das Nações Unidas, e por meio de um mecanismo de facilitação de tecnologia global
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="17.7">
                                17.7 Promover o desenvolvimento, a transferência, a disseminação e a difusão de tecnologias ambientalmente corretas para os países em desenvolvimento, em condições favoráveis, inclusive em condições concessionais e preferenciais, conforme mutuamente acordado
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="17.8">
                                17.8 Operacionalizar plenamente o Banco de Tecnologia e o mecanismo de capacitação em ciência, tecnologia e inovação para os países menos desenvolvidos até 2017, e aumentar o uso de tecnologias de capacitação, em particular das tecnologias de informação e comunicação
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="17.9">
                                17.9 Reforçar o apoio internacional para a implementação eficaz e orientada da capacitação em países em desenvolvimento, a fim de apoiar os planos nacionais para implementar todos os objetivos de desenvolvimento sustentável, inclusive por meio da cooperação Norte-Sul, Sul-Sul e triangular
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="17.10">
                                17.10 Promover um sistema multilateral de comércio universal, baseado em regras, aberto, não discriminatório e equitativo no âmbito da Organização Mundial do Comércio, inclusive por meio da conclusão das negociações no âmbito de sua Agenda de Desenvolvimento de Doha
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="17.11">
                                17.11 Aumentar significativamente as exportações dos países em desenvolvimento, em particular com o objetivo de duplicar a participação dos países menos desenvolvidos nas exportações globais até 2020
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="17.12">
                                17.12 Concretizar a implementação oportuna de acesso a mercados livres de cotas e taxas, de forma duradoura, para todos os países menos desenvolvidos, de acordo com as decisões da OMC, inclusive por meio de garantias de que as regras de origem preferenciais aplicáveis às importações provenientes de países menos desenvolvidos sejam transparentes e simples, e contribuam para facilitar o acesso ao mercado
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="17.13">
                                17.13 Aumentar a estabilidade macroeconômica global, inclusive por meio da coordenação e da coerência de políticas
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="17.14">
                                17.14 Aumentar a coerência das políticas para o desenvolvimento sustentável
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="17.15">
                                17.15 Respeitar o espaço político e a liderança de cada país para estabelecer e implementar políticas para a erradicação da pobreza e o desenvolvimento sustentável
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="17.16">
                                17.16 Reforçar a parceria global para o desenvolvimento sustentável, complementada por parcerias multissetoriais que mobilizem e compartilhem conhecimento, expertise, tecnologia e recursos financeiros, para apoiar a realização dos objetivos do desenvolvimento sustentável em todos os países, particularmente nos países em desenvolvimentoo
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="17.17">
                                17.17 Incentivar e promover parcerias públicas, público-privadas e com a sociedade civil eficazes, a partir da experiência das estratégias de mobilização de recursos dessas parcerias
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="17.18">
                                17.18 Reforçar o apoio à capacitação para os países em desenvolvimento, inclusive para os países menos desenvolvidos e pequenos Estados insulares em desenvolvimento, para aumentar significativamente a disponibilidade de dados de alta qualidade, atuais e confiáveis, desagregados por renda, gênero, idade, raça, etnia, status migratório, deficiência, localização geográfica e outras características relevantes em contextos nacionais
                            </label>
                            <label for="">                            
                                <input type="checkbox" name="" value="17.19">
                                17.19 Até 2030, valer-se de iniciativas existentes para desenvolver medidas do progresso do desenvolvimento sustentável que complementem o produto interno bruto [PIB] e apoiem a capacitação estatística nos países em desenvolvimento
                            </label>
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

                <!-- descrição do projeto -->
                <fieldset class="step">
                    <h2>Descrição do Projeto</h2>
                    <div class="form-group">                    
                        <label for="">Descreva o problema social e/ou ambiental que seu negócio ou tecnologia resolve. (Atenção, problema é diferente de solução) (50 palavras)</label>
                        <textarea name="message" rows="3" cols="30">                        
                        </textarea>
                    </div>
                    <div class="form-group">                    
                        <label for="">PITCH: Qual a solução (Produto/Serviço) que seu negócio ou tecnologia traz para esse problema? (50 palavras)</label>
                        <textarea name="message" rows="2" cols="30">                        
                        </textarea>
                    </div>
                    <div class="form-group">                    
                        <label for="">Seu negócio incorpora uma inovação de produto, processo ou serviço?</label>                        
                        <label for="">                            
                            <input type="radio" name="" value="Objetivo 2">
                            Não
                        </label>
                        <label for="">                            
                            <input type="radio" name="" value="Objetivo 2">
                            Sim  (Descreva-a. 25 palavras)
                        </label>
                        <textarea name="message" rows="3" cols="30">                        
                        </textarea>
                    </div>
                    <div class="flex-form">
                        <h3>Identifique o Site e Redes Sociais de seu negócio, se tiver</h3>
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
                        <label for="">Vídeo de Apresentação: Se tiver um vídeo que explique seu negócio e sua solução aproveite para compartilhá-lo aqui!</label>
                        <input type="file" name="" id="" accept="video/*">
                        <input type="url" name="" id="" placeholder="ou cole o link do Youtube ou Vimeo">
                    </div>                      
                    <div class="form-group">                                          
                        <label for="">                            
                            <input type="checkbox" name="" value="concordo">
                            Concordância com os Termo de Uso, Política de Privacidade de Dados e Termo de Uso de Imagem
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