<?php
class Kotak{
    public $panjang;
    public $lebar;
    public $tinggi;
    function tampil()
    {
        echo "hello oop";
    }
    function volume($p,$l,$t)
    {
        $this->panjang=$p;
        $this->lebar=$l;
        $this->tinggi=$t;
        return $this->panjang*$this->lebar*$this->tinggi;
    }
}

$x = new Kotak();
$x->panjang=10;
echo $x->panjang;
echo $x->volume(20,30,40);
?>