<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3</title>
</head>
<body>
    <header>
        <h1>Exercise 3</h1>
        <p>Create a function that receives as parameters an array of words and a character.<br>
           The function returns true if all the words in the array have the character passed as the second parameter.<br>
           For example:<br>
           If we have [“hello”, “Php”, “Html”] it will return true if we ask for “h” but false if we ask for “l”.</p><br>
    </header>
    <?php
        //Creating an array 
        checkwords(["hello", "php", "html"], 'h');
        //Creating a function that contains two parámeters, swords and char
        function checkwords($words, $char) {
            //Declaring variables and a for statement to resort the array
            $char = 'h';
            $words_len = count($words);
            $counter = 0;
            for ($i = 0; $i < $words_len; $i++) {
                if(str_contains($words[$i], $char)){
                $counter++;
            }
        }
            //Declaring the condition 
            if($counter == $words_len){
                echo "True";
            }else{
                echo "False";
            }
        }
        

    ?>
</body>
</html>