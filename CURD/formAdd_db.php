<?php

    if(isset($_POST['name']) && isset($_POST['surname'])){

    require_once 'connect.php';

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $address = $_POST['address'];
    $tell = $_POST['tell'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $stmt = $conn->prepare("INSERT INTO tbl_member (name, surname, address, tell, email, gender)
    VALUES (:name, :surname, :address, :tell, :email, :gender)");
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':surname', $surname , PDO::PARAM_STR);
    $stmt->bindParam(':address', $address , PDO::PARAM_STR);
    $stmt->bindParam(':tell', $tell , PDO::PARAM_STR);
    $stmt->bindParam(':email', $email , PDO::PARAM_STR);
    $stmt->bindParam(':gender', $gender , PDO::PARAM_STR);
    $result = $stmt->execute();

    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

    if($result){
        echo '<script>
             setTimeout(function() {
              swal({
                  title: "เพิ่มข้อมูลสำเร็จ",
                  type: "success"
              }, function() {
                  window.location = "index.php"; 
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
                  window.location = "index.php"; 
              });
            }, 1000);
        </script>';
    }
    $conn = null; 
    } 
    ?>