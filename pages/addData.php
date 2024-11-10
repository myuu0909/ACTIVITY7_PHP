<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $student = [
        "name" => $_POST["name"],
        "age" => $_POST["age"],
        "gender" => $_POST["gender"],
        "college" => $_POST["college"],
        "course" => $_POST["course"],
        "campus" => $_POST["campus"]
    ];

    // Store student data in the session
    $_SESSION['students'][] = $student;

    // Redirect to showData.php to display the stored data
    header("Location: showData.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Add Data</title>
    <?php include('../layout/style.php'); ?>
</head>
<body class="sb-nav-fixed">
    <?php include('../layout/header.php'); ?>
    
    <div id="layoutSidenav">
        <?php include('../layout/navigation.php'); ?>
        <div id="layoutSidenav_content">
            <h2 style="text-align: center; color: #4CAF50;">Student Information Form</h2>
            <form action="addData.php" method="post" style="max-width: 400px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9;">
                
                <label for="name" style="display: block; margin-bottom: 5px; font-weight: bold;">Name:</label>
                <input type="text" id="name" name="name" required style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">
                
                <label for="age" style="display: block; margin-bottom: 5px; font-weight: bold;">Age:</label>
                <input type="number" id="age" name="age" required style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">
                
                <label for="gender" style="display: block; margin-bottom: 5px; font-weight: bold;">Gender:</label>
                <select id="gender" name="gender" required style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
                
                <label for="college" style="display: block; margin-bottom: 5px; font-weight: bold;">College:</label>
                <input type="text" id="college" name="college" required style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">
                
                <label for="course" style="display: block; margin-bottom: 5px; font-weight: bold;">Course:</label>
                <input type="text" id="course" name="course" required style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">
                
                <label for="campus" style="display: block; margin-bottom: 5px; font-weight: bold;">Campus:</label>
                <input type="text" id="campus" name="campus" required style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">
                
                <input type="submit" value="Submit" style="width: 100%; padding: 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">
            </form>
        </div>
    </div>
    <?php include('../layout/script.php'); ?>
</body>
</html>
