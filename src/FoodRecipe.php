<?php

namespace Schons\TemplateMethod;

abstract class FoodRecipe
{
    protected $ingredients = [];
    public final function prepareRecipe() {
        $this->prepareIngredients();
        $this->cook();
        $this->serve();
    }

    public abstract function prepareIngredients();
    public abstract function cook();
    public abstract function serve();
}