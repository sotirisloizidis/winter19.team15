<?php
include 'connectDB.php';

$emailCustomer=$_POST["emailCustomer"];
$emailTrainer=$_POST["emailTrainer"];
$subject=$_POST["subject"];
$message=$_POST["message"];

if(($emailCustomer=="")||($emailTrainer=="")||($subject=="")||($message==""))
{
     header("Location:http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/supportTest.php");
        return false;
}
else
{
    $query = "SELECT * FROM Customer WHERE Email='$emailCustomer'";
    $result = mysqli_query($conn, $query)  or die("Could not connect database " .mysqli_error($conn));

    if (!$result) 
    {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    } 
    else
    {
        $query2 = "SELECT * FROM Trainer WHERE Email='$emailTrainer'";
        $result2 = mysqli_query($conn, $query2)  or die("Could not connect database " .mysqli_error($conn));

        if (!$result2)
        {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
        }
        $row = mysqli_fetch_assoc($result);
        //$row2 =  mysqli_fetch_assoc($result2);
        $name= $row['Name'];
        $surname = $row['Surname'];
        
        //printf($name);
          
        $headers = 'From: ' . $name . '< ' . $emailCustomer . ' >' . "\r\n" ;
        
         
        mail($emailTrainer,$subject,$message,$headers);
       
        // Sending email
           
       /* if(mail($emailTrainer,$subject,$message,$headers))
        {
             echo 'Your mail has been sent successfully.';
        }        
        else
        {
            echo 'Unable to send email. Please try again.';
        }   */
    }
    
}

$conn->close();

?>