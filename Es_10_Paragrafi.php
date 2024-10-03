<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragrafi</title>
</head>
<body>
    
    <?php 
    // Dimensione paragrafo
    $size=10;
    // Numero paragrafi
    $num=5;
    
    for ($i=0; $i < $num ; $i++) { 
        echo "<p style='font-size:{$size}px;'> ciaoo paragrafo numero " . $i+1 . "</p>";
        $size+=2;
    }
    ?>


</body>
</html>