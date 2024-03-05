<?php 

require 'vendor/autoload.php';
require 'src/Buscador.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

use Caique\BuscadorDeCursos\Buscador;

$client = new Client (['base_uri' => 'https://www.alura.com.br/', 'verify' => false]);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php', 'span.card-curso__nome');

foreach($cursos as $curso){
    echo "$curso <br>";
}