<?php

/* Amisha Al azis
193040122
Pertemuan 2 Praktikum web - 17 September 2021
https://github.com/amishaalazis/prakweb2021_oophp_193040122
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



$produk1 = new Produk("Naruto","Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000);
$produk3 = new Produk ("Dragon Ball");



echo "Komik: " . $produk2->getLabel();
echo "<br>";
echo "Game: " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);