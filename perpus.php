<?php
class Perpustakaan
{
    public $data_buku = [
        [   'Nama_buku' => "Belajar PHP",
            'ISBN'      => "1802,3A"

    ],
        [   'Nama_buku' => "Laskar Pelangi",
            'ISBN'      => "1703,6B"
    ],
        [   'Nama_buku' => "SAINS",
            'ISBN'      => "2105,8B"

        ]
];
public function cetakBuku()
{
    foreach ($this->myBook as $key => $value) {

        print_r ("$key. ".$value['Nama_buku']. "\n");
    }
}
    public function pinjamBuku($id) {
        unset($this->data_buku[$id],$this->data_buku[$id]);
        return $this->data_buku=array_values($this->data_buku) ;
    }
}
    $Perpustakaan = new Perpustakaan();
    $sisa = ($Perpustakaan->pinjamBuku(2));
    print_r($sisa);
