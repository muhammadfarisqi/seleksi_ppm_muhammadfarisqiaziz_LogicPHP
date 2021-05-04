<html>
  <head>
    <title>MuhammadFarisqiAziz_SoalLogicPHP_3</title>
  </head>
  <body>
    <?php
  // CARA ARITMATIKA
//DIKETAHUI
echo "<p> CARA ARITMATIKA</p>";
echo "<p> Diketahui</p>";
echo "<p> pengeluaran toko1 = RP 10000</p>";
echo "<p> pengeluaran toko68 = RP 30100</p>";
$pengeluaranToko1 = 10000;  
$pengeluaranToko68 = 30100;
//DITANYA PENGELUARAN TOKO KE 81
echo "<p> Ditanya pengeluaran toko ke 68?</p>";
//DIJAWAB
echo "<p> Dijawab</p>";
echo "<p> penambahan tiaptoko=(RP30100-RP10000)/67=RP300</p>";
$penambahantiaptoko=($pengeluaranToko68-$pengeluaranToko1)/67;//300
//HASIL 34000
echo "<p>Hasil</p>";
echo "<p> pengeluaran toko81 = (RP300*80)+RP10000=RP34000</p>";
echo ($penambahantiaptoko*80) + $pengeluaranToko1;
?>
  <?php
  //CARA PERULANGAN 
  echo "<p>CARA PERULANGAN</p>";
  echo "<p>catatan pengeluaran toko ke0= toko ke 1 dan 80= 81</p>";

for ($i=0; $i<=80; $i++){
  echo "<p>ini pengeluaran toko ke $i</p>";
  echo ($i*$penambahantiaptoko)+$pengeluaranToko1;
  // catatan pengeluaran toko ke0= toko ke 1 dan 80= 81
}
?>
  </body>
</html>