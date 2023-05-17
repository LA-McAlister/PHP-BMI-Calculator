<?php
    $height = 0;
    $weight = 0;
    $bmi = 0;
    if(isset( $_POST["height"])) {
        $height = $_POST["height"];
    }
    if(isset( $_POST["weight"])) {
        $weight = $_POST["weight"];
}
    if(isset( $_POST["calculate"])) {
        $bmi = ($weight / ($height * $height)) * 703;
}
?>
<html>
<h1>Please enter your information to calculate your BMI:</h1>
<?php
 $form = <<<FORM
<form name="bmi" method="post" actions="/bmi.php">
    <p><label name="weight">Weight in Pounds</label>
        <lable><input name="weight" type="number" value="$weight"></lable>
    </p>
    <p><label name="height">Height in Inches</label>
        <lable><input name="height" type="number" value="$height"></lable>
    </p>
    <p><input name="calculate" type="submit" value="Calculate BMI"></p>
</form>
FORM;
 echo $form;
 echo "<p>Your BMI is: $bmi</p>"
 ?>
</html>