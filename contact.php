<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST['name'] ?? '');
    $company = trim($_POST['company'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $service = trim($_POST['service'] ?? '');
    $message = trim($_POST['message'] ?? '');

    $to = "Info@stdengineering-th.com";
    $subject = "=?UTF-8?B?".base64_encode("มีการติดต่อใหม่จากเว็บไซต์ STD Engineering")."?=";

    $email_content = "มีการส่งแบบฟอร์มใหม่เข้ามาจากหน้าเว็บไซต์\n\n";
    $email_content .= "ชื่อ-นามสกุล: $name\n";
    $email_content .= "บริษัท: $company\n";
    $email_content .= "อีเมลติดต่อ: $email\n";
    $email_content .= "ประเภทบริการที่สนใจ: $service\n\n"; 
    $email_content .= "รายละเอียดเพิ่มเติม:\n$message\n";

    $headers = "From: Info@stdengineering-th.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if(mail($to, $subject, $email_content, $headers)){
        echo "<script>
                alert('ส่งข้อมูลเรียบร้อยแล้ว ขอบคุณที่ติดต่อเราค่ะ');
                window.location.href='index.html'; 
              </script>";
    } else {
        echo "<script>
                alert('เกิดข้อผิดพลาดในการส่งอีเมล กรุณาลองใหม่อีกครั้ง');
                window.history.back();
              </script>";
    }
}
?>