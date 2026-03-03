<?php

if (SERVER["REQUEST_METHOD"] == "POST") {

    name = POST['name'] '';
    company = POST['company'] '';
    phone = POST['phone']  '';
    email = POST['email'] '';
    service = POST['service'] '';
    province = POST['province'] '';
    industrial_estate = POST['industrial_estate']  '';
    more_details = POST['more_details'] '';

    to = "Info@stdengineering-th.com";
    subject = "มีใบเสนอราคาใหม่จากเว็บไซต์";

    message = "
    มีการส่งแบบฟอร์มใหม่เข้ามา

    ชื่อ: name
    บริษัท: company
    เบอร์โทร: phone
    อีเมล: email

    ประเภทบริการ: service
    จังหวัด: province
    นิคมอุตสาหกรรม: industrial_estate

    รายละเอียดเพิ่มเติม:
    more_details
    ";

    headers = "From: noreply@yourdomain.com\r\n";
    headers .= "Reply-To: email\r\n";

    if(mail(to, subject, message, headers)){
        echo "<script>alert('ส่งข้อมูลเรียบร้อยแล้ว'); window.location.href='index.html';</script>";
    } else {
        echo "เกิดข้อผิดพลาดในการส่งอีเมล";
    }
}
?>