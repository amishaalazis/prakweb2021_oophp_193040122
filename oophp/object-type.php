<?php

/* Amisha Al azis
193040122
Pertemuan 2 Praktikum web - 17 September 2021
*/ 

class Produk {
    public $judul, 
            $penulis,
            $penerbit,
            $harga = 0;

    public function __construct( $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }


    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
    
}

class CetakInfoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}



$produk1 = new Produk("Naruto","Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000);




echo "Komik: " . $produk2->getLabel();
echo "<br>";
echo "Game: " . $produk2->getLabel();
echo "<br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);