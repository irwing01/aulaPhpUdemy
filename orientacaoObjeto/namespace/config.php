<?php
spl_autoload_register(function($nomeClasse){
    $dirClassses = 'class';
    $fileName = $dirClassses . DIRECTORY_SEPARATOR . $nomeClasse . '.php';

    if(file_exists($fileName)){
        require_once ($fileName);
    }
});
