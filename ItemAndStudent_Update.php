<?php


$Item =  $_GET["Item"];
$Vote =  $_GET["Vote"];
$Name =  $_GET["Name"];


//echo $Item;
//echo "<br>";
//echo $Vote;
//echo "<br>";

$servername = "182.50.133.78:3306";
$username = "nelson";
$password = "nbastiaan#5";
$dbname = "voting_app";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//$sql = "UPDATE `ItemListTable` SET `Votes` = 4 WHERE `Item` = 'Apple'";
//$sql = "UPDATE `ItemListTable` SET `Votes` = '$Vote' WHERE `Item` = '$Item'";
//$sql = "UPDATE `ItemListTable` SET `Votes`= Votes + 1 WHERE `Item` = '$Item'";
//$sql = "UPDATE `ItemListTable` SET `Votes`= Votes - 1 WHERE (Select Item From`Student_table` WHERE `StudentName` = '$Name'";
$sql = "UPDATE `ItemListTable` SET `Votes` = Votes - 1 WHERE `Item` = (SELECT `ItemVote` FROM `Student_table` WHERE `StudentName` = '$Name')";

if ($conn->query($sql) === TRUE) {
    //echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();


//UPDATE `ItemListTable` SET Votes`= `Votes` - 1 WHERE  (SELECT 
//UPDATE `ItemListTable` SET `Votes` = `Votes` - 1 WHERE `Item`  = (SELECT `ItemVote` FROM `Student_table` WHERE `StudentName` = "John")
//$sql = "UPDATE `ItemListTable` SET `Votes` = `Votes` - 1 WHERE `Item` = (SELECT `ItemVote` FROM `Student_table` WHERE `StudentName` = \"John\")";

//////////////////////////////
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//$sql = "UPDATE `ItemListTable` SET `Votes` = 4 WHERE `Item` = 'Apple'";
//$sql = "UPDATE `ItemListTable` SET `Votes` = '$Vote' WHERE `Item` = '$Item'";
$sql = "UPDATE `ItemListTable` SET `Votes`= Votes + 1 WHERE `Item` = '$Item'";

if ($conn->query($sql) === TRUE) {
    //echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
//////////////////////////////////
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//$sql = "UPDATE `ItemListTable` SET `Votes` = 4 WHERE `Item` = 'Apple'";
$sql = "UPDATE `Student_table` SET `ItemVote`= '$Item' WHERE `StudentName` = '$Name'";

if ($conn->query($sql) === TRUE) {
    echo "Vote successfull";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

//UPDATE `Student_table` SET `ItemVote`="Bananna" WHERE `StudentName` = "John"

?>


