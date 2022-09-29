<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">

<?php 
$db = mysqli_connect("localhost", "root", "", "web-modern");

$id = $_GET["id"];
$sql = " DELETE FROM `performance` WHERE `performance`.`id` = $id";

    // Execute query
    mysqli_query($db, $sql);
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