<?php require_once 'Bridge.php';?>
<?php require_once 'Retrieve.php';?>

<?php 

if($_SERVER["REQUEST_METHOD"] === "POST") {

    $finalName = $_POST['updatedFirstName'] ?? null;
    $finalLastName = $_POST['updatedLastName'] ?? null;
    $finalCourse = $_POST['updatedCourse'] ?? null;
    $id = $_POST['primaryKey'] ?? null;

    if($finalName && $id){
    $updateComm = "UPDATE students SET firstname = '$finalName' WHERE Id = '$id'";
    $conn->query($updateComm);
    }

    if($finalLastName && $id) {
    $updateComm = "UPDATE students SET lastName = '$finalLastName' WHERE Id = '$id'";
    $conn->query($updateComm);
    }

    if($finalCourse && $id) {
    $updateComm = "UPDATE students SET course = '$finalCourse' WHERE Id = '$id'";
    $conn->query($updateComm);
    }
}


?>

<?php 
    $selectedTool = isset($_POST['tool']) ? $_POST['tool'] : '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Update.php" method="POST">
    <br><br>
        <label>What do you want to update</label><br>
    <select name="tool" onchange="this.form.submit()" required>

        <option value="">-- Select --</option>
        <option value="firstname" <?= $selectedTool == 'firstname' ? 'selected' : '' ?>>FirstName</option>
        <option value="lastname" <?= $selectedTool == 'lastname' ? 'selected' : '' ?>>LastName</option>
        <option value="course" <?= $selectedTool == 'course' ? 'selected' : '' ?>>Course</option>
    </select>

    <?php if($selectedTool == 'firstname'): ?>

        <div>
            <label><br><br>Enter Updated FirstName</label><br>
            <input type="text" name="updatedFirstName">

            <label><br><br>Enter Unique Identifier</label><br>
            <input type="number" name="primaryKey"><br><br>
            <button type="submit">Update</button>
            <button>Show Table</button>
        </div>

    <?php elseif($selectedTool == 'lastname'):?>
        
        <div>
            <label><br><br>Enter Updated LastName</label><br>
            <input type="text" name="updatedLastName">

            <label><br><br>Enter Unique Identifier</label><br>
            <input type="number" name="primaryKey"><br><br>
            <button type="submit">Update</button>
            <button>Show Table</button>
        </div>
      
    <?php elseif($selectedTool == 'course'):?>  
        <div>
            <label><br><br>Enter Updated Course</label><br>
            <input type="text" name="updatedCourse">

            <label><br><br>Enter Unique Identifier</label><br>
            <input type="number" name="primaryKey"><br><br>
            <button type="submit">Update</button>
            <button><?include 'Retrieve.php'?>Show Table</button>
        </div>  

    <?php endif; ?>
</body>
</html>