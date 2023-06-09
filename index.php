<?php
    require_once "includes/db.php";
    require_once "includes/functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1, initial-scale=1.0">
    <title>Assignment 2 - CSCI4140</title>
    <link href="css/main.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<?php
    echo '<form method="POST" action="parts.php"> <input type="submit" value="Parts for Sale"/></form>'; echo '<br>';
    echo '<form method="POST" action="orders.php"> <input type="submit" value="List Orders"/></form>'; echo '<br>';
    echo '<form method="GET" action="partinfo.php"> <input type="number" name="part-num" id="part-num"/> Enter Part Number for more information</form>'; echo '<br>';
    echo '<form method="GET" action="orderinfo.php"> <input type="number" name="po-num" id="po-num"/> Enter Order Number for more information</form>'; echo '<br>';
    echo '<form method="POST" action="submitorder.php"> <input type="submit" value="Submit an Order"/></form>';
?>
</body>
</html>