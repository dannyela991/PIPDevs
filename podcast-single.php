<?php
// header
include 'app/views/header.php';
?>
<!-- content -->
<main>
    <section class="post-single">
        <div class="container">
            <div class="flex-container">
                <div class="content">                    
                    <div class="nav-posts">
                        <ul class="inline">
                            <li><a href="posts.php"><i class="fas fa-home"></i></a></li>
                            <li><a href="podcast.php">Podcast</a></li>
                            <li><a href="#">Categoria</a></li>
                            <li><a href="podcast-single.php" class="active">Titulo Post</a></li>
                        </ul>
                    </div>
                    <div class="page-header">
                        <h1>Título do Podcast Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                        <div class="info-post">
                            <ul class="list-inline">
                                <li><span>Autor: </span><a href="">GVA</a></li>
                                <li><span><i class="far fa-calendar-alt"></i></span> 10/06/2020</li>
                            </ul>
                        </div>
                    </div>
                    <div class="content-post podcast">
                        <audio controls>
                            <source src="app/assets/audio/kiss-i-was-made-for-lovin-you.mp3" type="audio/mpeg">
                            Seu navegador não suporta o elemento de áudio.
                        </audio>

                        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/4rnpecHz8UXkAj7g9VHJk7?utm_source=generator" width="100%" height="232" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>

                        <iframe title="Libsyn Player" style="border: none" src="//html5-player.libsyn.com/embed/episode/id/19606226/height/90/theme/custom/thumbnail/yes/direction/forward/render-playlist/no/custom-color/005b5a/" height="90" width="100%" scrolling="no"  allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>

                        <p>Antonella Braillard convida a equipe de V.O.S (DMC) para falar sobre os serviços que eles oferecem para os passageiros mais exigentes. Venha descobrir uma variedade de atividades que pode-se incluir ao considerar a Escandinávia como destino.</p>
                        <p>A GVA E-Learning tem como propósito oferecer conteúdo instigante e criativo para inspirar e aprimorar a compreensão sobre os destinos que representamos. Inscreva-se em nosso canal para ficar por dentro de nossas webinars semanais. </p>

                        <p>Já conhece nosso portal? <a href="https://gvaelearning.com/" target="_blank" title="">https://gvaelearning.com</a></p>

                        <h1>Elementos da página (H1)</h1>
                        <h2>Título H2</h2>
                        <h3>Título H3</h3>
                        <h4>Título H4</h4>
                        <h5>Título H5</h5>
                        <h6>Título H6</h6>

                        <h2>Estilo de Lista</h2>
                        <ul>
                            <li>Item lista</li>
                            <li>Item lista</li>
                            <ul>
                                <li>Item lista</li>
                                <li>Item lista</li>                                
                            </ul>
                            <li>Item lista</li>
                            <li>Item lista</li>
                        </ul>

                        <h2>Estilo de Hiperlink</h2>
                        <a href="https://www.youtube.com/watch?v=piLTi1H8nkc" target="_blank" title="">https://www.youtube.com/watch?v=piLTi1H8nkc</a>
                    </div>
                    <div class="content-author">
                        <div class="img-author">
                            <img src="app/assets/images/gva.png" alt="" />
                        </div>
                        <div class="info-author">
                            <h3>Global Vision Access</h3>
                            <p>A Global Vision Access é uma empresa de Comunicação e Marketing que fornece soluções completas em consultoria estratégica com foco em novos negócios e inovação, representação comercial, serviços de comunicação, relações públicas e marketing digital para marcas e organizações nacionais e internacionais. Por isso, nos orgulhamos por ter em nosso portfólio e histórico de clientes uma variedade riquíssima de parceiros de excelência.</p>
                            <div class="read-more">
                                <a href="#">Ver todas as publicações</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidebar -->
                <div class="sidebar">
                    <div class="latest-post">
                        <h2>Últimas Publicações</h2>
                        <div class="card-post">
                            <div class="card-img">
                                <div class="img-post"></div>
                            </div>
                            <div class="title">
                                <a href="" title=""><span class="category">Categoria</span></a>
                                <a href="" title=""><h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3></a>
                            </div>
                        </div>
                        <div class="card-post">
                            <div class="card-img">
                                <div class="img-post"></div>
                            </div>
                            <div class="title">
                                <a href="" title=""><span class="category">Categoria</span></a>
                                <a href="" title=""><h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3></a>
                            </div>
                        </div>
                        <div class="card-post">
                            <div class="card-img">
                                <div class="img-post"></div>
                            </div>
                            <div class="title">
                                <a href="" title=""><span class="category">Categoria</span></a>
                                <a href="" title=""><h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3></a>
                            </div>
                        </div>
                        <div class="card-post">
                            <div class="card-img">
                                <div class="img-post"></div>
                            </div>
                            <div class="title">
                                <a href="" title=""><span class="category">Categoria</span></a>
                                <a href="" title=""><h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3></a>
                            </div>
                        </div>
                    </div>
                    <div class="list-category">
                        <h2>Categorias</h2>
                        <ul>
                            <li><a href="">Categoria</a></li>
                            <li><a href="">Categoria</a></li>
                            <li><a href="">Categoria</a></li>
                            <li><a href="">Categoria</a></li>
                            <li><a href="">Categoria</a></li>
                            <li><a href="">Categoria</a></li>
                            <li><a href="">Categoria</a></li>
                        </ul>
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
        </div>
    </section>
</main>

<?php
// footer
include 'app/views/footer.php';
?>