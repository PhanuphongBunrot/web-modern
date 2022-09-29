<style>
    img.a {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 700px;
        height: 450px;

    }
</style>

<?php
include "header.php";


$db = mysqli_connect("localhost", "root", "", "web-modern");
$key =  $_GET['key'];


$query = " select * from performance WHERE id = $key ";
$result = mysqli_query($db, $query);
?>
<div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
    <div class="container text-center py-5">
        <h1 class="text-white display-1"><?php echo $_GET["nameType"] ?></h1>
        <div class="d-inline-flex text-white mb-5">
            <p class="m-0 text-uppercase"><a class="text-white" href="index.php">Home</a></p>
            <i class="fa fa-angle-double-right pt-1 px-3"></i>
            <p class="m-0 text-uppercase"><?php echo $_GET["nameType"] ?></p>
        </div>

    </div>
</div>

<?php
while ($data = mysqli_fetch_assoc($result)) {
?>
    <h1 style="text-align:center"><?php echo $data["Heading"] ?></h1>


    <br>
    <img class="b" src="uploads/<?php echo $data['filename']; ?>">
    <br>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            
            
            <p>
                <?php echo $data["Detail"] ?>
            </p>
            <br>
            <p style="font-size: 10px ;">
                <?php echo date("d/m/Y ", strtotime($data['Date'])); ?>
            </p>
            
        </div>

        <div class="col-md-4"></div>
    </div>


<?php   }
?>

<?php
include "endder.php";

?>