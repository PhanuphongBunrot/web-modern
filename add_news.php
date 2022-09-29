
<?php
include "headeradmin.php"
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@300;400&display=swap" rel="stylesheet">
<style>
    h2.a {
        font-family: 'Bai Jamjuree', sans-serif;
        color: #0CB3D4;

    }
</style>
<br>
<h2 class="a">ผลงานหรือกิจกรรมของบริษัท</h2>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form action="add_db.php" method="post" enctype="multipart/form-data">
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">ประเภท</label>
                <select class="form-select" id="inputGroupSelect01" name="ph">
                    
                    <option value="ผลงาน">ผลงาน</option>
                    <option value="กิจกรรม">กิจกรรม</option>

                </select>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">หัวข้อเรื่อง</span>
                <input type="text" name="heading" class="form-control" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">วันที่</span>
                <input type="date" name="time" class="form-control" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
            <div class="form-floating">
                <textarea class="form-control" name="detail" placeholder="Leave a comment here" id="floatingTextarea2" required style="height: 200px;"></textarea>
                
            </div>
            <br>

            <input class="form-control" type="file" name="uploadfile" value=""  required/>

            <br>
            <button class="btn btn-primary btn-login text-uppercase fw-bold" name="upload" type="submit"  required >Upload</button>
        </form>
    </div>
    <div class="col-md-2"></div>
</div>