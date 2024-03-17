<?php

namespace Schons\TemplateMethod;

use Schons\TemplateMethod\FoodRecipe;

class PastaRecipe extends FoodRecipe
{

    protected $ingredients = [
        'pasta',
        'tomato sauce',
        'parmesan cheese'
    ];

    public function prepareIngredients()
    {
        echo "Prepare pasta ingredients\n";
        foreach ($this->ingredients as $ingredient) {
            echo " - " . $ingredient . "\n";
        }
    }

    public function cook()
    {
        echo "Cook pasta\n";
    }

    public function serve()
    {
        echo "Serve pasta\n";
    }
}