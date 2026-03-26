<?php  require_once 'Bridge.php';?>

<?php

if($_SERVER["REQUEST_METHOD"] === "POST") {

    $Firstname = $_POST['FirstName'];
    $Lastname = $_POST['LastName'];
    $Course = $_POST['Course'];

    $command = "INSERT INTO students (firstName, lastName, course) VALUES ('$Firstname', '$Lastname', '$Course')";
    $conn->query($command);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="Design.css">
</head>
<body>
    <form action="DbConnect.php" method="POST">
        <label>FirstName</label><br>
        <input type="text" name="FirstName" placeholder="Firstname" required><br>

        <label>LastName</label><br>
        <input type="text" name="LastName" placeholder="Lastname" required><br>

        <label>Course</label><br>
        <input type="text" name="Course" placeholder="Course" required><br>

        <input type="submit" value="submit" class="subtmit">

    </form>

    <div>

        <a href="Retrieve.php"><button>Retrieve</button></a>
    
        <a href="Update.php"><button>Update</button></a>
    
        <a href="Delete.php"><button>Delete</button></a>

    </div>

</body>
</html>