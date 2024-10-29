<?php
class Produk {
    public $nama;
    public $harga;
    public $stok;

    // Constructor untuk menginisialisasi nilai properti saat objek dibuat
    public function __construct($nama, $harga, $stok) {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    // Method untuk menampilkan informasi produk
    public function tampilkanInfo() {
        echo "Nama Produk: " . $this->nama . "<br>";
        echo "Harga: Rp" . $this->harga . "<br>";
        echo "Stok: " . $this->stok . "<br>";
    }

    // Method untuk menambahkan stok produk
    public function tambahStok($jumlah) {
        $this->stok += $jumlah;
        echo "Stok berhasil ditambahkan. Stok sekarang: " . $this->stok . "<br>";
    }

}

// Membuat objek Produk
$produk1 = new Produk("Laptop", 5000000, 10);

// Menampilkan informasi produk
$produk1->tampilkanInfo();
echo "<br>";

?>
