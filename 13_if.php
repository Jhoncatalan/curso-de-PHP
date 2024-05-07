<?php

if(1 >= 8) {
    echo "expreion verdadera";
}

if(1 >= 0):
    echo "expreion verdadera";
endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(1 >= 0): ?>
    <h1>Hola Mundo</h1>  
    <?php endif; ?>
</body>
</html>