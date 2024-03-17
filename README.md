# Template Method Pattern - PHP

## Problem

You need to define a template for an algorithm and have subclasses define some of the steps.

## Solution

Create an abstract class that defines the template method and the abstract methods that the template method calls.

## How to Use

Create a new instance of the `ConcreteClass` and call the `templateMethod` method.

```php
$object = new ConcreteClass();
$object->templateMethod();
```

## Real World Example

A real world example of the Template Method pattern is the `FoodRecipe` class. Show the code in the `FoodRecipe.php` file.
