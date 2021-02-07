<?php Session_start(); ?>
<tr>
<td></td>
</tr>
<?php
	include ('connect.php');
	$layma=$_GET['xoa'];
	echo "<h1>$layma</h1>";
	$sql="delete from themmoi where code='$layma'";
	$run=mysqli_query($conn, $sql);
	if($run) header('location:list_sp.php');
	else echo "not finish";
?>