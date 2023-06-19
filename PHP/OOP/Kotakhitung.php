<?php
class Kotakhitung{
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
    function __construct($p,$l,$t)
    {
        $this->panjang=$p;
        $this->lebar=$l;
        $this->tinggi=$t;
    }
    function lp()
    {
        return (2*(($this->panjang*$this->lebar)+($this->panjang*$this->tinggi)+
($this->lebar*$this->tinggi)));
    }

}

?>