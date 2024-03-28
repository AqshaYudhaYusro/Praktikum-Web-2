<?php
    class NilaiMahasiswa {
        var $nim, $mk, $nilai;

        function __construct($nim, $mk, $nilai) {
            $this->nim = $nim;
            $this->mk = $mk;
            $this->nilai = $nilai;
        }

        function grade_nilai() {
            if ($this->nilai >= 85) {
                return "A";
            } elseif ($this->nilai >= 70) {
                return "B";
            } elseif ($this->nilai >= 56) {
                return "C";
            } elseif ($this->nilai >= 36) {
                return "D";
            }  else {
                return "E";
            }
        }

        function hasil_nilai(){
            if ($this->grade_nilai() >= "A") {
                return "LULUS";
            } elseif ($this->grade_nilai() >= "B") {
                return "LULUS";
            } elseif ($this->grade_nilai() >= "C") {
                return "LULUS";
            } elseif ($this->grade_nilai() >= "D") {
                return "TIDAK LULUS";
            } else {
                return "TIDAK LULUS";
            }
        }
    }
?>