<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pavel Tytechko</title>
    <link rel="shortcut icon" href="pobrane (1).jpg" type="image/x-icon">
    <link rel="stylesheet" href="ojoj.css">
</head>
<body>
    <h1>DANKE!</h1>
    <?php
        $first = $_GET["first"];
        $last = $_GET["last"];
        echo "$first, $last";
    ?>
    <form action="index.php">
        <button>GO BACK!</button>
    </form>
    
</body>
</html>