<?php
$data = [['jenis' => "Olahraga", 'cabang' => [
    ['lomba' => "Sepak Bola", 'artikel' => [
        ['judul'=> "Sepak Bola Nasional"],
        ['judul' => "Sepak Bola Internasional"]
    ]],
    ['lomba' => "bulu tangkis", 'artikel' => [
        ['judul'=> "Bulu Tangkis Nasional"],
        ['judul' => "Bulu Tangkis Internasional"]
    ]],
    ['lomba' => "atletik", 'artikel' => [
        ['judul' => "Atletik Nasional"],
        ['judul' => "Atletik Internasional"]
    ]],
]],
['jenis' => "Ekonomi", 'cabang' => [
    ['lomba' => "Bank", 'artikel' => [
        ['judul'=> "Bank Mandiri"],
        ['judul' => "Bank BRI"]
    ]],
    ['lomba' => "Saham", 'artikel' => [
        ['judul'=> "Saham Indomaret"],
        ['judul' => "Saham Pertamina"]
    ]],
    
]],
['jenis' => "Politik", 'cabang' => [
    ['lomba' => "Bank", 'artikel' => [
        ['judul'=> "Bank Mandiri"],
        ['judul' => "Bank BRI"]
    ]],
]
]
    ];
 
    echo "Artikel : Detik.com";
    echo "<br>";
    echo "Jenis Berita : ";

    foreach($data as $data1){
        echo "<ul>";
        echo "<li>" .$data1['jenis'] ."</li>";

        foreach ($data1['cabang'] as $data2){
            echo "<ul>";
            echo "<li>" .$data2['lomba'] ."</li>";

            foreach($data2['artikel'] as $data3){
                echo "<ul>";
                echo "<li>" .$data3['judul'] ."</li>";
                echo "</ul>";
            }
            echo "</ul>";
        }
        echo "</ul>";
    }
?>