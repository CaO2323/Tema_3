<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1</title>
</head>
<body>
    <header>
        <h1>Exercise 1</h1>
        <p>Create an array and add 5 integers to it and then display them one by one.</p>
    </header>

<?php
    //Creating an array called numbers
    $numbers = [];
    //Adding 5 integers
    $numbers[] = 23;
    $numbers[] = 6;
    $numbers[] = 80;
    $numbers[] = 7;
    $numbers[] = 11;

    //display 
    for ($i=0; $i < count($numbers); $i++) { 
        echo $numbers[$i].'<br>';
      }

?>
</body>

</html>