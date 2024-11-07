<?php

function load() {
    $page = filter_input(INPUT_GET,'page', FILTER_SANITIZE_SPECIAL_CHARS);

    $page=(!$page) ? 'pages/home.php' : "pages/{$page}.php";

    if(!file_exists($page)){

        throw new \Exception("Essa página não existe");
    }

    return $page;
}

//Function load => Todas as instruções dentro das {} serão executas sempre que a fun~]ao for chamada.
//filter_inout() pega o valor do parametro page da URL
//