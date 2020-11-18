<?php

class Persegipanjang {

    static $panjang;
    static $lebar;

    public function __construct($p,$l)
    {
        self::$panjang=$p;
        self::$lebar=$l;
        if($p < 0 || $l <0){
            throw new InputDataMinus("Tampilan harus kurang dari 0.".PHP_EOL);
        }
        return true;
    } 
    public static function count ()
    {
        echo self::$panjang * self::$lebar;
    }  

}

echo "Masukan Nilai Panjang : ".PHP_EOL;
$nilaipanjang = (int) fgets(STDIN);
echo "Masukan Nilai Lebar  : ".PHP_EOL;
$nilailebar = (int) fgets(STDIN);

try {
    new Persegipanjang($nilaipanjang, $nilailebar);
    echo "luas Persegipanjang : ", Persegipanjang::count()."cm".PHP_EOL;
} catch (InputDataMinus $minus) {
    echo $minus->getmessage();
}
// class InputDataMinus extends Exception{}


