<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>TEST THAI MULTIVERSE EXPERT</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12"> <br>
                    <h3>รายการแพทย์ <a href="formAdd.php" class="btn btn-info">+เพิ่มข้อมูล</a> </h3>
                    <table class="table table-striped  table-hover table-responsive table-bordered">
                        <thead>
                            <tr>
                                <th width="5%">ลำดับ</th>
                                <th width="15%">ชื่อ</th>
                                <th width="15%">นามสกุล</th>
                                <th width="30%">ที่อยู่</th>
                                <th width="15%">เบอร์โทร</th>
                                <th width="20%">Email</th>
                                <th width="20%">เพศ</th>
                                <th width="5%">แก้ไข</th>
                                <th width="5%">ลบ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //คิวรี่ข้อมูลมาแสดงในตาราง
                            require_once 'connect.php';
                            $stmt = $conn->prepare("SELECT* FROM tbl_member");
                            $stmt->execute();
                            $result = $stmt->fetchAll();
                            foreach($result as $k) {
                            ?>
                            <tr>
                                <td><?= $k['id'];?></td>
                                <td><?= $k['name'];?></td>
                                <td><?= $k['surname'];?></td>
                                <td><?= $k['address'];?></td>
                                <td><?= $k['tell'];?></td>
                                <td><?= $k['email'];?></td>
                                <td><?= $k['gender'];?></td>
                                <td><a href="formEdit.php?id=<?= $k['id'];?>" class="btn btn-warning btn-sm">แก้ไข</a></td>
                                <td><a href="del.php?id=<?= $k['id'];?>" class="btn btn-danger btn-sm" onclick="return confirm('ยืนยันการลบข้อมูล !!');">ลบ</a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>