<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Submit form</title>
	<style>
		body{
			margin: 30px 50px 20px 50px;
			padding: 20px;
		}
		table{
			padding: 20px;
			border-collapse: collapse;
		}
		table tr{
			border:1px solid black;
		}
	</style>
</head>

<body>
	<hr>
	<h2>Character Frequency Counter</h2>
	<hr>
	<center>
		<table width="60%">
			<tr>
				<td>Character</td>
				<td>Count</td>
			</tr>
			<?php 
			if(isset($_POST['txt'])){
				$str1 = $_POST['txt'];

				// $po = count_chars($str1, 3);

				// echo $po;
				$strArray = count_chars($str1,1);

				foreach ($strArray as $key=>$value)
			   	{?>
			   		<tr>
			   			<td> <?php echo chr($key); ?> </td>
			   			<td> <?php echo $value ?> </td>
			   		</tr>
		  <?php }
			}
			?>

		</table>
		<br>
		<form action="wordcount.html" method="GET">
			<button>Input Another String</button>
		</form>
	</center>
	<br><br><br>

	<hr>
	<h2>Character Frequency Counter</h2>
	<hr>
	<center>
		<table width="60%">
			<tr>
				<td>Word</td>
				<td>Count</td>
			</tr>
			<?php 
			if(isset($_POST['txt'])){
				$str1 = $_POST['txt'];

				$strArray2 = explode(" ", $str1);
				$strArray9 = array_count_values($strArray2);

				foreach ($strArray9 as $key=>$value)
			   	{?>
			   		<tr>
			   			<td> <?php echo $key; ?> </td>
			   			<td> <?php echo $value ?> </td>
			   			
			   		</tr>
		  <?php }
			}
			?>

		</table>
		<br>
		<form action="wordcount.html" method="GET">
			<button>Input Another String</button>
		</form>
	</center>
	
	

	
</body>
</html>