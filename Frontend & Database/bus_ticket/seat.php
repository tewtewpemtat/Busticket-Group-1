<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seat Selection</title>
    <link rel="stylesheet" href="css/seat.css">
</head>
<body>
<div class="container ">
	<h1><center>ที่นั่งบนรถทัวร์</center></h1><hr>
        <?php
            for ($i = 0; $i < 2; $i++) {
                echo '<div class="row">';
                for ($j = 1; $j <= 10; $j++) {
                    echo '<div class="seat">ที่นั่ง ' . ($i * 10 + $j) . '</div>';
                }
                echo '</div>';
            }
        ?><br>
    </div>
	<h1><center>เลือกที่นั่ง</center></h1>
	<table>
		<thead>
			<tr>				
				<th>เลขที่นั่ง</th>
				<th>สถานะ</th>
				<th>ซื้อตั๋วโดยสาร</th>	
			</tr>
			<tr>
				<td>1</td>
				<td>ว่าง</td>
				<td><button onclick="location.href='buy.php'">เลือก</button></td>
			<tr>
			<tr>
				<td>2</td>
				<td>ว่าง</td>
				<td><button onclick="location.href='buy.php'">เลือก</button></td>
			<tr>
			<tr>
				<td>3</td>
				<td>ว่าง</td>
				<td><button onclick="location.href='buy.php'">เลือก</button></td>
			<tr>
			<tr>
				<td>4</td>
				<td>ว่าง</td>
				<td><button onclick="location.href='buy.php'">เลือก</button></td>
			<tr>
		</thead>
	</table><br>
	<button onclick="location.href='index.php'">ย้อนกลับ</button>		
</body>
</html>