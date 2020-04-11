<?php
include 'connectDB.php';

$email = $_POST["Email"];
$password = $_POST["Password"];


if($email == "" || $password == "" )
{
	echo "<script> alert('here'); </script>";
}
else
{
	//header("Location: http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/clientData.html");
	$query = "SELECT * FROM Customer WHERE Email='$email'";
	$result = mysqli_query($conn, $query)  or die("Could not connect database " .mysqli_error($conn));
	if (!$result) 
	{
		echo "<script> alert('FAILURE'); </script>";	
		printf("Error: %s\n", mysqli_error($conn));
    		exit();
	}
	else
	{
		$row = mysqli_fetch_assoc($result);
	
		if (password_verify($password,$row['Password']))
		{
			$myfile = fopen("testData.txt", "w") or die("Unable to open file!");

			$cuid="SELECT Customer_ID FROM Customer WHERE Email = '$email'"; 
			$res=mysqli_query($conn,$cuid);
       			$row = mysqli_fetch_assoc($res);
       			$id=$row['Customer_ID'];
			
			$query = "SELECT * FROM Customer WHERE Customer_ID = '$id' "; 
			$res=mysqli_query($conn,$query);
			$data = mysqli_fetch_assoc($res);
			$fieldInfo = mysqli_fetch_fields($res);
			fwrite($myfile, "Client Details: \n");
			foreach ($fieldInfo as $field )
			{
				//echo "<script> alert($field->table); </script>";
				fwrite($myfile,$field->name . " => " . $data[$field->name] . "\n");
			}
			
			$query = "SELECT * FROM Memberships WHERE CustomerID = '$id' ";
			$res=mysqli_query($conn,$query);
			$data = mysqli_fetch_assoc($res);
			$fieldInfo = mysqli_fetch_fields($res);
			fwrite($myfile, "\nMemberships: \n");
			foreach ($fieldInfo as $field )
			{
				//echo "<script> alert($field->table); </script>";
				fwrite($myfile,$field->name . " => " . $data[$field->name] . "\n");
			}

			$query = "SELECT * FROM Enrolled WHERE Username = '$email'";
			$res=mysqli_query($conn,$query);
			//$data = mysqli_fetch_array($res);
			$fieldInfo = mysqli_fetch_fields($res);
			fwrite($myfile, "\nEnrolment: \n");
			foreach ($fieldInfo as $field )
			{
				fwrite($myfile,$field->name . "\t\t ");
			}	
    			while($row = $res->fetch_assoc()) 
			{
				fwrite($myfile, "\n". $row[Id] . "\t\t " . $row[Username] ."\t " . $row[ClassID] . "\t\t\t " . $row[Date]);     			}

			$query = "SELECT * FROM Login_Log WHERE Customer_ID = '$id' ";
			$res=mysqli_query($conn,$query);
			//$data = mysqli_fetch_array($res);
			$fieldInfo = mysqli_fetch_fields($res);
			fwrite($myfile, "\n\nLog-in  Details: \n");
			foreach ($fieldInfo as $field )
			{
				fwrite($myfile,$field->name . "\t ");
			}	
    			while($row = $res->fetch_assoc()) 
			{
				fwrite($myfile, "\n". $row[Id] . "\t " . $row[Customer_ID] ."\t\t " . $row[Date]); //TOFIX: missing the first login
    			}		

			
			/*$d = print_r($data, true);
			fwrite($myfile, $d);*/
			//echo "<script> alert($id); </script>";
			
			fclose($myfile);
		}		
		else
		{
			echo "<script> alert('PASSWORD NOT VERYFIED'); </script>";		
		}
	}	
	mysqli_close($conn);
	echo "<script>setTimeout(\"location.href = ' http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/clientData.html';\",500);</script>";
}

?>
