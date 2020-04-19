<?php 
$quotes = [
    ['text' => 'La acción es la clave fundamental para todo éxito.', 'author'=> 'Pablo Picasso.',
    'english'=>'Action is the foundational key to all success.'],
    ['text' => 'Nunca renuncies a un sueño por el tiempo que se requiere para lograrlo. El tiempo pasará de todas formas.',  'author'=> 'Earl Nightingale.',
    'english'=>'Never give up on a dream just because of the time it will take to accomplish it. The time will pass anyway.' ],
    ['text'=>'No puedo cambiar la dirección del viento, pero sí ajustar mis velas para llegar a mi destino.',  'author'=>'James Dean.', 
    'english'=>'I can’t change the direction of the wind, but I can adjust my sails to always reach my destination.'],
    ['text'=>'La mayoría de las personas gastan más tiempo y energías en hablar de los problemas que en afrontarlos.', 'author'=>'Henry Ford. ', 'english'=>'Most people spend more time and energy going around problems than in trying to solve them '],
    ['text'=>'Todos nuestros sueños se pueden hacer realidad si tenemos el coraje de perseguirlos. ', 'author'=>'Walt Disney ', 'english'=>'All our dreams can come true if we have the courage to pursue them '],
    ['text'=>'Dentro de veinte años estarás más decepcionado por las cosas que no hiciste, que por las que hiciste. Así que suelta las amarras. Navega lejos del puerto seguro. Atrapa los vientos alisios en tus velas. Explora. Sueña. Descubre. ', 'author'=>'Mark Twain ', 'english'=>'Twenty years from now you will be more disappointed by the things that you didn’t do than by the ones you did do. So throw off the bowlines. Sail away from the safe harbor. Catch the trade winds in your sails. Explore. Dream. Discover '],
    ['text'=>' Cambia tus pensamientos y cambiarás tu mundo', 'author'=>'Norman Vincent Peale ', 'english'=>'Change your thoughts and you change your world '],
    ['text'=>' Trabaja duro en silencio, que el éxito sea tu ruido', 'author'=>'Frank Ocean ', 'english'=>'Work hard in silence, let your success be your noise '],
    ['text'=>' No importa lo lento que vayas, siempre y cuando no te detengas.', 'author'=>' Confucios', 'english'=>' It does not matter how slowly you go as long as you do not stop.'],
    ['text'=>'Tu trabajo va a llenar gran parte de tu vida, y la única manera de estar realmente satisfecho es hacer lo que creas es un gran trabajo. Y la única manera de hacerlo es amar lo que haces. Si no lo has encontrado aún, sigue buscando. ', 'author'=>' Steve Jobs', 'english'=>'Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do. If you haven’t found it yet, keep looking '],
    ['text'=>'Imposible es una palabra que se encuentra sólo en el diccionario de los tontos. ', 'author'=>'Napoleón Bonaparte ', 'english'=>'Impossible is a word to be found only in the dictionary of fools.” – Napoleon Bonaparte '],
    ['text'=>' Recuerda que la felicidad es una forma de viajar, no un destino', 'author'=>'Roy L. Goodman. ', 'english'=>'Remember that happiness is a way of travel, not a destination '],
    ['text'=>'Los desafíos son los que hacen que la vida sea interesante y superarlos es lo que hace la vida significativa ', 'author'=>'Joshua J. Marine ', 'english'=>'Challenges are what make life interesting and overcoming them is what makes life meaningful '],
    ['text'=>' Yo prefiero ser un fracaso en algo que me gusta, que un éxito en algo que odio', 'author'=>'George Burns ', 'english'=>'I’d rather be a failure at something I love than a success at something I hate '],
    ['text'=>' La vida es un 10% lo que me ocurre y 90% cómo reacciono a ello.', 'author'=>' Charles R. Swindoll.', 'english'=>'Life is 10% of what happens to me and 90% of how I react to it.”  '],
    ['text'=>'La persona que dice que algo no puede hacerse no debe interrumpir a la persona que lo está haciendo ', 'author'=>'Proverbio chino. ', 'english'=>'The person who says it cannot be done should not interrupt the person who is doing it. '],
    ['text'=>' Los ganadores nunca se rinden y los que se rinden nunca ganan', 'author'=>' Atribuida a Vince Lombardi', 'english'=>' Winners never quit, and quitters never win'],
    ['text'=>'No conquistamos a la montaña, sino a nosotros mismos', 'author'=>'Edmund Hillary. ', 'english'=>'It is not the mountain we conquer, but ourselves '],
    ['text'=>'¿Quieres saber quién eres? No preguntes. ¡Actúa! La acción delineará y definirá quién eres ', 'author'=>' Thomas Jefferson', 'english'=>'Do you want to know who you are? Don’t Ask. Act! Action will delineate and define you '],
    ['text'=>'Si puedes soñarlo, puedes lograrlo ', 'author'=>' Zig Ziglar.', 'english'=>' If you can dream it, then you can achieve it'],
    ['text'=>' El conocimiento tiene que ser mejorado, desafiado e incrementado constantemente, o se desvanece', 'author'=>'Peter Drucker ', 'english'=>'Knowledge has to be improved, challenged and increased constantly, or it vanishes '],
    ['text'=>'No cuentes los días, haz que los días cuenten ', 'author'=>'Muhammad Ali. ', 'english'=>' Don’t count the days, make the days count'],
    ['text'=>' Recuerda que no conseguir lo que quieres es a veces un maravilloso golpe de suerte', 'author'=>'Dalai Lama. ', 'english'=>' Remember that sometimes not getting what you want is a wonderful stroke of luck'],
    ['text'=>' El secreto real del éxito es el entusiasmo', 'author'=>'Walter Chrysler. ', 'english'=>'The real secret of success is enthusiasm '],
    ['text'=>' Para evitar la crítica no hagas nada, no digas nada, no seas nada', 'author'=>' Elbert Hubbard.', 'english'=>' To avoid criticism say nothing, do nothing, be nothing'],
    ['text'=>'El éxito no es la llave de la felicidad. La felicidad es la llave del éxito. Si amas lo que haces, tendrás éxito ', 'author'=>'Albert Schweitzer. ', 'english'=>'Success is not the key to happiness. Happiness is the key to success. If you love what you are doing, you will be successful '],
    ['text'=>' Sé agradecido por lo que tienes; terminarás teniendo más. Si te concentras en lo que no tienes, nunca, jamás tendrás suficiente', 'author'=>'Oprah Winfrey ', 'english'=>' Be thankful for what you have; you’ll end up having more. If you concentrate on what you don’t have, you will never, ever have enough'],
    ['text'=>'La pregunta no es quién me va a dejar hacer algo; es quién se atreverá a detenerme.”  ', 'author'=>' Ayn Rand.', 'english'=>'The question isn’t who is going to let me; it’s who is going to stop me '],
    


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
    * {
        padding:0;
    }
    body {
        background-image: url("black.jpg");
        padding:0;
        text-align:center;
        color:white;
        font-family: 'Indie Flower', cursive;
        letter-spacing: 3px;
    }
    .time {
        margin: 40px;
    }
    .wrapper {
        margin-top:90px;
        padding:0;
    }

   
    .wrapper {
        border-left: solid 7px white;
        border-right: solid 7px white;
    }

    </style>
</head>
<body>
<h2 class="time"> <?php  echo "Hoy es " . date("l")." ". date("d/m/Y"); ?> </h2>
   <div class="wrapper">
    <p>
    <h2> &ldquo;
    <?php echo $quoteText; ?>
    &rdquo; </h2>
    <h2>&ldquo;
    <?php echo $quoteEnglish; ?>
    &rdquo;</h2>
    <h3><strong>- <?php echo $quoteAuthor; ?></strong></h3>

    </p>
    </div>
</body>
</html> 



