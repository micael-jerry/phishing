<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COUCOU</title>
</head>
<body>

    <?php
        include "db.php";
        $identifier = getIdentifierById('1');
        echo $identifier['password'];
    ?>
</body>
</html>