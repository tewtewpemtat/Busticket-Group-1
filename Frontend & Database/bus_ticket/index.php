<!DOCTYPE html>
<html>
<head>
	<title>เลือกรถทัวร์</title>
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
	<h1><center>เลือกรถทัวร์</center></h1>
	<table>
		<thead>
			<tr>
				<th><center>ID</center></th>
				<th>ชื่อรถทัวร์</th>
				<th>ข้อมูลการเดินทาง</th>
				<th>เวลาออกรถ</th>
				<th>ราคาตั๋ว</th>
				<th>คงเหลือที่นั่ง</th>
				<th>เลือกที่นั่ง</th>
				
			</tr>
			<tr>
				<td>1</td>
				<td>Busbin</td>
				<td>พัทยา-กรุงเทพ</td>
				<td>22:00</td>
				<td>800</td>
				<td>20</td>
				<td><button onclick= "location.href='seat.php' ">เลือก</button></td>
			</tr>
			<tr>
				<td>2</td>
				<td>Busbong</td>
				<td>พัทยา-สระบุรี</td>
				<td>19:00</td>
				<td>600</td>
				<td>20</td>
				<td><button onclick= "location.href='seat.php' ">เลือก</button></td>
			</tr>
			<tr>
				<td>3</td>
				<td>Busbird</td>
				<td>พัทยา-เชียงใหม่</td>
				<td>20:30</td>
				<td>1500</td>
				<td>20</td>
				<td><button onclick= "location.href='seat.php' ">เลือก</button></td>
			</tr>
		</thead>
	</table><br>
	<button onclick="location.href='authen.php'">ตรวจสอบข้อมูล</button>
</body>
</html>
