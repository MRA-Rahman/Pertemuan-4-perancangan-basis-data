<?php

use Illuminate\Support\Facades\Route;

Route::get('/latihan-php', function () {
    $nama = 'Muhammad Rahman Afrialdi'; // Ganti dengan nama Anda
    // Pengujian 1: Data yang menghasilkan rata-rata >= 75 (Lulus)
    $nilai = [60, 50, 70, 55, 68]; 

    $hitungRataRata = function (array $data): float {
        $total = 0;
        foreach ($data as $angka) {
            $total += $angka;
        }
        return $total / count($data);
    };

    $ratarata = $hitungRataRata($nilai);

    if ($ratarata >= 75) {
        $status = 'Lulus';
    } else {
        $status = 'Perlu Perbaikan';
    }

    return view('latihan-php', compact(
        'nama', 'nilai', 'ratarata', 'status'
    ));
});
