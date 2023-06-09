<?php
    session_start();
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
    <form style="width: 250px" action="submitlines.php" id="user-input">
    	<div class="form-group my-3>
            <label for="po-num">PO number</label>
            <input type="number" class="form-control" name="po-num" id="po-num">
		</div>
    	<div class="form-group>
            <label for="client-num">Client number</label>
            <input type="number" class="form-control" name="client-num" id="client-num">
		</div>
    	<div class="form-group>
            <label for="date-time">Date/Time (yyyy-mm-dd hh:mm:ss)</label>
            <input type="text" class="form-control" name="date-time" id="date-time">         
        </div>
            <button class="btn btn-primary" type="submit" id="submit-button" >Submit</button>
	</form>
<?php
    echo '<form method="POST" action="index.php"> <input type="submit" value = "Back to Homepage"/></form>';
?>
</body>
</html>