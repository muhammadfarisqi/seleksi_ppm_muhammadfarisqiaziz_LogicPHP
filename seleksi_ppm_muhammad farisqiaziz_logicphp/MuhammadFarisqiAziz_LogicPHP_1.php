<html>
  <head>
    <title>MuhammadFarisqiAziz_SoalLogicPHP_1</title>
  </head>
  <body>
    <?php
// Diketahui
echo "<p>diketahui</p>";
echo "<p> Uang Rian 5 lembar 5000 rupiah(5x5000)= RP 25000</p>";
echo "<p> Beli 1 lusin pulpen harga 1750 rupiah (12x1750)= RP 21000</p>";  
$uangRian = 5*5000;
$beliselusinballpoint = 1750*12;
//Ditanya uang kembalian
echo "<p>ditanya berapa uang kembalian rian?</p>";
//jawaban
echo "<p>Jawaban</p>";
echo "<p>Uang Rian- selusin= RP 25000- RP21000= RP 4000</p>";
echo $uangRian - $beliselusinballpoint;
?>  
  </body>
</html>