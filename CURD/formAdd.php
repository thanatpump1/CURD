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
        <div class="col-md-4"> <br> 
          <h4>ฟอร์มเพิ่มข้อมูล</h4>
          <form action="formAdd_db.php" method="post">
            <div class="mb-1">
              <label for="name" class="col-sm-2 col-form-label"> ชื่อ :  </label>
                <div class="col-sm-10">
                <input type="text" name="name" class="form-control" required minlength="3" placeholder="ชื่อ">
              </div>
              </div>
              <div class="mb-1">
                <label for="name" class="col-sm-2 col-form-label"> นามสกุล :  </label>
                <div class="col-sm-10">
                  <input type="text" name="surname" class="form-control" required minlength="3" placeholder="นามสกุล">
                </div>
                </div>
                <div class="mb-1">
                <label for="name" class="col-sm-2 col-form-label"> ที่อยู่ :  </label>
                <div class="col-sm-10">
                  <input type="text" name="address" class="form-control" required minlength="3" placeholder="ที่อยู่">
                </div>
                </div>
                <div class="mb-1">
                <label for="name" class="col-sm-2 col-form-label"> เบอร์โทร :  </label>
                <div class="col-sm-10">
                  <input type="text" name="tell" class="form-control" required minlength="3" placeholder="เบอร์โทร">
                </div>
                </div>
                <div class="mb-1">
                <label for="name" class="col-sm-2 col-form-label"> Email :  </label>
                <div class="col-sm-10">
                  <input type="text" name="email" class="form-control" required minlength="3" placeholder="email">
                </div>
                </div>
                <div class="mb-1">
                <label for="name" class="col-sm-2 col-form-label"> เพศ :  </label>
                <div class="col-sm-10">
                  <input type="text" name="gender" class="form-control" required minlength="3" placeholder="เพศ">
                </div>
                </div>
                <font color="red">*อัพโหลดได้เฉพาะ .jpeg , .jpg , .png </font>
                <input type="file" name="img_file" required   class="form-control" accept="image/jpeg, image/png, image/jpg"> <br>
                <button type="submit" class="btn btn-primary">เพิ่มข้อมูล</button>
              </form>
            </div>
          </div>
        </div>
      </body>
    </html>