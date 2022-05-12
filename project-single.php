<?php
// header
include 'app/views/header.php';
?>
<!-- content -->
<main>
    <section class="page-projects">
        <div class="container flex-container">            
            <div class="content">
                <div class="page-header flex-container">
                    <h1>Título do projeto</h1>
                    <div class="categoty-project">
                        <p class="category">Categoria do Projeto</p>
                        <p class="sub-category">Subcategoria</p>
                    </div>
                </div>
                <div class="info-project">
                    <div class="flex-container">
                        <div class="img-instituicao">
                            <img src="app/assets/images/logo-further/capitalismo-consciente.png" /> 
                        </div>
                        <div class="dados-instituicao">
                            <div class="instituicao">
                                <span class="name-inst">Nome Instituição</span>
                            </div>
                            <div class="localizacao">
                                <span class="city">Cidade</span> | <span class="uf">Estado</span>
                            </div>
                            <div class="social-midia">
                                <ul class="inline">
                                    <li><a href=""><i class="fas fa-globe"></i></a></li>
                                    <li><a href=""><i class="fab fa-instagram"></i></a></li>
                                    <li><a href=""><i class="fab fa-facebook-square"></i></a></li>
                                    <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="votacao">
                            <div class="votos"><span class="number-votos">3521</span> voto(s)</div>      
                            <div class="button">
                                <a class="btn bg-green" href="">Votar</a>
                                <!-- ocultar, mostar somente quando acabar a votação -->
                                <p><span>Votação encerrada</span></p> 
                            </div>                      
                        </div>
                    </div>
                </div>
                <div class="content-project">
                    <div class="content-txt buss">
                        <h2>Objetivos do projeto</h2>
                        <p class="descricao-projeto">Lorem ipsum dolor sit amet consectetur adipisicing elit, Lorem ipsum dolor sit amet consectetur adipisicing elit, Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    </div>
                    <div class="content-txt buss">
                        <h2>Como estamos agindo para atingir nosso objetivo</h2>
                        <p class="pitch-projeto">Lorem ipsum dolor sit amet consectetur adipisicing elit, Lorem ipsum dolor sit amet consectetur adipisicing elit, Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    </div>
                    <div class="content-txt buss">
                        <h2>Nossa visão para o futuro</h2>
                        <p class="inovacao-projeto">Lorem ipsum dolor sit amet consectetur adipisicing elit, Lorem ipsum dolor sit amet consectetur adipisicing elit, Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    </div>
                    <div class="content-txt eco">
                        <h2>Descrição da Organização</h2>
                        <p class="descricao-eco-projeto">Lorem ipsum dolor sit amet consectetur adipisicing elit, Lorem ipsum dolor sit amet consectetur adipisicing elit, Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    </div>
                    <div class="content-txt eco">
                        <h2>Palavras Chave</h2>
                        <p class="key-projeto">Lorem ipsum dolor sit amet consectetur adipisicing elit, Lorem ipsum dolor sit amet consectetur adipisicing elit, Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    </div>

                    <div class="content-carrossel-project">
                        <h2>Confira nossas atividades</h2>
                        <div class="carrossel-project">                        
                            <div class="item project">
                                <div class="img-project">
                                    <img src="app/assets/images/video-youtube.png"/>
                                </div>            
                            </div>
                            <div class="item project">
                                <div class="img-project">
                                    <img src="app/assets/images/video-vimeo.png"/>
                                </div>
                            </div>
                            <div class="item project">
                                <div class="img-project">
                                    <img src="app/assets/images/video-youtube-02.png"/>
                                </div>
                            </div>
                            <div class="item project">
                                <div class="img-project">
                                    <img src="app/assets/images/video-youtube-02.png"/>
                                </div>
                            </div>                                   
                            <div class="item project">
                                <div class="img-project">
                                    <img src="app/assets/images/video-vimeo.png"/>
                                </div>
                            </div>                        
                            <div class="item project">
                                <div class="img-project">
                                    <img src="app/assets/images/video-youtube-02.png"/>
                                </div>
                            </div>    
                        </div>
                        <div class="nav-carrossel-project">
                            <a id="prev-project" class="icon arrow-left">
                                <i class="fas fa-caret-left"></i>
                            </a>
                            <a id="next-project" class="icon arrow-right">
                                <i class="fas fa-caret-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- sidebar -->
            <div class="sidebar">
                <div class="list-category">
                    <h2>Categorias Projetos</h2>
                    <div class="sidenav">
                        <button class="dropdown-btn">Ecossistema de Impacto 
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container">
                            <a href="#">Investimento</a>
                            <a href="#">Setor Público</a>
                            <a href="#">Dinamizadores</a>
                            <a href="#">Comunidades</a>
                            <a href="#">Grandes Empresas</a>
                        </div>
                        <button class="dropdown-btn">Negócio de Impacto 
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container">
                            <a href="#">Ideação</a>
                            <a href="#">Operação</a>
                            <a href="#">Tração</a>
                        </div>
                    </div>
                </div>

                
                <div class="list-contents">
                    <h2>Conteúdos</h2>
                    <ul>
                        <li><a href="trend-news.php">Notícias</a></li>
                        <li><a href="medias.php">Lives e Vídeos</a></li>
                        <li><a href="podcast.php">Podcast</a></li>
                    </ul>
                </div>
                
                <div class="img-ads">
                    <img class="ads-img" src="app/assets/images/ads-post.png" />
                </div>                    
                <div class="img-ads">
                    <img class="ads-img" src="app/assets/images/ads-post.png" />
                </div>
            </div>
        </div>
    </section>
</main>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

<?php
// footer
include 'app/views/footer.php';
?>