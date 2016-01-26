<html>
<link rel="stylesheet" href="style.css" media="all" />
<head>
<title>Generating Fibonacci series</title>
</head>
<body>
<div class="Container">
<center><b>FIBONACCI SERIES GENERATOR</b></center>
<br>
<form action="" method="post">
<label>The series should start from</label>
<input class="text1" type="text" name="num1" /></br></br></br>
<label>Numbers present in the series</label>
<input class="text2" type="text" name="num2" /><br></br></br>
<input class="btn" type="submit" name="submit"  value="Generate Fibonacci series">
</form>
<?php
if(isset($_POST['submit']))
    {
        echo "The Fibonacci series is";
		echo "&nbsp" ;
		$num1=$_POST['num1'];
		$num2=$_POST['num2'];
		$first="$num1";
		echo "&nbsp" ;
		$second=$num1+1;
		ECHO "&nbsp";
		$sum=0;
		//echo $first;
		//echo ",";
		//echo $second;
		echo"<table>";
		echo"<tr>";
		echo "<td>".$first."</td>";
		echo"</tr>";
		echo"<tr>";
		echo "<td>".$second."</td>";
		echo"</tr>";
		echo"</table>";
		
		for($x=1;$x<=$num2-2;$x++)
        {
			
		$sum=$first+$second;
		
		echo "<table>";
		echo"<tr>";
		//<div class ='scrollit'>
		echo "<td>".$sum."</td>";
		echo "</tr>";
		echo "</table>";
		//echo "&nbsp" ;
		//echo",";
		//echo "$sum";
		$first=$second;
		$second=$sum;
		//</div>
		}
		
	}
?>	
</div>
</body>
</html>
