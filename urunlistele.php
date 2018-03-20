<table border="1" align="center">
<tr>
<th colspan="3">URUN LÝSTELE</th>
</tr>
<tr>
<th>Adi</th>
<th>Markasi</th>
<th>Fiyati</th>
</tr>

<?php
	
          $dosya1=fopen("urun.txt","r");
		$dosya2=fopen("markası.txt","r");
		while (!feof($fiyat1) && !feof($fiyat2))	
	
	
	
	
	
	
	{
		$kaynak=fgets($dosya,256);
		$kaynak=trim($kaynak);
		$dizi=explode("-",$kaynak);
		echo "<tr>";
		 echo "<td>".$dizi[0]."</td>";
		 echo "<td>".$dizi[1]."</td>";
		 echo "<td>".$dizi[2]."</td>";
		echo "</tr>";
	}
?>

<tr>
	<td colspan="3" align="center">
		<a href='index.php'>anasayfa don</a>
	</td>
</tr>


</table>
