<?php 
$buah = array(
		array("NAMA" => "JERUK", "HARGA" => 5000, "RASA" => "ASAM"), 
		array("NAMA" => "MANGGA", "HARGA" => 20000, "RASA" => "MANIS"), 
		array("NAMA" => "APEL", "HARGA" => 5000, "RASA" => "MANIS"),
		array("NAMA" => "DURIAN", "HARGA" => 50000, "RASA" => "MANIS"),
		array("NAMA" => "DUKU", "HARGA" => 10000, "RASA" => "ASAM"),
		array("NAMA" => "NANAS", "HARGA" => 5000, "RASA" => "ASAM"),
);

// Jawaban nomor 5.a
$buah[6] = array("NAMA" => "PISANG", "HARGA" => 5000, "RASA" => "MANIS");

$nama = array_column($buah, 'NAMA');
array_multisort($nama, SORT_DESC, $buah);


echo "<pre>";
print_r($buah);
echo "</pre>";

 ?>

 <hr>

 <?php
$buah = array(
        array("NAMA" => "JERUK", "HARGA" => 5000, "RASA" => "ASAM"), 
        array("NAMA" => "MANGGA", "HARGA" => 20000, "RASA" => "MANIS"), 
        array("NAMA" => "APEL", "HARGA" => 5000, "RASA" => "MANIS"),
        array("NAMA" => "DURIAN", "HARGA" => 50000, "RASA" => "MANIS"),
        array("NAMA" => "DUKU", "HARGA" => 10000, "RASA" => "ASAM"),
        array("NAMA" => "NANAS", "HARGA" => 5000, "RASA" => "ASAM"),
);

// Jawaban nomor 5.b
function subArraysToString($ar, $sep = ', ') {
    $str = '';
    foreach ($ar as $val) {
        $str .= implode($sep, $val);
        $str .= $sep;
    }
    $str = rtrim($str, $sep);
    return $str;
}

$result = subArraysToString($buah);
echo $result;
echo "<br>";
echo "<br>";
$pattern = '/\b([^,]*K[^,]*)\b/';
preg_match_all($pattern, $result, $matches, PREG_SET_ORDER);
foreach ($matches as $val) {
      echo "Matched: " . $val[1]. "\n";
};

?>

<!-- jawaban nomor 5.c -->
<hr>

<?php 

$buah = array(
        array("NAMA" => "JERUK", "HARGA" => 5000, "RASA" => "ASAM"), 
        array("NAMA" => "MANGGA", "HARGA" => 20000, "RASA" => "MANIS"), 
        array("NAMA" => "APEL", "HARGA" => 5000, "RASA" => "MANIS"),
        array("NAMA" => "DURIAN", "HARGA" => 50000, "RASA" => "MANIS"),
        array("NAMA" => "DUKU", "HARGA" => 10000, "RASA" => "ASAM"),
        array("NAMA" => "NANAS", "HARGA" => 5000, "RASA" => "ASAM"),
);



 ?>