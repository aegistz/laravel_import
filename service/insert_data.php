
<?php
include 'config.php';


          $Location = $_POST['Location'];
          $กว้าง = $_POST['กว้าง'];
          $คำนำหน้า = $_POST['คำนำหน้า'];
          $ชั้น = $_POST['ชั้น'];
          $ชื่อ = $_POST['ชื่อ'];
          $ทีมที่สำรวจ = $_POST['ทีมที่สำรวจ'];
          $ที่ตั้งทรัพย์สิน = $_POST['ที่ตั้งทรัพย์สิน '];
          $ที่อยู่ = $_POST['ที่อยู่'];
          $นามสกุล = $_POST['นามสกุล'];
          $ประเภททรัพย์สิน = $_POST['ประเภททรัพย์สิน'];
          $ยาว = $_POST['ยาว'];
          $รวม = $_POST['รวม'];
          $รูปถ่าย = $_POST['รูปถ่าย'];
          $ลักษณะอาคาร = $_POST['ลักษณะอาคาร'];
          $วันที่สำรวจ = $_POST['วันที่สำรวจ'];
          $สถานะอยู่ในทะเบียนบ้าน = $_POST['สถานะอยู่ในทะเบียนบ้าน'];
          $หมายเหตุ = $_POST['หมายเหตุ'];
          $อายุก่อสร้าง = $_POST['อายุก่อสร้าง'];
          $เลขบัตรประชาชน = $_POST['เลขบัตรประชาชน'];

        //   if($รวม == ''){
        //         $รวม = 0;
        //   }
        //   if($ชั้น == ''){
        //         $ชั้น = 0;
        //   }
        //   if($กว้าง == ''){
        //         $กว้าง = 0;
        //   }
        //   if($ยาว == ''){
        //         $ยาว = 0;
        //   }
        //   if($เลขบัตรประชาชน == ''){
        //         $เลขบัตรประชาชน = 0;
        //   }
        //   if($อายุก่อสร้าง == ''){
        //         $อายุก่อสร้าง = 0;
        //   }
          																		
    $sql = "INSERT INTO Inputbuilding ( 
         Location,
         คำนำหน้า,
         ชื่อ,
         นามสกุล,
         เลขบัตรประชาชน,
         ที่อยู่,
         รูปถ่าย,
         ที่ตั้งทรัพย์สิน,
         ประเภททรัพย์สิน,
         ชั้น,
         รวม,
         กว้าง,
         ยาว,
         ลักษณะอาคาร,
         อายุก่อสร้าง,
         ทีมที่สำรวจ,
         หมายเหตุ,
         วันที่สำรวจ
           )
        VALUES (
        '$Location',
        '$คำนำหน้า',
        '$ชื่อ',
        '$นามสกุล',
        '$เลขบัตรประชาชน',
        '$ที่อยู่',
        '$รูปถ่าย',
        '$ที่ตั้งทรัพย์สิน',
        '$ประเภททรัพย์สิน',
        '$ชั้น',
        '$รวม',
        '$กว้าง',
        '$ยาว',
        '$ลักษณะอาคาร',
        '$อายุก่อสร้าง',
        '$ทีมที่สำรวจ',
        '$หมายเหตุ',
        '$วันที่สำรวจ'
        )";
        // if ( $conn->query($sql) === TRUE ) {
        //         echo json_encode(['status' => 'member_success','message' => 'success']);
        // }else{
        //         echo json_encode(['status' => 'error','message' => 'error_404']);
        // }




?>