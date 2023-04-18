<?php

$paragrafo = $_GET['paragrafo'];
$censura = $_GET['censura'];

$paragrafoCensurato = str_ireplace($censura, "***", $paragrafo);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censurata</title>
</head>
<body>
    
<h1>Php Badwords</h1>
<h2>la stringa originale è lunga: <?php echo strlen($paragrafo); ?></h2>
<p><?php echo $paragrafo; ?></p>
<hr/>
<h2>la stringa originale è lunga: <?php echo strlen($paragrafoCensurato); ?></h2>
<p><?php echo $paragrafoCensurato; ?></p>



</body>
</html>

