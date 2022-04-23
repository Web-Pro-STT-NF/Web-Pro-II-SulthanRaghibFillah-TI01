<?php

class Fruit
{
    public $name;
    public $color;

    public function __construct($nama, $warna)
    {
        $this->name = $nama;
        $this->color = $warna;
    }

    public function intro()
    {
        echo "The Fruit is ($this->name) and the Color is ($this->color).";
    }
}





