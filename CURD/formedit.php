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
    <?php
    if(isset($_GET['id'])){
      require_once 'connect.php';
      $stmt = $conn->prepare("SELECT* FROM tbl_member WHERE id=?");
      $stmt->execute([$_GET['id']]);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      //ถ้าคิวรี่ผิดพลาดให้กลับไปหน้า index
      if($stmt->rowCount() < 1){
          header('Location: index.php');
          exit();
      }
    }//isset
    ?>
    <div class="container">
      <div class="row">
        <div class="col-md-4"> <br>
          <h4>ฟอร์มแก้ไขข้อมูล</h4>
          <form action="formedit_db.php" method="post">
            <div class="mb-1">
              <label for="name" class="col-sm-2 col-form-label"> ชื่อ :  </label>
              <div class="col-sm-10">
                <input type="text" name="name" class="form-control" required value="<?= $row['name'];?>" minlength="3">
              </div>
            </div>
            <div class="mb-1">
              <label for="name" class="col-sm-2 col-form-label"> นามสกุล :  </label>
              <div class="col-sm-10">
                <input type="text" name="surname" class="form-control" required value="<?= $row['surname'];?>" minlength="3">
              </div>
            </div>
            <div class="mb-1">
              <label for="name" class="col-sm-2 col-form-label"> ที่อยู่ :  </label>
              <div class="col-sm-10">
                <input type="text" name="address" class="form-control" required value="<?= $row['address'];?>" minlength="3">
              </div>
            </div>
            <div class="mb-1">
              <label for="name" class="col-sm-2 col-form-label"> เบอร์โทร :  </label>
              <div class="col-sm-10">
                <input type="text" name="tell" class="form-control" required value="<?= $row['tell'];?>" minlength="3">
              </div>
            </div>
            <div class="mb-1">
              <label for="name" class="col-sm-2 col-form-label"> E-mail :  </label>
              <div class="col-sm-10">
                <input type="text" name="email" class="form-control" required value="<?= $row['email'];?>" minlength="3">
              </div>
            </div>
            <div class="mb-1">
              <label for="name" class="col-sm-2 col-form-label"> เพศ :  </label>
              <div class="col-sm-10">
                <input type="text" name="gender" class="form-control" required value="<?= $row['gender'];?>" minlength="3">
              </div>
            </div>
            <font color="red">*อัพโหลดได้เฉพาะ .jpeg , .jpg , .png </font>
            <input type="file" name="img_file" required   class="form-control" accept="image/jpeg, image/png, image/jpg"> <br>
            <input type="hidden" name="id" value="<?= $row['id'];?>">
            <button type="submit" class="btn btn-primary">แก้ไขข้อมูล</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>