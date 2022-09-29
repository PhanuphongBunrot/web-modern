<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<?php
error_reporting(0);


$msg = "";

$type = $_POST["ph"];
$heading = $_POST["heading"];
$time = $_POST["time"];
$detail = $_POST["detail"];
if ($type != null and $heading != null and $time != null and $detail != null) {
	if (isset($_POST['upload'])) {

		$filename = $_FILES["uploadfile"]["name"];
		$tempname = $_FILES["uploadfile"]["tmp_name"];
		$folder = "uploads/" . $filename;

		$db = mysqli_connect("localhost", "root", "", "web-modern");

		// Get all the submitted data from the form
		$sql = "INSERT INTO performance (Heading,Date,Detail,filename,Type) VALUES ('$heading','$time','$detail ','$filename','$type')";

		// Execute query
		mysqli_query($db, $sql);
		move_uploaded_file($tempname, $folder);
		// Now let's move the uploaded image into the folder: image
		
	}
}
echo ".";
			echo "<script>";
			echo "Swal.fire({
			icon: 'success',
			title: 'บันทึกข้อมูลสำเร็จ',
			showConfirmButton: false,
			timer: 2000
			}).then((result) => {
				if (result.isDismissed) {
					window.location.href ='add_news.php';
				}
			  })";
			echo "</script>";
?>