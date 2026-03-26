<?php require_once 'Bridge.php';?>
<?php require_once 'Retrieve.php';?>

<?php

if($_SERVER["REQUEST_METHOD"] === "POST") {

    $Id = $_POST['primaryKey'];

    $delete = "DELETE FROM students WHERE Id='$Id'";
    $conn->query($delete);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Delete.css">
</head>
<body>
    <form action="Delete.php" method="POST">
        <br><br>
        <label>Enter students Id</label><br>
        <input type="number" name="primaryKey"><br><br>

        <input type="submit" value="delete">
        <button>Show Table</button>
    </form>
</body>
</html>