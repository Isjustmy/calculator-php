<?php

// kalculator.php

echo "Selamat datang di Kalkulator Sederhana\n";

// Fungsi untuk mengambil input ekspresi matematika dari pengguna
function getInputExpression()
{
    echo "Masukkan ekspresi matematika: ";
    return readline();
}

// Mengambil ekspresi matematika dari pengguna
$expression = getInputExpression();

// Validasi ekspresi matematika
$pattern = '#^[0-9+\-*/. ]+$#';
if (!preg_match($pattern, $expression)) {
    echo "Ekspresi matematika tidak valid. Harap masukkan hanya angka dan operator (+, -, *, /) yang benar.\n";
    exit;
}

// Menghitung ekspresi matematika menggunakan eval()
$result = eval("return $expression;");

// Menampilkan hasil perhitungan
echo "Hasil perhitungan: " . $result . "\n";
