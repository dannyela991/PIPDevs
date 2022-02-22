<?php
/* Site: Prêmio Impactos Positivos
Autor: Daniela - Font End GVA */

$page = 'home';

if(isset($_GET['i'])){
    $page = addslashes($_GET['i']);
}

// header
include 'app/views/header.php';

// content
switch($page){
    default:
    include 'app/views/home.php';
    break;

}

// footer
include 'app/views/footer.php';