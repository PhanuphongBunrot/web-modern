<?php
include "headeradmin.php";
$db = mysqli_connect("localhost", "root", "", "web-modern");
$id = $_GET["id"];
$query = " select * from performance WHERE id = $id ";
$result = mysqli_query($db, $query);
$data = mysqli_fetch_assoc($result);

?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@300;400&display=swap" rel="stylesheet">
<style>
    h2.a {
        font-family: 'Bai Jamjuree', sans-serif;
        color: #EC9C11;

    }
</style>
<br>
<h2 class="a">แก้ไขข้อมูล</h2>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form action="updateDB.php" method="post" enctype="multipart/form-data">
            <input type="hidden" value=" <?php  echo $data["id"]; ?>" name="id">
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">ประเภท</label>
                <select class="form-select" id="inputGroupSelect01" name="ph">
                   <?php  
                   if ($data["Type"] == "ผลงาน"){
                   echo "<option value='ผลงาน'>ผลงาน</option>";
                   echo "<option value='กิจกรรม'>กิจกรรม</option>";  
                }else{
                    echo "<option value='กิจกรรม'>กิจกรรม</option>"; 
                    echo "<option value='ผลงาน'>ผลงาน</option>";  
                }
                   ?>
                    

                </select>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">หัวข้อเรื่อง</span>
                <input type="text" name="heading" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $data["Heading"]; ?>" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">วันที่</span>
                <input type="date" name="time" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $data["Date"]; ?>"  required>
            </div>
            <div class="form-floating">
                <textarea class="form-control" name="detail" placeholder="Leave a comment here" id="floatingTextarea2" required style="height: 200px;" ><?php echo $data["Detail"]; ?></textarea>
                
            </div>
            
            <br>

            <input class="form-control" type="file" name="uploadfile"   required/>

            <br>
            <button class="btn btn-warning btn-login text-uppercase fw-bold " name="upload" type="submit"  style="color:#FFFDF9 ;" >แก้ไขข้อมูล</button>
        </form>
    </div>
    <div class="col-md-2"></div>
</div>