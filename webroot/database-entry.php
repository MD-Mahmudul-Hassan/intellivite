<?php

$conn = mysqli_connect("localhost","root","","intellivite");

// Check connection
if(mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$data = "Bicycling,
Running,
Swimming,
Walking,
Yoga,
Tennis,
Golf,
Basketball,
Weight Training,
Bodyweight Workout,
Dancing,
Surfing,
Volleyball,
Soccer,
Skateboarding,
Raquetball,
Squash,
Canoeing/Kayaking,
Water Activities,
Snow skiing/Snowboarding,
Ice Skating,
Ping Pong,
Wrestling,
Softball,
Boxing,
Football,
Ice Hockey,
Rock Climbing,
Rugby,
Tai Chi,
Crossfit,
Exercise Machine,
Horseback Riding,
Badminton,
Bowling";

$dataArray = explode(',', $data);


//print_r($dataArray);

foreach ($dataArray as $key => $value) {
//	echo $value;
	$sql = "INSERT INTO exercise_activities (name)
	VALUES ('$value')";	

	if ($conn->query($sql) === TRUE) {
    	echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

?>