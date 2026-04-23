<?php

// declare(strict_types=1);
// $stdGrds = array(89.5, 91.2, 88.8, 90.1, 93.3);
// function arraySum(&$ry, int &$sm)
// {
// 	$sm = 0;
// 	foreach ($ry as $k => $v) {
// 		$sm += $v;
// 	}
// }
// arraySum($stdGrds, intval($sum));
// echo $sum / count($stdGrds);
// 
?>




<?php

// declare(strict_types=1);  // 1 => true  0 is the default => false disable

// $vo1 = 5;   //"5"
// $vo2 = 8;
// function  addFun(int $v1, int $v2)
// {
// 	return  $v1 + $v2;
// }
// $r = addFun($vo1, $vo2);
// print "The summation of $vo1 + $vo2 = " . $r;
?>






<!-- <html>
	<body>
		<form  method="post" action="">
		<p>X</p>	
		<input type="text" name="X">
		<p>Y</p>
		<input type="text" name="Y">
<input type="submit" name="submit" value="ADD">
		</form>
	</body>
</html> -->

<?php
// extract($_POST);

// function addFun($v1,$v2){
// 	$sum = $v1 + $v2;
// 	return $sum;
// }
// $r = addFun($X , $Y);
// echo $r;
?>


<!-- <?php
		// $std = array (
		// 	"std1" => array("name" => "Ragahd" , "Age" => "21" , "major" => "IT"),
		// 	"std2" => array("name" => "ghada" , "Age" => "30" , "major" => "teacher")
		// );

		?>
<table border="1">
	<?php
	// for(reset($std); $ky= key($std); next($std)){
	?>
	<tr> 
		<th colspan="2"> <?php
							// echo "The info about $ky"
							?></th>
	</tr>
	<?php
	// for(reset($std[$ky]); $iky = key($std[$ky]); next($std[$ky])){
	?>
	<tr>
		<td>
			<?php
			// echo "$iky: ";
			?>
		</td>
	
		<td>
			<?php
			// echo $std[$ky] [$iky];
			?>
		</td>
	</tr>
<?php
// }
// }
?> -->



<?php
$std = array(
	"std1" => array("name" => "Ragahd", "Age" => "21", "major" => "IT"),
	"std2" => array("name" => "ghada", "Age" => "30", "major" => "teacher")
);
foreach ($std as $ky) {
	// echo $val;
	foreach ($ky as $iky => $value) {
		echo $iky . " : " . $value . "<br>";
	}
}
?>

<!-- <html>

<body>
	<form action="" method="post">
		<p>Enter name</p>
		<input type="text" name="name">
		<input type="submit">
	</form>
</body>

</html> -->


<?php
// $array = array(
// 	"Ali" => array("name" => "Ali", "Age" => "30"),
// 	"Ahmed" => array("name" => "Ahmed", "Age" => "20")
// );

// extract($_POST);
// foreach ($array as $ky => $val) {
// 	if ($name ==  $ky)
// 		foreach ($val as $iky => $ival) {
// 			echo "  $iky : $ival ";
// 		}
// }

?>
<!-- 
<html>

<body>
	<form action=<?php echo "$_SERVER[PHP_SELF]" ?> method="post">
		<p>First Number</p>
		<input type="text" name="X">
		<p>Second Number</p>
		<input type="text" name="Y">
		<br>
		<input type="submit" value="Add" name="add">

		<input type="submit" value="sub" name="sub">
	</form>
</body>

</html> -->

<?php
// extract($_POST);

// function addfun(int $val1 = 0, int $val2 = 0): int
// {
// 	return $val1 + $val2;
// }
// function subfun(int $val1 = 0, int $val2 = 0): int
// {
// 	return $val1 - $val2;
// }

// if (isset($add)) {
// 	$c = addfun($X, $Y);
// 	echo $c;
// } elseif (isset($sub)) {
// 	$c = subfun($X, $Y);
// 	echo $c;
// }

?>

<!-- <html>

<body>
	<form action="" method="post">
		<p>Nme</p>
		<input type="text" name="name" id="">
		<p>prefix</p>
		<input type="text" name="pre" id="">
		<input type="submit" name="submit" id="">
	</form>
</body>

</html> -->

<?php
// extract($_POST);
// function printwelcome($nm, $pre = "mr")
// {
// 	echo "Welcome " . $pre . $nm;
// }

// if (strlen($pre > 0)) {
// 	printwelcome($name, $pre);
// } else
// 	printwelcome($name);
?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>

</body>

</html> -->