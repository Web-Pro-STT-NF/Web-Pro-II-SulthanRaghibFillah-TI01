<?php
class Fruit{
    // public dapat diakses dari dalam class maupun luar class (+)
    public $name;
    // protected hanya dapat diakses dari dalam class dan class turunannya (#)
    protected $color;
    // private  hanya dapat diakses dari dalam class saja (-) 
    private $weight;
}

$manggo = new Fruit();
$manggo->name = 'Mangga'; //OK
$manggo->color = 'Kuning'; //ERROR
$manggo->weight = '300'; //ERROR