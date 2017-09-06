<?php
require 'vendor/autoload.php';

use App\Produto;
use App\Correios;

$itens = [];

$prod1 = new Produto(
	"0001",
	"Caneca de Ceramica Verde",
	25.50,
	10,
	10,
	8.5,
	12,
	0.09
);

$itens[] = $prod1;

$correios = new Correios();
$correios->calcularFrete($itens, "07400605");