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
    <h1>ZADANIE 1</h1>
    <form action="vali.php" method="POST">
        <input type="text" placeholder="Firstname" name="firstname">
        <input type="text" placeholder="Lastname" name="lastname">
        <input type="number" placeholder="Age" name="age">
        <button>SUBMIT</button>
    </form>
    <br>
    <h2>ZADANIE 2</h2>
    <form action="vali2.php" method="POST">
        <input type="text" placeholder="Firstname" name="first">
        <input type="text" placeholder="Lastname" name="last">
        <input type="email" placeholder="EMAIL" name="mail">
        <input type="password" placeholder="password" name="pas1">
        <input type="password" palceholder="confirm password" name="pas2">
        <button>SUBMIT</button>
    </form>
</body>
</html>