<html>
<head>
	<link rel="stylesheet" href="style.css"/>
</head>
<body>
	<center>
	<form method="post">
		<label><h1>Enter Number</h1></label>
		<input type="text" name="num" 
		placeholder="Enter numbers like 6 or 3-11" required="true" 
		oninvalid="setCustomValidity('Enter number to calculate square and cube')" 
		oninput="setCustomValidity('')"></br></br>
		<input type="submit" name="sbt">
	</form>
	<?php
	if(isset($_POST['sbt']))
		{   
			$n=$_POST['num'];
			echo "<table border='2'><tr><th>Number</th><th>Square</th><th>Cube</th></tr>";
			
			if(strstr($n,'-'))
			{
			$arr=explode('-', $n);
		    for($i=$arr[0];$i<=$arr[1];$i++)
		    {
		    	$x=$i*$i;
		    	$y=$x*$i;
		    	echo "<tr><td>$i</td><td>$x</td><td>$y</td>";
		    }
		}
		else {
				for($i=1;$i<=$n;$i++)
		    {
		    	$x=$i*$i;
		    	$y=$x*$i;
		    	echo "<tr><td>$i</td><td>$x</td><td>$y</td>";
		    }
			}
		}
		?>
	</center>
	</body>
	</html>