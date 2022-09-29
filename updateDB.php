<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<?php 
$db = mysqli_connect("localhost", "root", "", "web-ssit");
$id = $_POST["id"];
$type = $_POST["ph"];
$heading = $_POST["heading"];
$time = $_POST["time"];
$detail = $_POST["detail"];

if (isset($_POST['upload'])) {
    
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "uploads/" . $filename;

    $db = mysqli_connect("localhost", "root", "", "web-modern");

    // Get all the submitted data from the form
    $sql = " UPDATE performance SET Heading = '$heading',Date ='$time',Detail = '$detail', Type = '$type', filename ='$filename' WHERE id = $id ";

    // Execute query
    mysqli_query($db, $sql);
    move_uploaded_file($tempname, $folder);
    // Now let's move the uploaded image into the folder: image
    
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
					window.location.href ='indexadmin.php';
				}
			  })";
			echo "</script>";
?>
    


