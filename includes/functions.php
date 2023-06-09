<?php
    require_once "db.php";

function list_orders_075(){
    global $connection;

    $sql = "call listOrders075";
    $result = $connection->query($sql);

    if($result->num_rows > 0){
        while($rowData = mysqli_fetch_array($result)){
            echo "Order number: " . $rowData["poNo075"] . "\t|\tClient ID: " . $rowData["clientCompId075"] . "\t|\tDate of order: " . $rowData["dateOfPO075"] . "\t|\tOrder status: " . $rowData["status075"].'<br>';
        }
    }else{
        echo "No records found";
    }
}

function list_parts_075(){
    global $connection;

    $sql = "call listParts075";
    $result = $connection->query($sql);

    if($result->num_rows > 0){
        while($rowData = mysqli_fetch_array($result)){
            echo "Part number: " . $rowData["partno075"] . "\t|\tPart Name: " . $rowData["partName075"] . "\t|\tPrice: " . $rowData["currentPrice075"].'<br>';
        }
    }else{
        echo "No records found";
    }
}

function order_info_075($ordernum075){
    global $connection;

    $sql = "call orderInfo075(".$ordernum075.")";
    $result = $connection->query($sql);

    if($result->num_rows > 0){
        while($rowData = mysqli_fetch_array($result)){
            echo "Part name: " . $rowData["partname075"] . "\t|\tAmount purchased: " . $rowData["qty075"] . "\t|\tPrice per unit: " . $rowData["priceOrdered075"].'<br>';
        }
    }else{
        echo "No records found";
    }
}

function part_info_075($partnum075){
    global $connection;

    $sql = "call partInfo075(".$partnum075.")";
    $result = $connection->query($sql);

    if($result->num_rows > 0){
        while($rowData = mysqli_fetch_array($result)){
            echo "Part name: " . $rowData["partName075"] . "\t|\tPrice: " . $rowData["currentPrice075"] . "\t|\tAmount in stock: " . $rowData["qoh075"].'<br>';
        }
    }else{
        echo "No records found";
    }
}

function validate_order_num_075($ordernum075){
    global $connection;

    $sql = "select max(poNo075) + 1 from POs075";
    $result = $connection->query($sql);

    if($result->num_rows > 0){
    $rowData = mysqli_fetch_array($result);
        if($rowData["max(poNo075) + 1"] != $ordernum075){
            return false;
        }
    }else{
        echo "No records found";
    }
    return true;
}

function validate_client_num_075($clientnum075){
    global $connection;

    $sql = "select clientId075 from Clients075";
    $result = $connection->query($sql);

    if($result->num_rows > 0){
        while($rowData = mysqli_fetch_array($result)){
            if($rowData["clientId075"] == $clientnum075){
                return true;
            }        
        }
    }else{
        echo "No records found";
    }
    return false;
}

function create_purchase_order($ordernum075, $clientnum075, $datetime075){
    global $connection;
    $sql = "call createOrder075(".$ordernum075.", ".$clientnum075.", '".$datetime075."', \"Confirmed\")";
    $result = $connection->query($sql);
}

function validate_part_num_075($partnum075){
    global $connection;

    $sql = "select partNo075 from Parts075";
    $result = $connection->query($sql);

    if($result->num_rows > 0){
        while($rowData = mysqli_fetch_array($result)){
            if($rowData["partNo075"] == $partnum075){
                return true;
            }
        }
    }
    return false;
}

function add_line_to_order_075($ordernum075, $partnum075, $qty075){
    global $connection;

    $sqlForPrice = "select currentPrice075 from Parts075 where partNo075 = ".$partnum075;
    $resultForPrice = $connection->query($sqlForPrice);
    $rowData = mysqli_fetch_array($resultForPrice);
    $price = $rowData["currentPrice075"];

    $sqlPartInOrder = "select poNo075, partNo075 from Lines075 where poNo075 = ".$ordernum075." and partNo075 = ".$partnum075;
    $resultPartInOrder = $connection->query($sqlPartInOrder);
    if($resultPartInOrder->num_rows > 0){
        $sql = "call addToLine075(".$ordernum075.", ".$partnum075.", ".$qty075.")";
        $result = $connection->query($sql);
    }else{
        $sql = "call addToOrder075(".$ordernum075.", ".$partnum075.", ".$qty075.", ".$price.")";
        $result = $connection->query($sql);
    }
}
?>