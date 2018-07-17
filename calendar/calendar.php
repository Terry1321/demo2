<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>万年历</title>
</head>
<?php 
	$year  = $_GET['year']?$_GET['year']:date('Y',time());
	$month  = $_GET['month']?$_GET['month']:date('m',time());
	$days  = date('t',strtotime("{$year}-{$month}-1"));
	$week  = date('w',strtotime("{$year}-{$month}-1"));

	$first = $week==0?2-7:2-$week;

// 下一个月
	if ($month>=12) {
		$nextYear=$year+1;
		$nextMonth=1;
	}else{
		$nextYear=$year;
		$nextMonth=$month+1;
	}
// 上一个月
	if ($month<=1) {
		$prevYear=$year-1;
		$prevMonth=12;
	}else{
		$prevYear=$year;
		$prevMonth=$month-1;
	}
 ?>


<style>
	table{
			width: 1000px;
			border:2px solid #2E2929;
			border-collapse: collapse;
			margin: 0 auto;
	}
	tr,th,td{
			border:2px solid #2E2929;
	}
	h1,h3{
		font-style: 微软雅黑;
		text-align: center;	

	}
	a{
		text-decoration: none;
		color: blue;
	}
</style>
<body>
	<h1><?php echo $year ?>年 <?php echo $month ?>月</h1>
	<table>
		<tr>
			<th>周一</th>
			<th>周二</th>
			<th>周三</th>
			<th>周四</th>
			<th>周五</th>
			<th>周六</th>
			<th>周日</th>
		</tr>
		
		<?php 
			for ($i=$first; $i<=$days;) { 
				echo "<tr>";
					for ($j=0; $j<7;$j++) { 
						if ($i>=1 && $i<=$days) {
							echo "<td>$i</td>";
						}else{
							echo "<td>$nbsp</td>";
						}
						$i++;
					}
				echo "</tr>";
			}

		 ?>


	</table>
		<h3>
			<a href="?year=<?php echo $prevYear?>&month=<?php echo $prevMonth ?>">上个月</a>
			<span>|</span>
			<a href="?year=<?php echo $nextYear?>&month=<?php echo $nextMonth ?>">下个月</a>
		</h3>
</body>
</html>