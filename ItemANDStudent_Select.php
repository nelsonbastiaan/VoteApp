<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<body>


<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.cars = [
        {model : "Ford Mustang", color : "red"},
        {model : "Fiat 500", color : "white"},
        {model : "Volvo XC90", color : "black"}
    ];
});

var app2 = angular.module('myApp2', []);
app2.controller('myCtrl2', function($scope2) {
    $scope2.items = [
        {fruit : "Apple", color : "red"},
        {fruit : "Bannana", color : "white"},
        {fruit : "Pear", color : "black"}
    ];
});



</script>

<h1>Voting summary of who voted for what fruit and how many votes each fruit got</h1>

</body>
</html>





<?php
$servername = "182.50.133.78:3306";
$username = "nelson";
$password = "nbastiaan#5";
$dbname = "voting_app";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//$sql = "SELECT id, firstname, lastname FROM MyGuests";
$sql = "SELECT * FROM `Student_table`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
	echo "<h2>Voting summary of who voted for what fruit</h2>";
	
	echo "<ol>";
	
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["StudentName"]. " Item Vote: " .$row["ItemVote"]. "<br>";
		echo  "<li>" . $row["StudentName"]. " Item Vote: " .$row["ItemVote"]. "</li>";
    }
	
	echo "</ol>";
	
} else {
    echo "0 results";
}

//$sql = "SELECT * FROM `ItemListTable` ORDER by `Votes`";
$sql = "SELECT * FROM `ItemListTable` ORDER by `Votes` DESC";
//$sql = "SELECT * FROM `ItemListTable`";
//$sql = "SELECT * FROM `ItemListTable` ORDER BY 'Item' ASC|DESC";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo "<h2>How many votes each fruit got</h2>"
	;
		echo "<ol>";
	
    while($row = $result->fetch_assoc()) {
		echo  "<li>";
        //echo "Item: " . $row["Item"]. " Votes: " . $row["Votes"]. "<br>";
		echo $row["Item"]. " Votes: " . $row["Votes"];
		
		echo  "</li>";
    }
	
		echo "</ol>";
	
} else {
    echo "0 results";
}




$conn->close();
?>

<a href="http://nelsonbastiaanvermeer.com/voting_app/http.html">Go back to Voting Page</a>