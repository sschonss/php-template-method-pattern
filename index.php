<?php

require __DIR__ . '/vendor/autoload.php';

use Schons\TemplateMethod\PizzaRecipe;
use Schons\TemplateMethod\PastaRecipe;
use Schons\TemplateMethod\SushiRecipe;

$pizza = new PizzaRecipe();
echo "Pizza recipe\n";
$pizza->prepareRecipe();

echo "\n";

$pasta = new PastaRecipe();
echo "Pasta recipe\n";
$pasta->prepareRecipe();

echo "\n";

$sushi = new SushiRecipe();
echo "Sushi recipe\n";
$sushi->prepareRecipe();
