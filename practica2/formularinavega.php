<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulari navega</title>
</head>
<body>
    <h1>navega</h1>
    <?php
        if(isset($_GET["index"])){
            $index = $_GET["index"];
        } else {
            $index = 0;
        }

        include "clXML.php";
        $llibre = new clXML();
        echo "<h1>Array " . $index ."</h1>";
        $llibre->nodeXML($index);
    ?>
    <div>
    <a href="formularinavega.php?index=<?php echo 0; ?>"><<</a>
    <a href="formularinavega.php?index=<?php echo $index-1; ?>"><</a>
    <a href="formularinavega.php?index=<?php echo $index+1; ?>">></a>
    <a href="formularinavega.php?index=<?php echo $llibre->ultimNode(); ?>">>></a>
    </div>
    <br>
    <a href="index.php">Tornar</a>
</body>
</html>
