<?php
// header
include 'app/views/header.php';
?>
<!--  content -->
<main>
    <section class="pages workshop">
        <div class="page-header">
            <div class="container">
                <h1>Workshop</h1>
                <p>Workshop Ao Vivo exclusivo para os Top10 projetos mais votados!</p>
            </div>
        </div>

        <div class="container">
            <div class="text-evento">
                <p>O Workshop Online e Exclusivo com o nosso membro conselheiro do <strong>Board do Prêmio 2022</strong>, <strong>Fernando Seabra</strong>, com o tema <strong>"A Receita do Pitch Ideal"</strong> acontecerá aqui, às <strong>19:30</strong> no dia <strong>05/10/2022</strong>. </p>
                <p>Teremos um chat para interação entre os espectadores e para envio de dúvidas. Todo conteúdo dado durante a apresentação será disponibilizado para download após o evento.</p>
            </div>
            <div class="flex-container">
                <div class="video">
                    <div class="container-iframe"> 
                        <iframe class="responsive-iframe" src="https://vimeo.com/event/2472241/embed" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe>
                    </div>
                </div>
                <div class="chat">
                    <iframe src="https://vimeo.com/event/2472241/chat/" width="100%" height="100%" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </section>
    
</main>

<?php
// footer
include 'app/views/footer.php';
?>