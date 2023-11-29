<?php

// membuat variable sisi untuk menampung nilai
$sisi = 10;

// membuat variable luas yang menyimpan hasil dari artimatika
$luas = $sisi * $sisi;

echo "luas dari nilai sisi $sisi * $sisi = $luas <br> <br>";

// Membuat function luas
function luas($sisi)
{
    return $sisi * $sisi;
}

$hasil = luas(20);
echo "hasil dari $sisi menggunakan fungsi, memiliki luas $hasil <br><br>";

//menggunakan class
class persegi
{
    // Membuat function luas
    function luas($sisi)
    {
        return $sisi * $sisi;
    }
}

$persegi2 = new persegi();

echo "hasil luas persegi menggunakan class adalah ";
echo $persegi2->luas($sisi);

echo "<br><br>";

// menggunakan if else dalam function
if ($sisi > 0) {
    $luas = $sisi * $sisi;
    echo "menggunakan if else menghasilkan luas = $luas <br><br>";
} else {
    echo "sisi harus positif <br>";
}

function cabang($sisi)
{

    if ($sisi > 0) {
        $luas = $sisi * $sisi;
        echo "mennggunakan if else didalam fungsi menghasilkan luas = $luas <br><br>";
        return $luas;
    } else {
        echo "sisi harus positif <br>";
    }
}

cabang(20);


// IF,ELSE CLASS PERHITUNGAN LUAS PERSEGI
class logicPersegi
{
    function cabang($sisi)
    {

        if ($sisi > 0) {
            $luas = $sisi * $sisi;
            echo "menggunakan if else di dalam fungsi dan class menghasilkan luas = $luas <br>";
            return $luas;
        } else {
            echo "sisi harus lebih dari 0 <br>";
        }
    }
}

$luas = new logicPersegi();

$luas->cabang(50);
