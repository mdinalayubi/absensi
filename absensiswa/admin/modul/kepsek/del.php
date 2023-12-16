<?php 
$del = mysqli_query($con,"DELETE FROM tb_kepsek WHERE id_kepsek");
if ($del) {
		echo " <script>
		alert('Data telah dihapus !');
		window.location='?page=kepsek';
		</script>";	
}

 ?>