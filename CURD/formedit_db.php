<?php
 //ถ้ามีค่าส่งมาจากฟอร์ม
if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['id']) && isset($_POST['address']) && isset($_POST['tell']) && isset($_POST['email']) && isset($_POST['gender']) && ($_POST['img_file'])) {
    //ไฟล์เชื่อมต่อฐานข้อมูล
     require_once 'connect.php';
//ประกาศตัวแปรรับค่าจากฟอร์ม
$id = $_POST['id'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$address = $_POST['address'];
$tell = $_POST['tell'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$img_file = (isset($_POST['img_file']) ? $_POST['img_file'] : '');
$upload=$_FILES['img_file'];

//sql update
$stmt = $conn->prepare("UPDATE  tbl_member SET name=:name, surname=:surname, address=:address, tell=:tell, email=:email, gender=:gender, img_file=:img_file WHERE id=:id");
$stmt->bindParam(':id', $id , PDO::PARAM_INT);
$stmt->bindParam(':name', $name , PDO::PARAM_STR);
$stmt->bindParam(':surname', $surname , PDO::PARAM_STR);
$stmt->bindParam(':address', $address , PDO::PARAM_STR);
$stmt->bindParam(':tell', $tell , PDO::PARAM_STR);
$stmt->bindParam(':email', $email , PDO::PARAM_STR);
$stmt->bindParam(':gender', $gender , PDO::PARAM_STR);
$stmt->bindParam(':img_file', $img_file, PDO::PARAM_STR);
$stmt->execute();

// sweet alert 
    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

 if($stmt->rowCount() >= 0){
        echo '<script>
             setTimeout(function() {
              swal({
                  title: "แก้ไขข้อมูลสำเร็จ",
                  type: "success"
              }, function() {
                  window.location = "index.php"; //หน้าที่ต้องการให้กระโดดไป
              });
            }, 1000);
        </script>';
    }else{
       echo '<script>
             setTimeout(function() {
              swal({
                  title: "เกิดข้อผิดพลาด",
                  type: "error"
              }, function() {
                  window.location = "index.php"; //หน้าที่ต้องการให้กระโดดไป
              });
            }, 1000);
        </script>';
    }
$conn = null; //close connect db
} //isset
?>