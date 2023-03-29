<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ฟอร์มการจองตั๋วรถทัวร์</title>
    <link rel="stylesheet" href="css/buy.css">
  </head>
  <body>
  <h1>กรอกข้อมูลผู้ซื้อตั๋วรถทัวร์</h1>
    <form action="info_buy.php">
      <label for="name">กรอกชื่อผู้ซื้อ:</label>
      <input type="text" id="name" name="name" required><br><br>
      <label for="phone">กรอกเบอร์โทรผู้ซื้อ:</label>
      <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required><br><br>
      <button type="submit">ยืนยัน</button> 
    </form>
    <button onclick="location.href='index.php'">ย้อนกลับ</button>
  </body>
</html>
