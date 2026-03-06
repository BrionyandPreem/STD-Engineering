<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'] ?? '';
    $company = $_POST['company'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $service = $_POST['service'] ?? '';
    $province = $_POST['province'] ?? '';
    $industrial_estate = $_POST['industrial_estate'] ?? '';
    $more_details = $_POST['more_details'] ?? '';

    $to = "Info@stdengineering-th.com";
    $subject = "=?UTF-8?B?".base64_encode("มีใบเสนอราคาใหม่จากเว็บไซต์ STD Engineering")."?=";

    $message = "
    มีการส่งแบบฟอร์มใหม่เข้ามาจากเว็บไซต์

    ชื่อ: $name
    บริษัท: $company
    เบอร์โทร: $phone
    อีเมล: $email

    ประเภทบริการ: $service
    จังหวัด: $province
    นิคมอุตสาหกรรม: $industrial_estate

    รายละเอียดเพิ่มเติม:
    $more_details
    ";

    $headers = "From: Info@stdengineering-th.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if(mail($to, $subject, $message, $headers)){
        echo "<script>
                alert('ส่งข้อมูลเรียบร้อยแล้ว'); 
                window.location.href='index.html';
              </script>";
    } else {
        echo "เกิดข้อผิดพลาดในการส่งอีเมล กรุณาลองใหม่อีกครั้ง";
    }
}
?>