<html>
  <head>
    <title>MuhammadFarisqiAziz_SoalLogicPHP_2</title>
  </head>
  <body>
    <?php //Diketahui
    echo "<p>diketahui</p>";
echo "<p> Uang Setyo 3 lembar Rp10000, 4 lembar Rp5000, 5 lembar Rp20000. (3*10000)+(4*5000)+(5*20000)= RP 150000</p>";
echo "<p> harga mainan RP 55000</p>";
$uangSetyo = (3*10000)+(4*5000)+(5*20000);  
$hargaMainan = 55000;
//Ditanya Jumlah uang Setyo setelah beli mainan
echo "<p> Ditanya jumlah uang setyo setelah beli mainan?</p>";
//Dijawab
echo "<p> dijawab</p>";
echo "<p> uang setyo - harga mainan= RP 150000-RP 55000=RP 95000</p>";
echo $uangSetyo - $hargaMainan; //Rp 95000 
?> 
  </body>
</html>