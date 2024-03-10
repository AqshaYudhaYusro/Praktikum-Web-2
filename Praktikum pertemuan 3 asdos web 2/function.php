<?php
function tentukan_nilai($nilai) {
    if($nilai >= 85 && $nilai <= 100){
        return "sangat baik";
    } elseif($nilai >= 70 && $nilai < 85){
        return "baik";
    } elseif($nilai >= 60 && $nilai < 70){
        return "cukup";
    }
    return "kurang";
}

echo tentukan_nilai(98)."<br>"; 
echo tentukan_nilai(76)."<br>";
echo tentukan_nilai(67)."<br>";
echo tentukan_nilai(43)."<br>";
?>