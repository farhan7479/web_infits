<?php 
$HOSTNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DBNAME = "infits";

$conn = new mysqli("localhost", "root", "", "infits");


if($conn->connect_error){
    die("Connection failed :" . $conn->connect_error);
}
if (!function_exists('runQuery')) {
    function runQuery($query){
        global $conn;
        $result = $conn->query($query);
        $data = array();
        while($row = $result->fetch_assoc()){
            $data[] =  $row;
        }
        $conn->close();
        return ($data);
    }
}
?>