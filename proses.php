<?php
if(isset($_POST['operasi'])) {
  $angka1 = $_POST['angka1'];
  $angka2 = $_POST['angka2'];
  $operator = $_POST['operator'];
}

if($operator == +){
  $hasil = $angka1 + $angka2;
  echo "Hasil penjumlahan dari $angka1 + $angka2 = $hasil";
} elseif($operator == -){
  $hasil = $angka1 - $angka2;
  echo "Hasil penjumlahan dari $angka1 - $angka2 = $hasil";
} elseif($operator == *){
  $hasil = $angka1 * $angka2;
  echo "Hasil penjumlahan dari $angka1 * $angka2 = $hasil";
} elseif($operator == /){
  $hasil = $angka1 / $angka2;
  echo "Hasil penjumlahan dari $angka1 / $angka2 = $hasil";
} else{
  echo "Operator aritmatika tidak dikenali";
}
?>
