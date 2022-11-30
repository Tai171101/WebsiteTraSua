<?php 
	if (isset($_POST['idDH'])) {
		# code...
		$conn = mysqli_connect("localhost","root","","webbanhang");
			mysqli_query($conn,"UPDATE hoadon SET idtrangthai= 5 WHERE idHD='".$_POST['idDH']."'");
			exit("Đã hủy");
	}
?>