<?php
$host="localhost";
$dbuser="root";
$pass="";
$dbname="my";
$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
if(mysqli_connect_error())
{
die("connection failed".mysqli_connect_errno());
} 
else
{
echo" ";	
} 
$name=$_POST['n'];
$mobile=$_POST['m'];
$person=$_POST['p'];
$room=$_POST['o'];
$hotel=$_POST['r'];
$arrival=$_POST['a'];
$departure=$_POST['d'];
$int = filter_var($hotel, FILTER_SANITIZE_NUMBER_INT);
$a=$int*$room;

	$sql="insert into bluelagoon(name,mobile,person,room,hotel,arrival,departure)".
	"values('$name','$mobile','$person','$room','$hotel','$arrival','$departure')";
	$res=mysqli_query($conn,$sql);
	if(!$res)
	{
		die("query failed".mysqli_errno($conn));
		}
		else
		{
				echo"<strong>&nbsp&nbsp$room TICKET BOOKED ON YOUR FAVOIURITE HILL STATION FROM $arrival TO $departure<br>
				<br>
				&nbsp&nbspCHARGES =Rs$a...THANKYOU</strong>";
			echo "<script>setTimeout(\"location.href = 'http://localhost/sajan%20project/';\",5000);</script>";
		}
mysqli_close($conn);
?>