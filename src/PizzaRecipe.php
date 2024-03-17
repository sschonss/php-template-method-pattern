<?php

namespace Schons\TemplateMethod;

use Schons\TemplateMethod\FoodRecipe;

class PizzaRecipe extends FoodRecipe
{

    protected $ingredients = [
        'dough',
        'tomato sauce',
        'mozzarella cheese',
        'pepperoni'
    ];

    public function prepareIngredients()
    {
        echo "Prepare pizza ingredients\n";
        foreach ($this->ingredients as $ingredient) {
            echo " - " . $ingredient . "\n";
        }
    }

    public function cook()
    {
        echo "Cook pizza\n";
    }

    public function serve()
    {
        echo "Serve pizza\n";
    }
}