<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

    <?php
        $text = 'Una mattina mi son svegliato! oh bella ciao, oh bella ciao.';
        echo var_dump($text);
        $word = $_GET['word'];
        $newText = str_replace($word, '***', $text);
        echo var_dump($newText);
    ?>

    <p>Testo originale: <?php echo $text ?> <br> Caratteri: <?php echo strlen($text) ?> </p>
    <p>Parola da censurare: <?php echo $word ?> </p>
    <p>Testo Censurato: <?php echo $newText ?> <br> Caratteri: <?php echo strlen($newText) ?> </p>
    
</body>
</html>


