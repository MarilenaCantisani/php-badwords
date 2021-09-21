<?php 
    //// Variable with a text paragraph
    $sentence = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic assumenda accusamus ex dolor, officia eius ipsam illo accusantium omnis eveniet labore ullam voluptas quibusdam! Earum tempore dolorem odit saepe possimus.";
    //// Lenght sencence
    $length_sentence = strlen($sentence);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad words</title>
</head>
<body>
    <header>
        <!-- Title -->
        <h1>Bad words</h1>
    </header>
    <main>
        <p>
            <!-- Print the sentence -->
            <?php
                echo $sentence;
            ?>
        </p>
        <p>
            <strong>length sentence:</strong>
            <!-- Print the length of the sentence -->
            <?php
                echo $length_sentence;
            ?>
        </p>
    </main>
   
   
</body>
</html>