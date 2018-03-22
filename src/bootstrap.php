<?php
namespace PPI2;
require __DIR__.'/../vendor/autoload.php';
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


include 'rotas.php';
$response = Response::create();
$contexto = new \Symfony\Component\Routing\RequestContext;
$conteudo = '<h1>Vai corinthians</h1>';
$response->setContent($conteudo);
$response->send();
