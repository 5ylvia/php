<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Guess fruit</h1>
<form method="POST">
<?php
    $fruits=["apple", "pear", "banana", "orange"];
    foreach ($fruits as $fruit) {
        echo "<input type='radio' name='fruit' value='$fruit' />$fruit";
    }
    $choice = $_POST["fruit"];
?>
<br><br>
<input type="submit" value="Submit">
</form>
<h3><?php 
    $randIndex = array_rand($fruits);
    if (isset($choice)) {
        if ($fruits[$randIndex] === $choice) {
            echo "Lucky! You got it!";
        } else {
            echo "Not right! Try again";
        } 
    }
?></h2>
<p><?php
if(isset($choice)) {
    $fruit = $choice;
    echo "The fruit was $fruits[$randIndex].";
}
?></p>
</body>
</html>