<?php
include 'connectDB.php';

  var_dump ("hehehehehhe");
$positions=($_POST["positions"]);
$className=($_POST["className"]);
$description=($_POST["description"]);
$places=($_POST["nPlaces"]);
for( $i=0; $i<count($positions);$i++){
    $position=$positions[$i];
	$h=$position[0];
    $d=$position[2];
    switch ($h) {
	 case "0":
        $hour="7:30";
        break;
	 case "1":
        $hour="8:15";
        break;
	 case "2":
         $hour="17:15";
        break;
	 case "3":
        $hour="18:00";
        break;
	 case "4":
        $hour="18:45";
        break;
	 case "5":
        $hour="19:30";
        break;
     case "6":
        $hour="20:15";
        break;
    default:
        echo "Wrong insert.";
	}
	switch ($d) {
	 case "1":
        $day="Monday";
        break;
	 case "2":
        $day="Tuesday";
        break;
	 case "3":
         $day="Wednesday";
        break;
	 case "4":
        $day="Thursday";
        break;
	 case "5":
        $day="Friday";
        break;
     case "6":
        $day="Saturday";
        break;
    default:
        echo "Wrong insert.";
	} 
	
  //  $query = "SELECT * FROM ClassV1";
   // $result = mysqli_query($conn, $query)  or die("Could not connect database " .mysqli_error($conn));

    /*while($row = mysqli_fetch_assoc($result)) {
        $daydb = $row['Day'];
        $hourdb=$row['Hour'];
    
        if(($day === $daydb)&&($hour === $hourdb)) {
            echo "$day is equal to $daydb and $hour is equal to $hourdb";
        exit();
    }*/
   
  
     $sql="INSERT INTO ClassV1 (ClassName,Number_of_places,Number_of_available,Day,Hour,Description,ClassIndex) VALUES ('$className','$places','$places','$day','$hour','$description','$position')";
mysqli_query($conn,$sql);
}
//$error = ["errorMessage"=> true];
//echo json_encode($error);
//echo json_encode($className);
//echo json_encode($positions);
//echo json_encode($description);
$conn->close();
?>
