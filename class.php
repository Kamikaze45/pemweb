<?php
class Produk {
    public $nama;
    public $harga;
    public $stok;

    public function __construct($nama, $harga, $stok) {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    public function tampilkanInfo() {
        echo "Nama Produk: " . $this->nama . "<br>";
        echo "Harga: Rp" . $this->harga . "<br>";
        echo "Stok: " . $this->stok . "<br>";
    }

    public function tambahStok($jumlah) {
        $this->stok += $jumlah;
        echo "Stok berhasil ditambahkan. Stok sekarang: " . $this->stok . "<br>";
    }

}
$produk1 = new Produk("Laptop", 5000000, 10);
$produk1->tampilkanInfo();
echo "<br>";

?>
