<!-- Soal A -->


<hr>
<!-- Soal B -->
<h5>Ubah format tanggal menggunakan format date php</h5>
<?php
$date=date_create("2020-05-01");
echo date_format($date,"m-Y-d");

?>

<!-- Soal C --> 
<h5>Menampilkan 6 bulan kedepan dari tanggal di atas</h5>
<?php 
$date=date_create("2020-05-01");
echo date("m-Y-d", strtotime("+6 month"));

 ?>
 
<hr>
<!-- Soal D -->
<h5>berapa umur jika dihitung dari tanggal di atas</h5>
<h3>22 tahun</h3>