<?php
class Pengaduan 
{
    public function __construct($lapor)
    {

        static $Jenispengaduan;
        static $Alamat;
        static $Jumlahpengaduan;

        print_r($lapor);
    }

    public static function pelaporanMasyarakat()
        
        {
            echo "Masukan Jenis Pengaduan : ".PHP_EOL;
            $Jenispengaduan = (int) fgets(STDIN);
            echo "Masukan Alamat Pengaduan  : ".PHP_EOL;
            $jumlahpengaduan = (int) fgets(STDIN);
            echo "Masukan Jumlah Pengaduan : ".PHP_EOL;
            $Alamat = (int) fgets(STDIN);
        }
        
    }

Pengaduan::pelaporanMasyarakat();