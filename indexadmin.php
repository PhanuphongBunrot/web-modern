<?php

include "headeradmin.php";

$db = mysqli_connect("localhost", "root", "", "web-modern");
$query = " select * from performance ";
$result = mysqli_query($db, $query);

?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Heading</th>
            <th scope="col">Date</th>
            <th scope="col">Type</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            
        </tr>
    </thead>
    <tbody>
        <?php while ($data = mysqli_fetch_assoc($result)) {  ?>
            <tr>

                <td><?php echo $data["Heading"]  ?></td>
                <td><?php echo $data["Date"]  ?></td>
                <td><?php echo $data["Type"]  ?></td>
                <td><a href="update.php?id=<?php echo $data["id"]; ?> " class="btn btn-warning" style="color:#FFFDF9 ;">แก้ไข</a></td>
                <td><a href="delete.php?id=<?php echo $data["id"]; ?> " class="btn btn-danger" onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่')">ลบ</a></td>
            </tr>
        <?php
        }

        ?>
       

        <!-- Modal -->

        
    </tbody>

</table>