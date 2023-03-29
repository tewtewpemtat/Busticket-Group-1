<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ฟอร์มการจองตั๋วรถทัวร์</title>
    <link rel="stylesheet" href="css/buy.css">
  </head>
  <body>
  <h1>การซื้อตั๋วรถทัวร์</h1>
  <form action="delete.php">
  <label for="name">ชื่อผู้ซื้อ:</label>
  <input type="text" id="name" name="name" value="นายโบ๊ะ สมิง" readonly>
  <label for="datetime">วันที่ซื้อ</label>
  <input type="date" id="date" name="date" readonly><br><br>
  <label for="phone">เบอร์โทร:</label>
  <input type="text" id="phone" name="phone" value="0856955584" readonly><br><br>
  <label for="busname">ชื่อรถทัวร์:</label>
  <input type="text" id="bus" name="bus" value="Busbin" readonly><br><br>
  <label for="direction">ข้อมูลการเดินทาง:</label>
  <input type="text" id="direction" name="direction" value="กรุงเทพ-พัทยา" readonly><br><br>
  <label for="seatnumber">เลขที่นั่ง:</label>
  <input type="number" id="seat" name="seat" value="15" readonly><br><br>
  <button type="submit">ยกเลิก/ขอคืนเงิน</button>
</form>
    <button onclick="location.href='authen.php'">ย้อนกลับ</button>
    <script>
      var today = new Date().toISOString().substr(0, 10);
      document.getElementById('date').value = today;
    </script>
  </body>
</html>
