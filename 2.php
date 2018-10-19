<center><b><a href="input.php">Input Data</a></b></center>
<br><br>
<form method="post" align="center">
	<input type="text" name="search" placeholder="Search Data">
</form>


<?php 
include('konek.php');


$view = "SELECT * FROM mahasiswa";
$query = mysqli_query($konek, $view);


echo "<form method='post'>";
echo "<table border='1' align='center' cellspacing='3'>";
	foreach ($query as $key) {
		echo "<tr>";
			echo "<td>".$key['NIM']."</td>";
			echo "<td>".$key['Nama']."</td>";
			echo "<td>".$key['Program_Studi']."</td>";
			echo "<td>"."<a href='delete.php?NIM=".$key['NIM']."'>"."Hapus</a>"."</td>";
		echo "</tr>";
	}
echo "</table>";
echo "</form>";
	


 ?>

