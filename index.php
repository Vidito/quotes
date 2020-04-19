<?php 
$quotes = [
    ['text' => 'La acción es la clave fundamental para todo éxito.', 'author'=> 'Pablo Picasso.',
    'english'=>'Action is the foundational key to all success.'],
    ['text' => 'Nunca renuncies a un sueño por el tiempo que se requiere para lograrlo. El tiempo pasará de todas formas.',  'author'=> 'Earl Nightingale.',
    'english'=>'Never give up on a dream just because of the time it will take to accomplish it. The time will pass anyway.' ],
    ['text'=>'No puedo cambiar la dirección del viento, pero sí ajustar mis velas para llegar a mi destino.',  'author'=>'James Dean.', 
    'english'=>'I can’t change the direction of the wind, but I can adjust my sails to always reach my destination.']
    


];

$quote= $quotes[array_rand($quotes)];
$quoteText= $quote['text'];
$quoteAuthor= $quote['author'];
$quoteEnglish=$quote['english'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Quote</title>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Righteous&display=swap" rel="stylesheet">
    <style>
    
    body {
        background-image: url("black.jpg");
        
        text-align:center;
        color:white;
        font-family: 'Righteous', cursive;
        letter-spacing: 3px;
    }
    .time {
        margin: 40px;
    }
    .wrapper {
        margin-top:90px;
        padding:0;
    }
    .wrapper h1 {
        font-size: 40px;
    }
    blockquote  {
        border-left: solid 10px white;
        border-right: solid 10px white;
    }

    </style>
</head>
<body>
<h2 class="time"> <?php  echo "Hoy es " . date("l")." ". date("d/m/Y"); ?> </h2>
<div class="wrapper">
    <blockquote>
    <h1> &ldquo;
    <?php echo $quoteText; ?>
    &rdquo; </h1>
    <h2>&ldquo;
    <?php echo $quoteEnglish; ?>
    &rdquo;</h2>
    <h3><strong>- <?php echo $quoteAuthor; ?></strong></h3>

    </blockquote>
    </div>
</body>
</html> 



