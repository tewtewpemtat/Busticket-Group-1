<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ฟอร์มการจองตั๋วรถทัวร์</title>
    <link rel="stylesheet" href="css/buy.css">
  </head>
  <body>
    <h1>การซื้อตั๋วรถทัวร์</h1>
    <form action="popup.php">
      <label for="name">ชื่อผู้ซื้อ:</label>
      <input type="text" id="name" name="name" required><br><br>
      <label for="date">วันที่ซื้อ:</label>
      <input type="date" id="date" name="date" disabled><br><br><br>
      <label for="phone">เบอร์โทร:</label>
      <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required><br><br>
      <button type="submit">ชำระเงิน</button> 
    </form>
    <button onclick="location.href='seat.php'">ย้อนกลับ</button>
    <script>
      var today = new Date().toISOString().substr(0, 10);
      document.getElementById('date').value = today;
    </script>
  </body>
</html>
