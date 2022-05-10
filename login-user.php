<?php
// header
include 'app/views/header.php';
?>
<!--  content -->
<main>

    <section class="regForm login">
        <div class="page-header">
            <div class="container">
                <h1>Cadastro</h1>
            </div>
        </div>

        <div class="container">
            <form id="form_Users">
                <fieldset class="step">
                    <div class="form-group">
                        <label for="email">Email <span>Por favor, digite seu melhor e-mail</span></label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Senha <span>Digite uma senha com no mínimo 6 caracteres</span></label>
                        <input type="password" name="password" id="password">
                    </div>
                    <div class="flex-form">
                        <div class="read-more">
                            <a href="#" class="btn bg-gray">Registrar</a>
                        </div>                            
                        <div class="read-more">
                            <a href="#" class="btn bg-green">Login</a>
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