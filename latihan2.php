<?php

class Persegipanjang {
    static $panjang;
    static $lebar;

    public function __construct($p,$l)
    {
        self::$panjang=$p;
        self::$lebar=$l;
    } 
    public static function count ()
    {
        echo self::$panjang * self::$lebar;
    }  

}

    new Persegipanjang (4,2);
    Persegipanjang::count();
