<?php
    $height = 0;
    $weight = 0;
    $bmi = 0;
    if(isset( $_POST["height"])) {
        $height = $_POST["height"];
    }
    if(isset( $_POST["weight"])) {
        $height = $_POST["weight"];
}
    if(isset( $_POST["submit"])) {
        $bmi = ($weight / ($height * $height)) * 703;
}
?>

<!DOCTYPE html>
<html lang="en"
<head>
    <title>BMI Calculator</title>
</head>

<h1>Please enter your information to calculate your BMI</h1>

<?php



?>

