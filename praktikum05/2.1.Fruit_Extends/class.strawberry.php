<?php
require_once 'class.fruit.php';

// Strawberry is inherited from fruit
class Strawberry extends Fruit
{
    public function message()
    {
        echo "Am I a Fruit or a Berry ?";
    }
}