<!-- Soal A Asc-->
<h5>Ascending</h5>

<?php
$numbers = array(20, 10, 100, 30, 15, 5);
sort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";
}
?>

<!-- Soal A Desc -->
<h5>Descending</h5>

<?php
$numbers = array(20, 10, 100, 30, 15, 5);
rsort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";
}
?>

<hr>
<!-- Soal B -->
<h5>Menambahkan angka 180</h5>

<?php 
$numbers = array(20, 10, 100, 30, 15, 5);

$numbers[] = 180;

echo "<pre>";
print_r($numbers);
echo "</pre>";


 ?>

<hr>
<!-- Soal C -->
<h5>Menghapus angka 30</h5>
<?php 
$numbers = array(20, 10, 100, 30, 15, 5);

unset($numbers[3]);
echo "<pre>";
print_r($numbers);
echo "</pre>";

 ?>