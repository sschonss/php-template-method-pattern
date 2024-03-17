<?php

namespace Schons\TemplateMethod;

use Schons\TemplateMethod\FoodRecipe;

class SushiRecipe extends FoodRecipe
{

    protected $ingredients = [
        'rice',
        'nori',
        'fish',
        'vegetables'
    ];

    public function prepareIngredients()
    {
        echo "Prepare sushi ingredients\n";
        foreach ($this->ingredients as $ingredient) {
            echo " - " . $ingredient . "\n";
        }
    }

    public function cook()
    {
        echo "Cook sushi\n";
    }

    public function serve()
    {
        echo "Serve sushi\n";
    }
}