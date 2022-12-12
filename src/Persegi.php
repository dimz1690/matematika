<?php

class Persegi
{
    public function hitungLuas(int $sisi)
    {
        return pow($sisi, 2);
    }

    public function hitungKeliling(int $sisi)
    {
        return $sisi * 4;
    }

    public function hitungDiagonal(int $sisi)
    {
        return sqrt(pow($sisi, 2) + pow($sisi, 2));
    }

    public function hitungJariJariLingkaran(int $diameter = null, int $keliling = null, int $luas = null, int $sisi = null)
    {
        if ($diameter != null) {
            return $diameter / 2;
        } elseif ($keliling != null) {
            return $keliling / (2 * 3.14);
        } elseif ($luas != null) {
            return sqrt($luas / 3.14);
        } elseif ($luas != null) {
            return sqrt($this->hitungLuas($sisi) / 3.14);
        }

        return null;
    }
}
