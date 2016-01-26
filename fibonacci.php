 <?php
 if(isset($_POST['submit']))
    {
        $num1=$_POST['num1'];
		$num2=$_POST['num2'];
		$first="$num1 &nbsp";
		$second=$num1+1;
		ECHO "&nbsp";
		$sum=0;
		echo $first;
		echo $second;
		for($x=1;$x<=$num2-2;$x++)
        {
		$sum=$first+$second;
		echo "&nbsp" ;
		echo "$sum";
		$first=$second;
		$second=$sum;
		}
	}
	
	?>