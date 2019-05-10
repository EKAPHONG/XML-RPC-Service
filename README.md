# XML-RPC Service

![](https://img.shields.io/badge/PHP-7.2.4-blue.svg) ![](https://img.shields.io/badge/PHP-xmlrpc-blue.svg)
![](https://lh3.googleusercontent.com/jK-YAtCsR9TyBNlfqfIqe2gHKeSWbX2yNraRPBvggQ6OluSgbjIaKcfzYp6vzU-bT6UCrLSiG4NLQYcXSbdiuGNCyP47fHoe9JcU0pyAqTmIgx171HXHYjYihs7oFWWVsm_CpNQ3CcjaBv2ADV7sJsYOhA-SX2cAywSolqyJHZ_1gEL63IIE-74frbvdwNk5L-WVZRRQD-QQz4N2VUt2-gbwJ6atxPAyckkfiEmmZIWkO4Tq7YVHfQCp5-ZmO-CEresiSQvol4d8wtKUcY-EPej2Ooc9Wl7WlaF_BWuLliJltDE0m48F7uc5qzWi_z2z1oey4Psfqkch1V0F4LbTIDQcU7I4cC2-ZaJe81v0fA2puwJMSSE9Eb1msIzdO97xL3tiPux1aMwU9uUi9MprDVHLxAUsL5lAG8Pdfv31YiySq2qiu_Y2Aew5AtJ30RUDb61_FvjUz5U26DMK-up_3gk93QVe4K_9zC_2CTNXtJdIbGyT_Mj8WvHfhdoiUunBAHAUDPuVES7c5FOpsH4sRg6FG2wDzenkskS26mjs_jZWS5HnGM3jpPWK9K2VVi80T5hnRcBppGRU9aHsY2Q2iM_FUVgo_OYJrg=w1920-h902)

### คุณสมบัติ

- บริการเข้ารหัสข้อมูล
- บริการถอดรหัสข้อมูล
- เรียกดูข้อมูลบัญชีผู้ใช้อินเทอร์เน็ต ตาม uid
- เรียกดูรหัสอ้างอิง Object ID ของบัญชีผู้ใช้อินเทอร์เน็ต ตาม uid
- เรียกดูข้อมูลบัญชีผู้ใช้อินเทอร์เน็ต ตาม Object ID

### Method
- getEncrypt
- getDecrypt
- getUser
- getOid
- getUserByOid

### คำสั่งเรียกใช้ Class

เพิ่มโค้ดด้านล่างนี้ ไว้ส่วนบนสุดของไฟล์

    <?php
    // Configuration, please do not edit if you do not understand the system.
    use EKAPHONG\XML_RPC;
    require_once(__DIR__ . '/class/XML_RPC.php');
    require_once(__DIR__ . '/config/config.php');
    $xmlrpc = new XML_RPC();
    // End of configuration

ก่อนใช้งานจะต้องกำหนดค่าที่ไฟล์ **config/config.php**

    <?php
    // Server address
    $server = "http://service.eng.rmuti.ac.th/eng-login/xmlrpc/";
    
    // Application ID
    $app_id = "app_id";
    
    // Secret Key
    $secret = "secret_key";
    

### สถานะ
                    
| Function name    | Description                |
| ---------------- | -------------------------- |
| `getEncrypt()`   |         **Work!**          |
| `getDecrypt()`   |         **Work!**          |
| `getUser()`      |             -              |
| `getOid()`       |         **Work!**          |
| `getUserByOid()` |         **Work!**          |
