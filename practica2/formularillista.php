<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulari llista</title>
</head>
<body>
    <h1>llista dels llibres</h1>

    <?php
        include "clXML.php";

        $llibre = new clXML();
        
        $llibre->readalltitles();   
    ?>
    
    <a href="index.php">Tornar</a>
</body>
</html>