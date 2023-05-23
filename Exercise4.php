<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Exercise 4</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1>Exercise 4</h1>
            <ul>Make an associative array that represents information about yourself.<br>
               Specifically, it must include:
                <li>first name</li>
                <li>age</li>
                <li>email</li>
                <li>favorite food</li>
            </ul>
        </header>
   </body>
   <?php
    $myArray = [
    "name" => "Nani", 
    "age" => "42", 
    "email" => "anajava2323@gmail.com", 
    "favorite food" => "fried fish" 
];
    print_r($myArray);

    ?>
</html>