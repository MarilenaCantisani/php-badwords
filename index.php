<?php 
    //// Variable with a text paragraph
    $sentence = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic assumenda accusamus ex dolor, officia eius ipsam illo accusantium omnis eveniet labore ullam voluptas quibusdam! Earum tempore dolorem odit saepe possimus.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti labore iure magni, totam eaque doloremque dolores modi qui similique eos quasi velit animi. Nisi eum facilis cum architecto vero quia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti labore iure magni, totam eaque doloremque dolores modi qui similique eos quasi velit animi. Nisi eum facilis cum architecto vero quia.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti labore iure magni, totam eaque doloremque dolores modi qui similique eos quasi velit animi. Nisi eum facilis cum architecto vero quia.";
    //// Lenght sencence
    $length_sentence = strlen($sentence);
    //// Word to censor
    $word_censored = $_GET["word"];
    //// Sencence without the censored word 
    $new_sentence = str_replace($word_censored, "***", $sentence);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to css file  -->
    <link rel="stylesheet" href="css/style.css">
    <title>Bad words</title>
</head>
<body>
    <header>
        <!-- Title -->
        <h1>Bad words</h1>
    </header>
    <main>
        <!-- Print the sentence -->
        <h4>Sentence:</h4>
        <p> 
            <?php echo $sentence; ?>
        </p>

        <!-- Print the length of the sentence -->
        <div>
            <strong>Length sentence:</strong>
            <?php echo $length_sentence; ?>
        </div>

        <!-- Print the sencence without the censored word -->
        <h4>Sentence without the censored word:</h4>
        <p>
            <?php echo $new_sentence; ?>
        </p>
    </main> 
</body>
</html>
