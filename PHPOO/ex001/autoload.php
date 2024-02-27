<?php 

spl_autoload_register(
    function(string $nomeCompletoDaClasse)
    {
        $caminhoCompleto = str_replace('Caique\\Comercial', 'src', $nomeCompletoDaClasse);
        $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoCompleto);
        $caminhoArquivo .= '.php';
        echo $caminhoArquivo;

        if(file_exists($caminhoArquivo)){
            
            require_once $caminhoArquivo;
        }
    }
);