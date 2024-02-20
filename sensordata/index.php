<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="refresh" content="5" >
    <link rel="stylesheet" type="text/css" href="style.css" media="screen"/>

	<title> Sensor Data </title>

</head>

<body style="background-color:lightblue;">

    <h1 style="color:brown;">SENSOR DATA</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mytectutor";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, sensor, location, value1,value2,value3,value4,value5,value6,reading_time FROM sensordata ORDER BY id DESC"; /*select items to display from the sensordata table in the data base*/

echo '<table cellspacing="5" cellpadding="5">
      <tr> 
      
        <th>ID</th> 
        <th>Date $ Time</th> 
        <th>Sensor</thh> 
        <th>Location</th> 
        <th>MQ5_Value</th> 
        <th>IR_Reading</th>
        <th>Strap_Status</th>
        <th>Acceleration_X</th>
        <th>Acceleration_Y</th>
        <th>Acceleration_Z</th>
     </tr>';
   
 
if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $row_id = $row["id"];
        $row_reading_time = $row["reading_time"];
        $row_sensor = $row["sensor"];
        $row_location = $row["location"];
        $row_SLOT1 = $row["value1"];
        $row_SLOT2 = $row["value2"]; 
        $row_SLOT3 = $row["value3"]; 
        $row_SLOT4 = $row["value4"]; 
        $row_SLOT5 = $row["value5"]; 
        $row_SLOT6 = $row["value6"]; 
        
        
        // Uncomment to set timezone to - 1 hour (you can change 1 to any number)
       // $row_reading_time = date("Y-m-d H:i:s", strtotime("$row_reading_time - 1 hours"));
      
        // Uncomment to set timezone to + 4 hours (you can change 4 to any number)
        //$row_reading_time = date("Y-m-d H:i:s", strtotime("$row_reading_time + 4 hours"));
      
        echo '<tr> 
                <td>' . $row_id . '</td> 
                <td>' . $row_reading_time . '</td> 
                <td>' . $row_sensor . '</td> 
                <td>' . $row_location . '</td> 
                <td>' . $row_SLOT1 . '</td> 
                <td>' . $row_SLOT2 . '</td>
                <td>' . $row_SLOT3 . '</td> 
                <td>' . $row_SLOT4 . '</td>
                <td>' . $row_SLOT5 . '</td> 
                <td>' . $row_SLOT6 . '</td>
               
                
              </tr>';
    }
    
}

$conn->close();
?> 
</table>

</body>
</html>

	</body>
</html>
<style>
    
th {
    font-family: Arial, Helvetica, sans-serif;
font-size: 20px;
    background: #666;
color: #FFF;
padding: 2px 6px;
border-collapse: separate;
border: 1px solid #000;
}


td {

color:black;
}

</style>