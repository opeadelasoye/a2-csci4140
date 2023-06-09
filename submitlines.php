<?php
    ini_set('display_errors', 0);
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
    <form style="width: 200px" action="submitlines.php" id="user-input">
    	<div class="form-group my-3>
            <label for="po-num">Part number</label>
            <input type="number" class="form-control" name="part-num" id="part-num">
		</div>
    	<div class="form-group>
            <label for="client-num">Quantity</label>
            <input type="number" class="form-control" name="quantity" id="quantity">
		</div>
            <button class="btn btn-primary" type="submit" id="submit-button" >Add to Order</button>
	</form>
<?php
    if(validate_order_num_075($_GET['po-num']) && validate_client_num_075($_GET['client-num'])){
        create_purchase_order($_GET['po-num'], $_GET['client-num'], $_GET['date-time']);
        $_SESSION['currentOrder'] = $_GET['po-num']; 

        echo '<form method="POST" action="index.php"> <input type="submit" value = "Back to Homepage"/></form>';
        echo '<form method="POST" action="orderinfo.php"> <input type="submit" value = "Done with order"/></form>';
    }else if(validate_part_num_075($_GET['part-num'])){
        add_line_to_order_075($_SESSION["currentOrder"], $_GET['part-num'], $_GET['quantity']);

        echo '<form method="POST" action="index.php"> <input type="submit" value = "Back to Homepage"/></form>';
        echo '<form method="POST" action="index.php"> <input type="submit" value = "Done with order"/></form>';
    }else{
        echo("Invalid PO/Client/Part number");
        echo '<form method="POST" action="submitorder.php"> <input type="submit" value = "Restart order"/></form>';
    }
?>
</body>
</html>