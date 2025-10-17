<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="larger.php" method= 'post'>
        <label>First Number: </label><input type="text" name="first">
        <label>Second Number: </label><input type="text" name="second">
        <input type="submit" value="Check" name= 'check'>
    </form> 
</body>
</html>

<?php

#Using @ is not a good practice for hiding the errors but i just did it for practice
@$first = $_POST['first'];
@$second = $_POST['second'];

if (isset($_POST['check'])) {
    if ($first == $second) {
        echo "The numbers are equal";
    }
    elseif($first>$second){
        echo "$first is greater then $second";
    }

    else{
        echo "$second is greater";
    }
}

#OR BELOW IS THE NICE PRACTICE

    // if (isset($_POST['check'])) {
    //     // Use filter_input for cleaner input handling
    //     $first = filter_input(INPUT_POST, 'first', FILTER_VALIDATE_FLOAT);
    //     $second = filter_input(INPUT_POST, 'second', FILTER_VALIDATE_FLOAT);

    //     if ($first === false || $second === false) {
    //         echo "<p>Please enter valid numbers.</p>";
    //     } elseif ($first == $second) {
    //         echo "<p>The numbers are equal.</p>";
    //     } elseif ($first > $second) {
    //         echo "<p>$first is greater than $second.</p>";
    //     } else {
    //         echo "<p>$second is greater than $first.</p>";
    //     }
    // }


?>