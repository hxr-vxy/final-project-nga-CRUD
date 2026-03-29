<?php  require_once 'Bridge.php';?>
<br>
<a href='DbConnect.php' class="home-btn">Home</a><br>   

<?php 

$result = $conn->query("SELECT * FROM students");

if($result->num_rows > 0) {

    echo "<table border='1px solid black'>";
    echo "<tr>
            <th>Id</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Course</th>";

    while($rows = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $rows['Id'] . "</td>";
        echo "<td>" . $rows['firstName'] . "</td>";
        echo "<td>" . $rows['lastName'] . "</td>";
        echo "<td>" . $rows['course'] . "</td>";
        echo "</tr>";

    }
    echo "</table>";
}else {
    echo "There is no student.";
}

?>

<link rel="stylesheet" href="Retrieve.css">
