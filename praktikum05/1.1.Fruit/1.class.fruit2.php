<?php
class Fruit{
    public $name;
    public $color;
    public $weight;

    // public function default
    public function set_name($n){
        $this->name = $n;
    }

    // a protected function
    protected function set_color($n){
        $this->color = $n;
    }

    // private function
    private function set_weight($n){
        $this->weight = $n;
    }
}

$manggo = new Fruit();   
$manggo->set_name('Mangga'); //OKE
$manggo->set_color('Kuning'); //ERROR
$manggo->set_weight('300'); //ERROR