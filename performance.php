<?php include "header.php" ;
$db = mysqli_connect("localhost", "root", "", "web-modern");
?>


<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
    <div class="container text-center py-5">
        <h1 class="text-white display-1">Performance</h1>
        <div class="d-inline-flex text-white mb-5">
            <p class="m-0 text-uppercase"><a class="text-white" href="index.php">Home</a></p>
            <i class="fa fa-angle-double-right pt-1 px-3"></i>
            <p class="m-0 text-uppercase">Performance</p>
        </div>
        <div class="mx-auto mb-5" style="width: 100%; max-width: 600px;">

        </div>
    </div>
</div>
<!-- Header End -->


<!-- Courses Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row mx-0 justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center position-relative mb-5">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Performance</h6>

                </div>
            </div>
        </div>
        <div class="row">
            <?php $query = " select * from performance ";
            $result = mysqli_query($db, $query);

            while ($data = mysqli_fetch_assoc($result)) {
                if ($data['Type'] == "ผลงาน") {

            ?> 
                    <div class="col-lg-4 col-md-6 pb-4">
                        <a class="courses-list-item position-relative d-block overflow-hidden mb-2"  href="page.php?key=<?php echo $data["id"]; ?>&nameType=Performance">
                            <img class=" a" src="uploads/<?php echo $data['filename']; ?>"  alt="">
                            <div class="courses-text">
                                <h4 class="text-center text-white px-3"><?php echo $data['Heading']; ?></h4>

                            </div>
                        </a>
                    </div>
            <?php  }
            }  ?>
           
        </div>
    </div>
</div>
<!-- Courses End -->


<?php include "endder.php" ?>
</body>

</html>